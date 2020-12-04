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
    <div class="col-md-12 cocina">

        <table style="width:100%">
            <tr>
              <th>Elemento</th>
              <th>Elección</th> 
            </tr>
            <tr>
              <td>Nombre:</td>
              <td><p id="setNombre"></p></td>
            </tr>
            <tr>
              <td>Mesa:</td>
              <td><p id="setMesa"></p></td>
            </tr>
            <tr>
              <td>Pan:</td>
              <td><p id="setPan"></p></td>
            </tr>
            <tr>
                <td>Carne:</td>
                <td><p id="setCarne"></p></td>
              </tr>
              <tr>
                <td>Verdura</td>
                <td><p id="setVerdura"></p></td>
              </tr>
              <tr>
                <td>Bebida</td>
                <td><p id="setBebida"></p></td>
              </tr>
              <tr>
                <td>Acompañamiento</td>
                <td><p id="setAcompañamiento"></p></td>
              </tr>
        </table>

    </div>
</div>
<!--Termina el cuerpo de la página-->