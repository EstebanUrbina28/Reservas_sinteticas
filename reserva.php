<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> www.canchasinteticas.com - reservas</title>
  <meta name="description" content="Pagina de prueba">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/container.css">
</head>

<body>

<div class="grid-container"> 
    <?php include('dibuja_menu.php'); ?> 
    
    <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
      <?php
      include("conexion.php");
      $bd  = conectar();
      if (!$bd) return;
      $sql = "select img,img1,img2 from canchas  where id_can= 64";
      $res = mysqli_query($bd,$sql);  
      while ($arr = mysqli_fetch_array($res)){
        echo ' <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
        <div class="orbit-wrapper">
          <div class="orbit-controls">
         
          </div>
          <ul class="orbit-container">
            <li class="is-active orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[0].'" alt="Space">
                <figcaption class="orbit-caption">Comodida</figcaption>
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[1].'" alt="Space">
                <figcaption class="orbit-caption">Buenos precios</figcaption>
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[2].'" alt="Space">
                <figcaption class="orbit-caption">Grama nueva</figcaption>
              </figure>
            </li>
          </ul>
        </div>
        <nav class="orbit-bullets">
          <button class="is-active" data-slide="0">
            <span class="show-for-sr">First slide details.</span>
            <span class="show-for-sr" data-slide-active-label>Current Slide</span>
          </button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        </nav>
      </div>
      ';
      } 
      ?> 
      </div>
      <div class="medium-6 cell">

        <table>
   <thead>
       <th>Nombre cancha</th>
       <th>Horario</th>
       <th>Servicios</th>
       <th>Techo</th>
       <th>Valor</th> 
       
 
      </thead>
   <tbody>
       <?php 
           
           $sql = "select nombre_cancha,horario_cancha,servicio,techo,precio from canchas  where id_can= 64";
           $res = mysqli_query($bd,$sql);
           while ($arr = mysqli_fetch_array($res)){
             
               echo "<tr>";
               echo "<td>" . $arr[0] . "</td>";
               echo "<td>" . $arr[1] . "</td>"; 
               echo "<td>" . $arr[2] . "</td>";
               echo "<td>" . $arr[3] . "</td>"; 
               echo "<td>" . $arr[4] . "</td>"; 
                          
              echo "</tr>";
           }     
        
       ?>
   </tbody>   
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
      $(document).ready(function(){
        $("#hide").click(function(){
          $("form").hide();
        });
        $("#show").click(function(){
          $("form").show();
        });
      });
      </script>
       <div id="form">     
        <form action="reserva1.php" method="POST"  >
          <label for="name" class ="texto">Nombre Cliente</label>
             <input type="text" class ="radio" name="name" id="name" required placeholder="Nombre cancha">
             <label for="tel" class ="texto"> Telefono </label>
             <input type="number" name="tel" class ="radio" id="tel" required maxlength="50" placeholder="Telefono">
             <label for="fecha" class ="texto">Fecha Cita </label>
             <input type="date" name="fecha" id="fecha" class ="radio" required>
             <label for="hora" class ="texto">Hora </label>
             <input type="time" name="hora" id="hora" class ="radio" required>
             <input type="submit" value="Reservar ahora" class="button expanded">                        
             </form> 
             </div>
             <input type="submit" value="Ocultar " class="button primary"  id= "hide">    
             <input type="submit" value="Mostrar" class="button primary"  id= "show">         
        
      </div>
    </div>
  </div>
  <!--Fin de consulta-->
   <!-- incio de consulta-->

  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
      <?php
     
      $sql = "select img,img1,img2 from canchas  where id_can= 62";
      $res = mysqli_query($bd,$sql);  
      while ($arr = mysqli_fetch_array($res)){
        echo ' <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
        <div class="orbit-wrapper">
          <div class="orbit-controls">
         
          </div>
          <ul class="orbit-container">
            <li class="is-active orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[0].'" alt="Space">
                <figcaption class="orbit-caption">Comodida</figcaption>
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[1].'" alt="Space">
                <figcaption class="orbit-caption">Buenos precios</figcaption>
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[2].'" alt="Space">
                <figcaption class="orbit-caption">Grama nueva</figcaption>
              </figure>
            </li>
          </ul>
        </div>
        <nav class="orbit-bullets">
          <button class="is-active" data-slide="0">
            <span class="show-for-sr">First slide details.</span>
            <span class="show-for-sr" data-slide-active-label>Current Slide</span>
          </button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        </nav>
      </div>
      ';
      } 
      ?> 
      </div>
      <div class="medium-6 cell">
       <!-- <label>Input Label </label> -->
        <table>
   <thead>
       <th>Nombre cancha</th>
       <th>Horario</th>
       <th>Servicios</th>
       <th>Techo</th>
       <th>Valor</th> 
       
 
      </thead>
   <tbody>
       <?php 
           
           $sql = "select nombre_cancha,horario_cancha,servicio,techo,precio from canchas  where id_can= 62";
           $res = mysqli_query($bd,$sql);
           while ($arr = mysqli_fetch_array($res)){
             
               echo "<tr>";
               echo "<td>" . $arr[0] . "</td>";
               echo "<td>" . $arr[1] . "</td>"; 
               echo "<td>" . $arr[2] . "</td>";
               echo "<td>" . $arr[3] . "</td>"; 
               echo "<td>" . $arr[4] . "</td>"; 
                          
              echo "</tr>";
           }     
        
       ?>
   </tbody>   
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
      $(document).ready(function(){
        $("#hide").click(function(){
          $("form").hide();
        });
        $("#show").click(function(){
          $("form").show();
        });
      });
      </script>
       <div id="form">    
        <form action="reserva1.php" method="POST"  >
          <label for="name" class ="texto">Nombre Cliente</label>
             <input type="text" class ="radio" name="name" id="name" required placeholder="Nombre cancha">
             <label for="tel" class ="texto"> Telefono </label>
             <input type="number" name="tel" class ="radio" id="tel" required maxlength="50" placeholder="Telefono">
             <label for="fecha" class ="texto">Fecha Cita </label>
             <input type="date" name="fecha" id="fecha" class ="radio" required>
             <label for="hora" class ="texto">Hora </label>
             <input type="time" name="hora" id="hora" class ="radio" required>
             <input type="submit" value="Reservar ahora" class="button expanded">            
            </form>
            </div>
           
      </div>
    </div>
  </div>
  <!--Fin de consulta-->
    
 <!-- incio de consulta-->

 <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
      <?php
     
      $sql = "select img,img1,img2 from canchas  where id_can= 65";
      $res = mysqli_query($bd,$sql);  
      while ($arr = mysqli_fetch_array($res)){
        echo ' <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
        <div class="orbit-wrapper">
          <div class="orbit-controls">
         
          </div>
          <ul class="orbit-container">
            <li class="is-active orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[0].'" alt="Space">
                <figcaption class="orbit-caption">Comodida</figcaption>
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[1].'" alt="Space">
                <figcaption class="orbit-caption">Buenos precios</figcaption>
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[2].'" alt="Space">
                <figcaption class="orbit-caption">Grama nueva</figcaption>
              </figure>
            </li>
          </ul>
        </div>
        <nav class="orbit-bullets">
          <button class="is-active" data-slide="0">
            <span class="show-for-sr">First slide details.</span>
            <span class="show-for-sr" data-slide-active-label>Current Slide</span>
          </button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        </nav>
      </div>
      ';
      } 
      ?> 
      </div>
      <div class="medium-6 cell">
       <!-- <label>Input Label </label> -->
        <table>
   <thead>
       <th>Nombre cancha</th>
       <th>Horario</th>
       <th>Servicios</th>
       <th>Techo</th>
       <th>Valor</th> 
       
 
      </thead>
   <tbody>
       <?php 
           
           $sql = "select nombre_cancha,horario_cancha,servicio,techo,precio from canchas  where id_can= 65";
           $res = mysqli_query($bd,$sql);
           while ($arr = mysqli_fetch_array($res)){
             
               echo "<tr>";
               echo "<td>" . $arr[0] . "</td>";
               echo "<td>" . $arr[1] . "</td>"; 
               echo "<td>" . $arr[2] . "</td>";
               echo "<td>" . $arr[3] . "</td>"; 
               echo "<td>" . $arr[4] . "</td>"; 
                          
              echo "</tr>";
           }     
        
       ?>
   </tbody>   
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
      $(document).ready(function(){
        $("#hide").click(function(){
          $("form").hide();
        });
        $("#show").click(function(){
          $("form").show();
        });
      });
      </script>
       <div id="form">    
        <form action="reserva1.php" method="POST"  >
          <label for="name" class ="texto">Nombre Cliente</label>
             <input type="text" class ="radio" name="name" id="name" required placeholder="Nombre cancha">
             <label for="tel" class ="texto"> Telefono </label>
             <input type="number" name="tel" class ="radio" id="tel" required maxlength="50" placeholder="Telefono">
             <label for="fecha" class ="texto">Fecha Cita </label>
             <input type="date" name="fecha" id="fecha" class ="radio" required>
             <label for="hora" class ="texto">Hora </label>
             <input type="time" name="hora" id="hora" class ="radio" required>
             <input type="submit" value="Reservar ahora" class="button expanded">            
            </form>
            </div>
           
      </div>
    </div>
  </div>
  <!--Fin de consulta-->
  
 <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
      <?php
     
      $sql = "select img,img1,img2 from canchas  where id_can= 68";
      $res = mysqli_query($bd,$sql);  
      while ($arr = mysqli_fetch_array($res)){
        echo ' <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
        <div class="orbit-wrapper">
          <div class="orbit-controls">
         
          </div>
          <ul class="orbit-container">
            <li class="is-active orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[0].'" alt="Space">
                <figcaption class="orbit-caption">Comodida</figcaption>
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[1].'" alt="Space">
                <figcaption class="orbit-caption">Buenos precios</figcaption>
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="'.$arr[2].'" alt="Space">
                <figcaption class="orbit-caption">Grama nueva</figcaption>
              </figure>
            </li>
          </ul>
        </div>
        <nav class="orbit-bullets">
          <button class="is-active" data-slide="0">
            <span class="show-for-sr">First slide details.</span>
            <span class="show-for-sr" data-slide-active-label>Current Slide</span>
          </button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        </nav>
      </div>
      ';
      } 
      ?> 
      </div>
      <div class="medium-6 cell">
       <!-- <label>Input Label </label> -->
        <table>
   <thead>
       <th>Nombre cancha</th>
       <th>Horario</th>
       <th>Servicios</th>
       <th>Techo</th>
       <th>Valor</th> 
       
 
      </thead>
   <tbody>
       <?php 
           
           $sql = "select nombre_cancha,horario_cancha,servicio,techo,precio from canchas  where id_can= 68";
           $res = mysqli_query($bd,$sql);
           while ($arr = mysqli_fetch_array($res)){
             
               echo "<tr>";
               echo "<td>" . $arr[0] . "</td>";
               echo "<td>" . $arr[1] . "</td>"; 
               echo "<td>" . $arr[2] . "</td>";
               echo "<td>" . $arr[3] . "</td>"; 
               echo "<td>" . $arr[4] . "</td>"; 
                          
              echo "</tr>";
           }     
        
       ?>
   </tbody>   
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
      $(document).ready(function(){
        $("#hide").click(function(){
          $("form").hide();
        });
        $("#show").click(function(){
          $("form").show();
        });
      });
      </script>
       <div id="form">    
        <form action="reserva1.php" method="POST"  >
          <label for="name" class ="texto">Nombre Cliente</label>
             <input type="text" class ="radio" name="name" id="name" required placeholder="Nombre cancha">
             <label for="tel" class ="texto"> Telefono </label>
             <input type="number" name="tel" class ="radio" id="tel" required maxlength="50" placeholder="Telefono">
             <label for="fecha" class ="texto">Fecha Cita </label>
             <input type="date" name="fecha" id="fecha" class ="radio" required>
             <label for="hora" class ="texto">Hora </label>
             <input type="time" name="hora" id="hora" class ="radio" required>
             <input type="submit" value="Reservar ahora" class="button expanded">            
            </form>
            </div>
           
      </div>
    </div>
  </div>
  
  <!--Fin de consulta-->
  
  
  
  
<!-- div es del menu no tocar-->
</div>
  <!--Fin container-->
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/app.mapa.js"></script>
  

</body>

</html>


      