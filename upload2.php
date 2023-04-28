<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manejo de Bases de Datos - ESCUELA</title>
  <meta name="description" content="Pagina de prueba">
  <meta name="keywords" content="codigo basico PHP">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>


  <div class="grid-container">
    <?php include('dibuja_menu.php'); ?>
    <div class="grid-x">
      
      <div class="cell small-6">
        <h3>Resultados de la carga</h3>
        <hr>
        <?php 
            $xid = $_POST["lstid"];
            $tmp = $_FILES["txtarc"]["tmp_name"];
            $arc = $_FILES["txtarc"]["name"];
            $tam = $_FILES["txtarc"]["size"];
            $err = $_FILES["txtarc"]["error"];
            $tip = $_FILES["txtarc"]["type"];

            echo "<br>Nombre temporal $tmp ";
            echo "<br>Nombre real $arc ";
            echo "<br>Tamaño $tam ";
            echo "<br>Tipo de archivo $tip ";

            if ($err==0){  //no hay errores
                if ($tip=="image/jpeg"){
                    echo "<p>El archivo llegó correctamente!!</p>";
                    move_uploaded_file($tmp,"upload/f_" . $xid . $arc . ".jpg");
                    //insertar en la base de datos las descripciones 
                }
                else{
                    $err=1;
                    echo "<hr><h4>Error: El archivo seleccionado no es imagen JPG</h4>";    
                }
            }
            else {
                echo "<hr><h4>Error: El archivo no se cargó al sistema</h4>";
            }
        ?>


      </div>
      <div class="cell small-6">
        <h3>Fotografía cargada </h3>
        <hr>
         <?php 
            if ($err==0){  //no hay errores
                echo "<img src='personas/" . $xid . ".jpg' height='200'  width='200'  alt='Imagen Persona'>";
            }
         ?>   

      </div>

    </div>



    



  </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>
  

</body>

</html>