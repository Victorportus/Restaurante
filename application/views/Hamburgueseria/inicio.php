
<!--Comienza el cuerpo de la página-->
    <div class="container-fluid">
    <h1>¡Bienvenidos a la Hamburgueseria!</h1>
    <h2>Esta el la página de <?php echo $title;?></h2>
    <h2>
    <?php 
    if ( isset( $_COOKIE[ 'visitas' ] ) ) {

        setcookie( 'visitas', $_COOKIE[ 'visitas' ] + 1, time() + 3600 * 24 );
        $mensaje = 'Numero de visitas: '.$_COOKIE[ 'visitas' ];
        echo "¡Que bueno que nos visitas de nuevo!";
        echo '<script language="javascript">alert("';
        echo $mensaje;
        echo '");</script>';
    }
    else {
    
        setcookie( 'visitas', 1, time() + 3600 * 24 );
        $mensaje = 'Bienvenido por primera vez a nuesta web';
    }
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

    <!--contador de visitas por pagina web-->
    <div>    
    <div id="sfcpyq4f5tbry1fxnr4tdhqjre2pbgzgxzn"></div><script type="text/javascript" src="https://counter8.stat.ovh/private/counter.js?c=pyq4f5tbry1fxnr4tdhqjre2pbgzgxzn&down=async" async></script><noscript><a href="https://www.contadorvisitasgratis.com" title="contador de visitas para blogger"><img src="https://counter8.stat.ovh/private/contadorvisitasgratis.php?c=pyq4f5tbry1fxnr4tdhqjre2pbgzgxzn" border="0" title="contador de visitas para blogger" alt="contador de visitas para blogger"></a></noscript>
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