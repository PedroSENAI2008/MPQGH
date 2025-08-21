<?php

class Geo {

    public function Resposta3($resposta){

        if($resposta == "km3"){
        echo "Certa resposta";
        }else{
            echo "Resposta incorreta";
        }
    }
}
$geral = new Geo();

if($_SERVER['REQUEST_METHOD'] === "POST"){

$resposta3 = $_POST["q3"];

    $geral->Resposta3($resposta3);
}



?>