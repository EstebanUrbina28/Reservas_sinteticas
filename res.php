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
  <link rel="stylesheet" href="css/reserva.css">
  <link rel="stylesheet" href="css/main1.css">
  <link rel="stylesheet" href="css/main.css">
  

</head>
</head>
</head>

<body>
<div class="grid-container">
    <?php include('dibuja_menu.php'); ?>
</div>   
<div class="grid-x">
<div class="cell small"></div>
<!--  inicio -->
  
<div class="grid-container">
<div class="work-feature-block row">
  <div class="columns medium-7">
    <?php

      include("conexion.php");
      $bd  = conectar();
      if (!$bd) return;
      $sql = "select img,img1,img2 from canchas  where id_can= 63";
      $res = mysqli_query($bd,$sql);  
      while ($arr = mysqli_fetch_array($res)){
        echo '</div>
        <div class="columns medium-5">
        <div class="container">
        
        <ul class="slider">
          <li id="slide1">
            <img src="'.$arr[0].'"  width="100" height="100"/>
          </li>
          <li id="slide2">
            <img src="'.$arr[1].'"  width="100" height="100"/>
          </li>
          <li id="slide3">
            
            <a href="'.$arr[2].'"  width="100" height="100"></a>
          </li>
        </ul>        
        <ul class="foto">
          <li>
            <a href="#slide1" class="foto" >Foto 1</a>
          </li>
          <li>
            <a href="#slide2" class="foto">Foto 2</a>
          </li>
           <li>
            <a href="#slide3" class="foto">Foto 3</a>
          </li>
        </ul>        
      </div>
        ';
      }          

    ?>
    <br>
  
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
           
           $sql = "select nombre_cancha,horario_cancha,servicio,techo,precio from canchas  where id_can= 58";
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
           //cerrar conexion
          
        
       ?>
   </tbody>   
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
      $(document).ready(function(){
        $("#hide").click(function(){
          $("input").hide();
        });
        $("#show").click(function(){
          $("input").show();
        });
      });
      </script>
      <div id="div">
        <form action="reserva1.php" method="POST"  >
          <label for="name" class ="texto">Nombre Cliente</label>
             <input type="text" class ="radio" name="name" id="name" required placeholder="Nombre cancha">
             <label for="tel" class ="texto"> Telefono </label>
             <input type="number" name="tel" class ="radio" id="tel" required maxlength="50" placeholder="Telefono">
             <label for="fecha" class ="texto">Fecha Cita </label>
             <input type="date" name="fecha" id="fecha" class ="radio" required>
             <label for="hora" class ="texto">Hora </label>
             <input type="time" name="hora" id="hora" class ="radio" required>
             <input type="submit" value="Reservar ahora" class="button primary">
            
            </form>
    </div>
      <input type="submit"  id= "hide" value="hide" class="button primary">
      <input type="submit"  id= "show" value="show" class="button primary">



</div>
  </div>
  </div>  
      </div>
<!-- fin divicion -->

<div class="grid-x">
<div class="cell small"></div>
<!--  inicio -->
  
<div class="grid-container">
<div class="work-feature-block row">
  <div class="columns medium-7">
    <?php

      
      $sql = "select img,img1,img2 from canchas  where id_can= 64";
      $res = mysqli_query($bd,$sql);  
      while ($arr = mysqli_fetch_array($res)){
        echo '</div>
        <div class="columns medium-5">
        <div class="container">
        
        <ul class="slider">
          <li id="slide4">
            <img src="'.$arr[0].'"/>
          </li>
          <li id="slide5">
            <img src="'.$arr[1].'"/>
          </li>
          <li id="slide6">
            
            <a href="'.$arr[2].'"></a>
          </li>
        </ul>        
        <ul class="foto">
          <li>
            <a href="#slide4" class="foto">Foto 1</a>
          </li>
          <li>
            <a href="#slide5" class="foto">Foto 2</a>
          </li>
           <li>
            <a href="#slide6" class="foto">Foto 3</a>
          </li>
        </ul>        
      </div>
        ';
      }          

    ?>
    <br>
  
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
           //abrir conexión 
         

           //prepara y ejecuta consulta en BD 
           $sql = "select nombre_cancha,horario_cancha,servicio,techo,precio from canchas  where id_can= 58";
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
           //cerrar conexion
          
        
       ?>
   </tbody>   
