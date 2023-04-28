<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <meta name="description" content="Pagina de prueba">
  <meta name="keywords" content="codigo basico PHP">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/alert.css">
</head>

<body>


  <div class="grid-container">
        <?php include('dibuja_menu.php'); ?>
        <h1>Resultado de la inserción </h1>
        <?php 
            //abrir conexión 
            include("conexion.php");
            $bd  = conectar();
            if (!$bd) return;
            //capturando datos de entrada            
            $foto = $_FILES["foto"]['name'];
            $ruta = $_FILES["foto"]["tmp_name"];
            $destino="upload/".$foto; 
            copy($ruta,$destino); 

            //prepara y ejecuta consulta en BD 
            $sql = "insert into imagen values ('.','$destino')";
            $res = mysqli_query($bd,$sql);
            if ($res){
                
              header("location: registro_cancha.php");
              echo "<div data-closable class='alert-box callout success'>
                <i class='fa fa-check'></i> Registro adicionado con exito!
                <button class='close-button' aria-label='Dismiss alert' type='button' data-close>
                  <span aria-hidden='true'>&CircleTimes;</span>
                </button>
              </div>";
            }
            else{
                echo "<h3>Error: </h3>";
                echo "<p>Registro no adicionado: "   . mysqli_error($bd) . "</p>";
            }
            //cerrar conexión
            mysqli_close($bd);
        ?>
        <hr>
        
    </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>
