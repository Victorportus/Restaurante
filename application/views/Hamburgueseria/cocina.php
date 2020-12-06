<!--Comienza el cuerpo de la página-->
<div class="row">
   <div class="container-fluid col-md-11">
     <h1>Esta es la página de <?php echo $title;?></h1>
     <br>
     <h2>Ordenes pendientes por entregar</h2>
     <br>
    </div>
    <div class="col-md-1">
    </div>
</div>
<!-- Este es el primer renglón con dos contenedores para pan y carne-->
<div class="container-fluid">

    <?php 
      if(count($datoscocina)>0) {
      foreach($datoscocina as $item){
    ?>

    <div class="col-md-12 cocina">

        
            <table style="width:100%">
              <tr>
                <th width="50%">Elemento</th>
                <th width="50%">Elección</th> 
              </tr>

              <tr>
                <td>Nombre:</td>
                <td><p> <?php echo $item->nombre; ?></p></td>
              </tr>
              <tr>
                <td>Mesa:</td>
                <td><p> <?php echo $item->mesa; ?></p></td>
              </tr>
              <tr>
                <td>Pan:</td>
                <td><p><?php echo $item->pan; ?></p></td>
              </tr>
              <tr>
                  <td>Carne:</td>
                  <td><p> <?php echo $item->carne; ?></p></td>
                </tr>
                <tr>
                  <td>Verdura</td>
                  <td><p> <?php echo $item->verdura; ?></p></td>
                </tr>
                <tr>
                  <td>Bebida</td>
                  <td><p> <?php echo $item->bebida; ?></p></td>
                </tr>
                <tr>
                  <td>Acompañamiento</td>
                  <td><p> <?php echo $item->acompanamiento; ?></p></td>
                </tr>
                <tr>
                  <td>Borra registro?</td>
                  <td><p>
                  <form method="post" action = "../Pedido/deletepedido" name="formdeletepedido">
                    <input type="hidden" id="idpedido" name="idpedido" value="<?php echo $item->idpedidos;?>">
                    <input type="submit" id="delete" name="delete" class="btn btn-danger" role="button" value="Borrar" />            
                  </form>
                  </p>
                  </td>
                </tr>
          </table>
    </div>
    <?php echo '<br/>'; } }?>
</div>
<!--Termina el cuerpo de la página-->