</table>
<form action="reserva1.php" method="POST" >
<label for="name" class ="texto">Nombre Cliente</label>
   <input type="text" class ="radio" name="name" id="name" required placeholder="Nombre cancha">
   <label for="tel" class ="texto"> Telefono </label>
   <input type="number" name="tel" class ="radio" id="tel" required maxlength="50" placeholder="Telefono">
   <label for="fecha" class ="texto">Fecha Cita </label>
   <input type="date" name="fecha" id="fecha" class ="radio" required>
   <label for="hora" class ="texto">Hora </label>
   <input type="time" name="hora" id="hora" class ="radio" required>
   <input type="submit" value="Reservar ahora" class="button primary">
  
  </form>


</div>
  </div>
  </div>  
      </div>
<!-- fin divicion -->


<div class="grid-x">
<div class="cell small"></div>
<!--  inicio -->
  
<div class="grid-container">
<div class="work-feature-block row">
  <div class="columns medium-7">
    <?php

      
      $sql = "select img,img1,img2 from canchas  where id_can= 62";
      $res = mysqli_query($bd,$sql);  
      while ($arr = mysqli_fetch_array($res)){
        echo '</div>
        <div class="columns medium-5">
        <div class="container">
        
        <ul class="slider">
          <li id="slide7">
            <img src="'.$arr[0].'"/>
          </li>
          <li id="slide8">
            <img src="'.$arr[1].'"/>
          </li>
          <li id="slide9">
            
            <a href="'.$arr[2].'"></a>
          </li>
        </ul>        
        <ul class="foto">
          <li>
            <a href="#slide7" class="foto">Foto 1</a>
          </li>
          <li>
            <a href="#slide8" class="foto">Foto 2</a>
          </li>
           <li>
            <a href="#slide9" class="foto">Foto 3</a>
          </li>
        </ul>        
      </div>
        ';
      }          

    ?>
    <br>
  
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
           //abrir conexión 
         

           //prepara y ejecuta consulta en BD 
           $sql = "select nombre_cancha,horario_cancha,servicio,techo,precio from canchas  where id_can= 56";
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
           //cerrar conexion
          
        
       ?>
   </tbody>   
</table>
<form action="reserva1.php" method="POST" >
<label for="name" class ="texto">Nombre Cliente</label>
   <input type="text" class ="radio" name="name" id="name" required placeholder="Nombre cancha">
   <label for="tel" class ="texto"> Telefono </label>
   <input type="number" name="tel" class ="radio" id="tel" required maxlength="50" placeholder="Telefono">
   <label for="fecha" class ="texto">Fecha Cita </label>
   <input type="date" name="fecha" id="fecha" class ="radio" required>
   <label for="hora" class ="texto">Hora </label>
   <input type="time" name="hora" id="hora" class ="radio" required>
   <input type="submit" value="Reservar ahora" class="button primary">
  
  </form>


</div>
  </div>
  </div>  
      </div>
<!-- fin divicion -->

<div class="grid-x">
<div class="cell small"></div>
<!--  inicio -->
  
