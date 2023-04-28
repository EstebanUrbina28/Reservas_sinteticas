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


  <div class="grid-container">
    <?php include('menu_2.php'); ?>
    
    
    <?php  
    
        include("verifica_session.php");
        if (verificar()==0) return;
              
        //echo "<p>Bienvenido, Doctor: " . $_SESSION['usuario'];
        //session_start();
        
    ?>
    
    
    <div class="grid-x">  
    
    </div>
    <section class="tag-cloud-section">
    <h5 class="tag-cloud-title"> Bienvenidos  Usuario:  <?php echo $_SESSION['usuario'];  ?> </h5>
    <div class="tag-cloud">
    <a class="tag-cloud-individual-tag" href="registro_cancha.php">Gestionar Canchas<i class="fa fa-times-circle" aria-hidden="true"></i></a>
    <a class="tag-cloud-individual-tag" href="agenda.php">Administrar agenda<i class="fa fa-times-circle" aria-hidden="true"></i></a>
  </div>
</section>


    


      






 

  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>
  

</body>

</html>