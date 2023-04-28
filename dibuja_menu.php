<?php
echo "
<link rel='stylesheet' href='css/main.css'>

<center> <img src='' alt='' width='' height=''> </center> <br> <br>

<div class='title-bar' data-responsive-toggle='responsive-menu'data-hide-for='medium'>
  <button class='menu-icon' type='button' data-toggle='responsive-menu'></button>
  <div class='title-bar-title'>Menu</div>
</div>

<div class='top-bar' id='responsive-menu'>
  <div class='top-bar-left'>
    <ul class='dropdown menu' data-dropdown-menu>
      <li class='menu-text'>Menu Principal</li>
      <li>
        <a href='index.php'>inicio</a>
       
      </li>
      <li>
        <a href='#'>Canchas</a>
        <ul class='menu vertical'>
          <li><a href='reserva.php'>Reserva tu cancha</a></li>
          
          <a href=''id='mapa'>Ubicaciones canchas</a>   
          
        
        </ul>
      </li>
      <li>
        <a href='#'>Asóciate</a>
        <ul class='menu vertical'>
          <li><a href='#' id='op_concepto'>Beneficios de ser socio</a></li>
          <a href=''id='op_registro'>Registro</a>       
         
        </ul>
      </li>
      
      <li>
        <a href='#'>Contactanos</a>
        <ul class='menu vertical'>
        <li><a href='#' id='op_if'>Informacion</a></li>
        </ul>
      </li>
      <li>
      
    
  </div>
  <div class='top-bar-right'>
    <ul class='menu'>
    
      <!--<li><input type='search' placeholder='Buscar persona' id='txtBuscar'></li>
      <li><button type='button' class='button' id='cmdBuscar'>Buscar</button></li>-->
      <li>
        <a href=''id='op_iniciar'>iniciar sesión</a>
      </li>
      <li>
        <a href=''id='op_registro1'>Registro</a>
      </li>
      <li>
      
        <li><a href='administracion.php'>Administrar canchas </a></li>
        </ul>
      </li>
      
      
    </ul>
  </div>
</div>
<hr>
<div class='reveal' id='Modal1' data-reveal>
  <div id='divres'></div>
  <button class='close-button' data-close aria-label='Close modal' type='button'>
    <span aria-hidden='true'>&times;</span>
  </button>
    
</div>

";



?>