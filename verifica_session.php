<?php
    session_start();
    function verificar(){
        if (!isset($_SESSION["usuario"])){
            echo " '<div data-closable class='callout alert-callout-subtle primary large'>
            <strong>Yo!</strong> Error Inicie sesion 
            <button class='close-button'aria-label='Dismiss alert' type='button' data-close>
              <span aria-hidden='true'>⊗</span>
            </button>
          </div>'";
            return 0;
        }
        if ($_SESSION["usuario"]==""){
            echo "<h3>Sesion fue finalizada</h3>";
            return 0;
        }
        return 1;
    }

?>
