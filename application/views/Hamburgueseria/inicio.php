
<!--Comienza el cuerpo de la página-->
    <div class="container-fluid">
    <h1>¡Bienvenidos a la Hamburgueseria!</h1>
    <h2>Esta el la página de <?php echo $title;?></h2>
    <h2><?php 
    if(isset($_COOKIE['hamburgueseria'])){
        echo"¡Que bueno que nos visita de nuevo!";
    }  else{
        setcookie('hamburgueseria', time()+(120), "/");
    }
        /* unset($_COOKIE["asno2"]);
        setcookie('asno', time()-(3600), "/", '.Hamburgueseria/');
        por alguna vaina no deja de pillar el cookie. parece que o no se deja borrar o 
        toma el cookie aunque este vencido. cookie berraco.*/
    ?></h2>
    <br><br><br>
    <p class="datos">Para iniciar tu pedido ingresa tus datos</p>
    <br>
    <div>
        <form method="post" action="Pedido/savedata" name="forminicio">
            <input type="text" placeholder="Introduzca su nombre" id="nombre" name="nombre">            
            <select id="mesa" name="mesa">
            <?php                
                foreach ($datosmesas as $i => $item)
                echo '<option value="'.$item->id.'">mesa '.$item->nro_mesa.'</option>';
                ?>
            </select>
            <br><br>
            <input type="submit" id="save" name="save" class="btn btn-warning" onclick="return required()" role="button" value="Siguiente" />
        </form>
    </div>
</div>
<!--Termian el cuerpo de la página-->

