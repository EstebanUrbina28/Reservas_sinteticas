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
            //capturando datos de entrada
            $name = $_POST["name"];
            $dir = $_POST["dir"];
            $tel = $_POST["tel"];
            $t_cancha = $_POST["lstesp"];
            $num_cach = $_POST["lscancha"];
            $horario = $_POST["lsthorario"];
            $servicio = $_POST["lstservicios"];
            $techo = $_POST["techo"];
            $valor = $_POST["precio"];
            $foto = $_FILES["foto"]['name'];
            $ruta = $_FILES["foto"]["tmp_name"];
            $foto1 = $_FILES["foto1"]['name'];
            $ruta1 = $_FILES["foto1"]["tmp_name"];  
            $foto2 = $_FILES["foto2"]['name'];
            $ruta2 = $_FILES["foto2"]["tmp_name"];         
            $destino="upload/".$foto;
            $destino1="upload/".$foto1;
            $destino2="upload/".$foto2;
            copy($ruta,$destino); 
            copy($ruta1,$destino1); 
            copy($ruta2,$destino2);      
            

            //abrir conexión 
            include("conexion.php");
            $bd  = conectar();
            if (!$bd) return;

            //prepara y ejecuta consulta en BD 
            $sql = "insert into canchas values('.','$name','$dir',$tel, '$t_cancha' ,'$num_cach' ,'$horario' ,'$servicio' ,'$techo' ,$valor,'$destino','$destino1','$destino2')";
            $res = mysqli_query($bd,$sql);
            if ($res){
              
                echo "<div data-closable class='callout alert-callout-subtle primary large'>
                <strong>Yo!</strong> Registro guardado
                <button class='close-button'aria-label='Dismiss alert' type='button' data-close>
                  <span aria-hidden='true'>⊗</span>
                </button>
              </div>";
              header("location: registro_cancha.php");

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
