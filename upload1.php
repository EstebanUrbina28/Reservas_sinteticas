<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h3>Adjuntar foto a persona</h3>
        <form action="upload2.php" method="POST" enctype="multipart/form-data">
          <label for="lstid">Seleccione la persona</label>
          <select name="lstid" id="lstid">
                <?php 
                    include("conexion.php");
                    $bd  = conectar();
                    if (!$bd) return;

                    $sql = "select ideper, nomper from personas order by nomper";
                    $res = mysqli_query($bd,$sql);
                    while ($arr = mysqli_fetch_array($res)){
                        echo "<option value='$arr[0]'>$arr[1]</option>";
                    }
                    mysqli_close($bd);
                ?>
          </select>
          <label for="txtarc">Seleccione la fotografia</label>
          <input type="file" name="txtarc" id="txtarc" accept=".jpg" required>
          <label for="txtdes">Descripcion Imagen</label>
          <input type="text" name="txtdes" id="txtdes">
          <hr>
          <input type="submit" value="Ingresar Datos" class="button primary">
        </form>


      </div>
      <div class="cell small-6">
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