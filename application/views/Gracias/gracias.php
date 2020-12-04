<!--Comienza el cuerpo de la página-->
<div>
    <div class="col-md-8">
    <h1 class="col-md-10">Felicidades, tu pedido ha sido creado con exito</h1>
    <h2 class="col-md-10">¡<?php echo $title;?> por tu orden!</h2>
    </div>
    <div class="col-md-4">
    </div>
    <br><br><br>
    <div class="container-fluid row">
        <div class="container col-md-6">
            <p class="datos">Para volver al inicio y crear otra orden, presiona el boton</p>
            <a class="btn btn-success" href="<?php echo site_url('Hamburgueseria') ?>" role="button">Regresar al inicio</a>
        </div>

        <div class="container col-md-6 pull-right">
            <p class="datos">Revisar cocina (unicamente administrador)</p>
            <a class="btn btn-danger" href="<?php echo site_url('Hamburgueseria/cocina') ?>" role="button">Revisar cocina</a>
            </div>
    </div>
</div>
<!--Termina el cuerpo de la página-->