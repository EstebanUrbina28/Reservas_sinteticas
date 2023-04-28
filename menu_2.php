<?php
echo "
<link rel=stylesheethref=css/foundation.css>
<link rel='stylesheet' href='css/main.css'> <br> <br> <br> 

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
        <a href='#'>Gestionar Canchas</a>
        <ul class='menu vertical'>
          <li><a href='registro_cancha.php'>Registra tu cancha</a></li>
        </ul>
      </li>

      <li>
        <a href='#'>Agenda de reservas</a>
        <ul class='menu vertical'>
          <li><a href='agenda.php'>MI agenda </a></li>
          
        </ul>
      </li>
     
           
    
  </div>
  <div class='top-bar-right'>
    <ul class='menu'>
    
      <!--<li><input type='search' placeholder='Buscar persona' id='txtBuscar'></li>
      <li><button type='button' class='button' id='cmdBuscar'>Buscar</button></li>-->
      <li>
        <a href='cerrar.php'id=''>cerrar sesion</a>
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