<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estilos.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/main.js"></script>

    <title>HAMBURGUESERIA</title>

</head>
<body class="fondo">
<!-- Este es el encabezado -->
<div class="container-fluid row">    
<div class="titulo col-md-10 text-center">LA HAMBURGESERIA</div>
<div class="col-md-2 ">
<img class="foto" src="<?php echo base_url(); ?>assets/fondo.jpeg">
</div>
</div>
<!--Termina el encabezado-->
<!--Comienza el cuerpo de la página-->
    <br><br>
<div>
    <?php echo $contenido; ?>
</div>
<!--Termian el cuerpo de la página-->

<!--Espacio para cosa API-->
<div class="container-fluid cocina my-4">

<div class="input my-3 row">
  <!--<input type="text" id="cityInput" class="col-md-10">
  <input type="submit" value="Submit" class="button col-md-1" onclick="getWeather()">-->
  <button type="button" class="btn btn-primary col-md-3 mx-3" onclick="getWeather()">Descubra el clima en su ciudad</button> 
  <div class="col-md-6 "></div>
  <div class="col-md-2 ">
  <a href="https://openweathermap.org/api" target="_blank"><img src="<?php echo base_url(); ?>assets/logo_open_weather.png" alt="open_weather_logo" class="rounded pull-right"></a>
  </div>
</div>

<div class="display row">
<div class="col-md-6">
  <p class="ciudad"></p>
  <p class="desc"></p>
  <p class="hum"></p>
</div>
<div class="col-md-6">
  <p class="temp"></p>
  <p class="tempMax"></p>
  <p class="tempMin"></p>
</div>
  </div>

</div>
<!--Termina espacio para API-->

<!--Espacio para contador de visitantes-->
<div class="container-fluid cocina my-4">
<p>aqui puede ir el contador</p>
</div>
<!--Termina espacio para contador-->

</body>
</html>