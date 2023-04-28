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
  <link rel="stylesheet" href="css/c1.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/inicio.css">
  <link rel="stylesheet" href="css/redes.css">
  <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="css/c2.css">
  <link rel="stylesheet" href="css/agenda.css">
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
<div class="cell small">

<div class="people-you-might-know">
  
  
  <div class="add-people-header">
    <h6 class="header-title">
     Agenda de reservas
    </h6>
  </div>
  <div class="row add-people-section">
    <div class="small-12 medium-6 columns about-people">
      <div class="about-people-avatar">
        
        <img class="avatar-image" src="https://i.ibb.co/gy1Dc3w/balon.jpg" alt="Kishore Kumar">
      </div>
      <div class="about-people-author">
      <table>
   <thead>
       <th>Hora se reserva</th>
       <th>Nombre Cliente</th>
       <th>Telefono</th>
       <th>Fecha</th>
     
       
       
 
      </thead>
   <tbody>
       <?php 
            include("conexion.php");
            $bd  = conectar();
            if (!$bd) return; 

            //abrir conexión   
            //prepara y ejecuta consulta en BD 
            $sql2 = "select hora,nombre,telefono,fecha from clientes  where id_cli= 10";
            //$sql2= "SELECT hora,nombre,telefono,fecha,precio FROM clientes 
            //JOIN factura ON clientes.id_cli=factura.id_cli
            //JOIN canchas USING (id_can) WHERE id_adm= 10
            //";
            $res2 = mysqli_query($bd,$sql2);
            //print_r($bd);

            while ($arr = mysqli_fetch_array($res2)){
              
                echo "<tr>";
                echo "<td>" . $arr['hora'] . "</td>";
                echo "<td>" . $arr['nombre'] . "</td>"; 
                echo "<td>" . $arr['telefono'] . "</td>";
                echo "<td>" . $arr['fecha'] . "</td>"; 
                          
                                   
                echo "</tr>";
            }
            //cerrar conexion
           
         
        ?>       
      
      
   </tbody>   
</table>          
      </div>    
    </div>
    <div class="ecommerce-loading-button text-center">
      <div class="loading-button">
      <button type="button" class="primary button" data-loading-start>
      Confirmar Reserva
      </button>
      <button type="button" class="primary button hide" data-loading-end> 
      <i class='fa fa-refresh fa-spin'></i> Procesando reserva
      </button>
      </div> <!-- refresh -->
      <div data-success-message class="callout success hide">
    Gracias, Tu Reserva fue procesada!
    </div>
  </div>
  
  <div class="row add-people-section">
    <div class="small-12 medium-6 columns about-people">
      <div class="about-people-avatar">
      <img class="avatar-image" src="https://i.ibb.co/gy1Dc3w/balon.jpg" alt="Kishore Kumar">
      </div>
      <div class="about-people-author">
      <table>
   <thead>
       <th>Hora se reserva</th>
       <th>Nombre Cliente</th>
       <th>Telefono</th>
       <th>Fecha</th>
       
       
       
 
      </thead>
   <tbody>
       <?php 
      if (!$bd) return;                  
      //abrir conexión   
      //prepara y ejecuta consulta en BD 
      $sql = "select hora,nombre,telefono,fecha from clientes  where id_cli= 11";
      //$sql2= "SELECT hora,nombre,telefono,fecha,precio FROM clientes 
        //    JOIN factura ON clientes.id_cli=factura.id_cli
          //  JOIN canchas USING (id_can) WHERE id_adm= 13
        //    ";
      $res2 = mysqli_query($bd,$sql);

      while ($arr = mysqli_fetch_array($res2)){
        
          echo "<tr>";
          echo "<td>" . $arr['hora'] . "</td>";
          echo "<td>" . $arr['nombre'] . "</td>"; 
          echo "<td>" . $arr['telefono'] . "</td>";
          echo "<td>" . $arr['fecha'] . "</td>"; 
                      
                             
          echo "</tr>";                     
           
            }
            //cerrar conexion
           
         
        ?>       
      
      
   </tbody>   
