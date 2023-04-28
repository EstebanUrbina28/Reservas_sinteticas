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
  <link rel="stylesheet" href="css/redes.css">
  <link rel="stylesheet" href="css/container.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/reserva.css">
  <link rel="stylesheet" href="css/main1.css">
</head>

<body>


  <div class="grid-container">
        <?php include('dibuja_menu.php'); ?>
        
        <?php 
            //capturando datos de entrada
                     
            $name = $_POST["name"];
            $telefono = $_POST["tel"];
            $fecha = date('y-m-d', strtotime($_POST['fecha']));
            $hora = $_POST["hora"];
          
            

            //abrir conexión 
            include("conexion.php");
            $bd  = conectar();
            if (!$bd) return;

            //prepara y ejecuta consulta en BD 
            $sql = "insert into clientes values('.','$name','$telefono','$fecha','$hora')";
            $res = mysqli_query($bd,$sql);
            if ($res){
                echo "<div data-closable class='callout alert-callout-subtle primary large'>
                <strong>Yo!</strong> Registro guardado
                <button class='close-button'aria-label='Dismiss alert' type='button' data-close>
                  <span aria-hidden='true'>⊗</span>
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
