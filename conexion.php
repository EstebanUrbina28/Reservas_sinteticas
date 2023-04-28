<?php
function conectar (){
    $bd= mysqli_connect("localhost", "root", "", "sintetica");
    //conectar           servidor    usuario  clave   base de datos      
    if (!$bd){
        echo "<h3>Conexión fallida</h3>";
        echo mysqli_error($bd);
        return NULL;
    }
    return $bd;
}
?>