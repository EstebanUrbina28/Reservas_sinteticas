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
  <link rel="stylesheet" href="css/alert.css"> 
  <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="css/c2.css">
  <link rel="stylesheet" href="css/main.css">
</head>
</head>
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

<div class="cell small-6"><br> <br> <br>
        <h3 class ="h3" >Gestion de datos  - Canchas Sintetica</h3> 
        <form action="reg_cancha2.php" method="POST" enctype="multipart/form-data">
          <label for="name" class ="texto">Nombre de cancha </label>
          <input type="text" class ="radio" name="name" id="name" required placeholder="Nombre cancha">
          <label for="dir" class ="texto">Direccion  </label>
          <input type="text" name="dir" class ="radio" id="dir" required maxlength="50" placeholder="Direccion">
          <label for="tel" class ="texto">telefono  </label>
          <input type="number" name="tel"  class ="radio" id="tel" required maxlength="50"placeholder="telefono">
          <label class ="texto" class ="radio" >Tipo de cancha</label>
          <select name ="lstesp" id="lstesp" class ="radio">
             <option value="Futbol 5">Futbol 5 </option>
             <option value="Futbol 8">Futbol 8 </option>
             <option value="Futbol 11">Futbol 11 </option>            
          </select><br>
          <label class ="texto" class ="radio">Numero de cancha</label>
          <select name ="lscancha" id="lstcancha" class ="radio">
             <option value="Cancha 1">Cancha 1</option>
             <option value="Cancha 2">Cancha 2</option>
             <option value="Cancha 3">Cancha 3</option>
             <option value="Cancha 4">Cancha 4</option>
             <option value="Cancha 5">Cancha 5</option>
             <option value="Cancha 6">Cancha 6</option>
             <option value="Cancha 7">Cancha 7</option>                
          </select><br>
          <label class ="texto" class ="radio">Horario de atencion</label>
          <select name ="lsthorario" id="lsthorario" class ="radio">
             <option value="1:00 pm a 10:00 pm"> 1:00 pm a 10:00 pm </option>
             <option value="2:00 pm a 7:00 pm"> 2:00 pm a 7:00 pm</option>
             <option value="10:00 pm a 12:00 pm"> 10:00 pm a 12:00 pm </option>
             <option value="5:00 pm a 7:00 pm"> 5:00 pm a 7:00 pm </option>
             <option value="6:00 am a 1:00 pm"> 6:00 am a 1:00 pm </option>
             <option value="6:00 am a 11:00 pm "> 6:00 am a 11:00 pm </option>
                            
          </select><br>
          <label class ="texto">Servicio Especiales </label>
          <select name ="lstservicios" id="lstservicios" class ="radio">
             <option value="Servico de Cafeteria, Bar y Parqueadero"> Servico de Cafeteria, Bar y Parqueadero </option>
             <option value="Servicio de Cafeteria, Duchas y parqueadero"> Servicio de Cafeteria, Duchas y parqueadero </option>
             <option value="Servicio de Cafeteria y parqueadero"> Servicio de Cafeteria y parqueadero </option>
             <option value="Servicio de Parqueadero"> Servicio de Parqueadero  </option>                            
          </select><br>
          <label for="techo" class ="texto">Cancha con Techado</label>
           Si <input type="radio" name="techo" value="SI" class ="radio">
           No <input type="radio" name="techo" value="NO" class ="radio"><br>
          <label for="precio" class ="texto" >Valor</label>
          <input type="number" name="precio" id="precio" class ="radio" required placeholder="$" ><br>
          <input type="file" name="foto" id="foto" accept=".jpg" class ="texto" required >
          <input type="file" name="foto1" id="foto1" accept=".jpg" class ="texto" required >
          <input type="file" name="foto2" id="foto2" accept=".jpg" class ="texto" required >
          <br>    
          
          <input type="submit" value="Registrar Cancha" class="button primary">
        </form>

      </div>
      <div class="cell small-6"><br> <br> <br>
       <center> <h3 class ="h3">Fotos - Cargadas</h3> </center>
       
       <?php
       //abrimos la conexion
       include("conexion.php");
       $bd  = conectar();
       if (!$bd) return;

       $sql = "SELECT * FROM imagen ORDER by fotos";
       $res = mysqli_query($bd,$sql);
       while ($arr= mysqli_fetch_array($res)){
        echo '<br>';
        echo '<img src="'.$arr['fotos'].'" alt="" width="400" height="400" type="reset" value="Limpiar imagen" ><br>';
        
       }
       //cerrar conexion
       mysqli_close($bd);
                    
       ?>

      </div>
 



  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>
  

</body>

</html>