<div class="grid-container">
<div class="work-feature-block row">
  <div class="columns medium-7">
    <?php

      
      $sql = "select img,img1,img2 from canchas  where id_can= 62";
      $res = mysqli_query($bd,$sql);  
      while ($arr = mysqli_fetch_array($res)){
        echo '</div>
        <div class="columns medium-5">
        <div class="container">
        
        <ul class="slider">
          <li id="slide10">
            <img src="'.$arr[0].'"/>
          </li>
          <li id="slide11">
            <img src="'.$arr[1].'"/>
          </li>
          <li id="slide12">
            
            <a href="'.$arr[2].'"></a>
          </li>
        </ul>        
        <ul class="foto">
          <li>
            <a href="#slide10" class="foto">Foto 1</a>
          </li>
          <li>
            <a href="#slide11" class="foto">Foto 2</a>
          </li>
           <li>
            <a href="#slide12" class="foto">Foto 3</a>
          </li>
        </ul>        
      </div>
        ';
      }          

    ?>
    <br>
  
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
           //abrir conexión 
         

           //prepara y ejecuta consulta en BD 
           $sql = "select nombre_cancha,horario_cancha,servicio,techo,precio from canchas  where id_can= 56";
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
           //cerrar conexion
          
        
       ?>
   </tbody>   
</table>
<form action="reserva1.php" method="POST" >
<label for="name" class ="texto">Nombre Cliente</label>
   <input type="text" class ="radio" name="name" id="name" required placeholder="Nombre cancha">
   <label for="tel" class ="texto"> Telefono </label>
   <input type="number" name="tel" class ="radio" id="tel" required maxlength="50" placeholder="Telefono">
   <label for="fecha" class ="texto">Fecha Cita </label>
   <input type="date" name="fecha" id="fecha" class ="radio" required>
   <label for="hora" class ="texto">Hora </label>
   <input type="time" name="hora" id="hora" class ="radio" required>
   <input type="submit" value="Reservar ahora" class="button primary">
  
  </form>


</div>
  </div>
  </div>  
      </div>
<!-- fin divicion -->

<div class="grid-x">
<div class="cell small"></div>
<!--  inicio -->
  
<div class="grid-container">
<div class="work-feature-block row">
  <div class="columns medium-7">
    <?php

      
      $sql = "select img,img1,img2 from canchas  where id_can= 64";
      $res = mysqli_query($bd,$sql);  
      while ($arr = mysqli_fetch_array($res)){
        echo '</div>
        <div class="columns medium-5">
        <div class="container">
        
        <ul class="slider">
          <li id="slide13">
            <img src="'.$arr[0].'"/>
          </li>
          <li id="slide14">
            <img src="'.$arr[1].'"/>
          </li>
          <li id="slide15">
            
            <a href="'.$arr[2].'"></a>
          </li>
        </ul>        
        <ul class="foto">
          <li>
            <a href="#slide13" class="foto">Foto 1</a>
          </li>
          <li>
            <a href="#slide14" class="foto">Foto 2</a>
          </li>
           <li>
            <a href="#slide15" class="foto">Foto 3</a>
          </li>
        </ul>        
      </div>
        ';
      }          

    ?>
    <br>
  
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
           //abrir conexión 
         

           //prepara y ejecuta consulta en BD 
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
           //cerrar conexion
           
           mysqli_close($bd);
        
       ?>
   </tbody>   
</table>
<form action="reserva1.php" method="POST" >
<label for="name" class ="texto">Nombre Cliente</label>
   <input type="text" class ="radio" name="name" id="name" required placeholder="Nombre cancha">
   <label for="tel" class ="texto"> Telefono </label>
   <input type="number" name="tel" class ="radio" id="tel" required maxlength="50" placeholder="Telefono">
   <label for="fecha" class ="texto">Fecha Cita </label>
   <input type="date" name="fecha" id="fecha" class ="radio" required>
   <label for="hora" class ="texto">Hora </label>
   <input type="time" name="hora" id="hora" class ="radio" required>
   <input type="submit" value="Reservar ahora" class="button primary">
  
  </form>


</div>
  </div>
  </div>  
      </div>
<!-- fin divicion -->






  <div class="cell small-6">Otra selda</div>  

</div>

<!--  fin -->




 


 

  <!--Fin container-->
 <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/app.mapa.js"></script>

</body>

</html>