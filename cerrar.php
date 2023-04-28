<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> www.canchasinteticas.com - reservas</title>
  <meta name="description" content="Pagina de prueba">
  <meta name="keywords" content="codigo basico PHP">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/redes.css">
  <link rel="stylesheet" href="css/container.css">
  <link rel="stylesheet" href="css/main.css">

</head>

<body>
 
<?php
    session_start();
    $_SESSION["usuario"]="";
    session_destroy();
    echo " Su Sesion Ha Finalizado!";
    header("Location: index.php"); 
    
  ?>
  

  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>
  

</body>

</html>