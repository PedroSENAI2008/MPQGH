<?php

class Historia {

    public function Resposta1($resposta){

        if($resposta == "vc"){
        echo "Certa resposta";
        }else{
            echo "Resposta incorreta";
        }
    }
}
$geral = new Historia();

if($_SERVER['REQUEST_METHOD'] === "POST"){

$resposta1 = $_POST["q1"];

    $geral->Resposta1($resposta1);
}



?>