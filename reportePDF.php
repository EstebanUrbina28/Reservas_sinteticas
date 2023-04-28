<?php
    include "fpdf/fpdf.php";
    
    class PDF extends FPDF{

        function Header(){
            $this->SetTextColor(0,64,128);//parametros son RGB
            $this->SetFont("Arial","B",15);//fuente, estilo (B negrita o I cursiva o vacio normal) y tamaño 
            $this->Cell(0,10,utf8_decode("INGENIERÍA DE SISTEMAS"),0,0,"C");//si el ancho es cero-> toda la pagina, el ultimo parametro centrado
            $this->Ln(10); //salto de linea en ejm 10 lines
            $this->SetTextColor(128,128,128);//parametros son RGB
            $this->SetFont("Arial","I",12);
            $this->Cell(0,10,"Reporte de personas",0,0,"C");
            $this->Ln(10);
            $this->Image("images/logo.png",10,8,18); //parametros: archivo, pos x, pos y y ancho 
        }

        function Footer(){
            $this->SetY(-15); //posicionamiento manual  
            $this->SetFont("Arial","I",9);
            $this->Cell(0,10,utf8_decode("Página ") . $this->PageNo() . " de {nb}" ,0,0,"C");
                                         //numero pagina                     Total paginas 
        }
    }

    $doc =  new PDF();
    $doc->AliasNbPages();//Cantidad de páginas
    $doc->AddPage();
    $doc->SetFont("Arial");

    //conexion
    include "conexion.php";
    $bd = conectar();
    if (!$bd){
        $doc->cell(0,10,"ERROR: Base de datos no encontrada ... ");
    }
    else{

        $sql = "select ideper, nomper, edaper from personas order by nomper";
        $res = mysqli_query($bd,$sql);
        $doc->SetFont("Arial","B",9);
        $doc->Cell(50,10,"IDENTIFICACION",1,0);
        $doc->Cell(70,10,"NOMBRES",1,0);
        $doc->Cell(50,10,"EDAD",1,1);
        $doc->SetFont("Arial");
        $doc->SetFontSize(9);
        while ($arr = mysqli_fetch_array($res)){
            $doc->Cell(50,9,$arr[0],1,0);
            $doc->Cell(70,9,utf8_decode($arr[1]),1,0);
            $doc->Cell(50,9,$arr[2],1,1);
        }
        //cerrar conexion
        mysqli_close($bd);
    }

    $doc->Output();


?>