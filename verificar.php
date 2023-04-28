<?php
    
    include("conexion.php");
    $bd  = conectar();  

    $email = $_POST["correo"];
    $clave = $_POST["clave"];
    //var_dump($_POST);
    
    $sql2 = "select * from administradores where email='$email'  and   pass='$clave'";
    //print_r($sql2);exit;
    $res2 = mysqli_query($bd,$sql2);//almacena conexion y la busqueda  
    //print_r($sql2);exit; //Prueba variable  
    $arr = mysqli_fetch_array($res2); 
    //print_r($arr[0]);exit;

    $num_col=mysqli_num_rows($res2);
    print_r($num_col);

        if($num_col>0){
            header("Location: administracion.php"); 
            session_start();
            $_SESSION["usuario"] = $arr[0];   

        }else{
            echo " '<div data-closable class='callout alert-callout-subtle primary large'>
            <strong>Yo!</strong> Error en sus credenciales por favor vuelve a intentarlo
            <button class='close-button'aria-label='Dismiss alert' type='button' data-close>
              <span aria-hidden='true'>⊗</span>
            </button>
          </div>'";
            //header("Location: index.php");
    
        }  

    /*if ($res2){     
        
        header("Location: administracion.php"); 
        $_SESSION["usuario"] = $arr[0];   
        
         
    }
    else{
        header("Location: index.php");
        echo "error";
    }*/
    mysqli_close($bd);
    




    

?>