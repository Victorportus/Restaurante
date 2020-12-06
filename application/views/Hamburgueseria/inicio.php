
<!--Comienza el cuerpo de la página-->
    <div class="container-fluid">
    <h1>¡Bienvenidos a la Hamburgueseria!</h1>
    <h2>Esta el la página de <?php echo $title;?></h2>
    <!--<h2>
    <?php 
    /*if(isset($_COOKIE['hamburgueseria'])){
        echo"¡Que bueno que nos visita de nuevo!";
    }  else{
        setcookie('hamburgueseria', time()+(120), "/");
    }
        /* unset($_COOKIE["asno2"]);
        setcookie('hamburgueseria', time()-(3600), "/", '.Hamburgueseria/');
        por alguna vaina no deja de pillar el cookie. parece que o no se deja borrar o 
        toma el cookie aunque este vencido. cookie berraco.*/
    ?></h2>-->
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

<!-- este es el contador de visitas -->
<!--<div class="container-fluid cocina my-4">
    <?php
    //$file=fopen("visitas.txt","w");
    //session_start();
    //$_SESSION['v']=$_SESSION['v']+1;
    //Lo anterior tiene que estar comantado/desactivado para que cuente parejo
    //$count=$_SESSION['v'];
    //fwrite($file, $count);
    ?>
    <p>Esta página se ha cargado 
    <?php
        //$fi=file_get_contents("visitas.txt");
        //echo $fi;
    ?> veces</p>
    </div>-->
    <!-- Para regresar el contador a 0, hay que cambiar $_SESSION['v']+1 por 0, cargar la página, y luego regresar
    todo a como estaba-->
<!-- Termina el contador de visitas -->