</table>          
      </div>    
    </div>
    <div class="small-12 medium-6 columns add-friend">
      <div class="add-friend-action">
        <button class="button primary small" type="submit">
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          Confirmar Reserva
        </button>
        <button class="button secondary small" type="submit">
          <a href='index.php' class="fa fa-user-times"  ></a>
          Cancelar
        </button>
      </div>
    </div>
  </div>

  <div class="row add-people-section">
    <div class="small-12 medium-6 columns about-people">
      <div class="about-people-avatar">
      <img class="avatar-image" src="https://i.ibb.co/gy1Dc3w/balon.jpg" alt="Kishore Kumar">
      </div>
      <div class="about-people-author">
      <table>
   <thead>
       <th>Hora se reserva</th>
       <th>Nombre Cliente</th>
       <th>Telefono</th>
       <th>Fecha</th>
       
       
       
 
      </thead>
   <tbody>
       <?php 
                             
            //abrir conexión   
            //prepara y ejecuta consulta en BD 
            $sql = "select hora,nombre,telefono,fecha from clientes  where id_cli= 12";
            
            $res = mysqli_query($bd,$sql);

            while ($arr = mysqli_fetch_array($res)){
              
                echo "<tr>";
                echo "<td>" . $arr[0] . "</td>";
                echo "<td>" . $arr[1] . "</td>"; 
                echo "<td>" . $arr[2] . "</td>";
                echo "<td>" . $arr[3] . "</td>"; 
               
               
                                   
                echo "</tr>";
            }
            //cerrar conexion
           
         
        ?>       
      
      
   </tbody>   
</table>          
      </div>    
    </div>
    <div class="small-12 medium-6 columns add-friend">
      <div class="add-friend-action">
        <button class="button primary small" type="submit">
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          Confirmar Reserva
        </button>
        <button class="button secondary small" type="submit">
          <a href='index.php' class="fa fa-user-times"  ></a>
          Cancelar
        </button>
      </div>
    </div>
  </div>

  <div class="row add-people-section">
    <div class="small-12 medium-6 columns about-people">
      <div class="about-people-avatar">
      <img class="avatar-image" src="https://i.ibb.co/gy1Dc3w/balon.jpg" alt="Kishore Kumar">
      </div>
      <div class="about-people-author">
      <table>
   <thead>
       <th>Hora se reserva</th>
       <th>Nombre Cliente</th>
       <th>Telefono</th>
       <th>Fecha</th>
       
       
 
      </thead>
   <tbody>
       <?php 
                             
            //abrir conexión   
            //prepara y ejecuta consulta en BD 
            $sql = "select hora,nombre,telefono,fecha from clientes  where id_cli= 13";
            
            $res = mysqli_query($bd,$sql);

            while ($arr = mysqli_fetch_array($res)){
              
                echo "<tr>";
                echo "<td>" . $arr[0] . "</td>";
                echo "<td>" . $arr[1] . "</td>"; 
                echo "<td>" . $arr[2] . "</td>";
                echo "<td>" . $arr[3] . "</td>"; 
               
                                   
                echo "</tr>";
            }
            //cerrar conexion
           
         
        ?>       
      
      
   </tbody>   
</table>          
      </div>    
    </div>
    <div class="small-12 medium-6 columns add-friend">
      <div class="add-friend-action">
        <button class="button primary small" type="submit">
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          Confirmar Reserva
        </button>
        <button class="button secondary small" type="submit">
          <a href='index.php' class="fa fa-user-times"  ></a>
          Cancelar
        </button>
      </div>
    </div>
  </div>

  <!-- inicio de una agenda-->

  <div class="row add-people-section">
    <div class="small-12 medium-6 columns about-people">
      <div class="about-people-avatar">
      <img class="avatar-image" src="https://i.ibb.co/gy1Dc3w/balon.jpg" alt="Kishore Kumar">
      </div>
      <div class="about-people-author">
      <table>
   <thead>
       <th>Hora se reserva</th>
       <th>Nombre Cliente</th>
       <th>Telefono</th>
       <th>Fecha</th>
       
       
 
      </thead>
   <tbody>
       <?php 
                             
            //abrir conexión   
            //prepara y ejecuta consulta en BD 
            $sql = "select hora,nombre,telefono,fecha from clientes  where id_cli= 14";
            
            $res = mysqli_query($bd,$sql);

            while ($arr = mysqli_fetch_array($res)){
              
                echo "<tr>";
                echo "<td>" . $arr[0] . "</td>";
                echo "<td>" . $arr[1] . "</td>"; 
                echo "<td>" . $arr[2] . "</td>";
                echo "<td>" . $arr[3] . "</td>"; 
               
                                   
                echo "</tr>";
            }
            //cerrar conexion
           
         
        ?>       
      
      
   </tbody>   
</table>          
      </div>    
    </div>
    <div class="small-12 medium-6 columns add-friend">
      <div class="add-friend-action">
        <button class="button primary small" type="submit">
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          Confirmar Reserva
        </button>
        <button class="button secondary small" type="submit">
          <a href='index.php' class="fa fa-user-times"  ></a>
          Cancelar
        </button>
      </div>
    </div>
  </div>
  <!-- fin de la agenda-->
  
  <div class="view-more-people">
    <p class="view-more-text">
      <a href="agenda2.php" class="view-more-link">View More..</a>
    </p>
  </div>
</div>


  
        

</div>
</div>
</div>

  <!--Fin container-->


  <!--inicio container-->
<div class="grid-container">
<div class="grid-x">
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