<?php

class Matematica {

    public function Resposta2($resposta){

        if($resposta == 48){
        echo "Certa resposta";
        }else{
            echo "Resposta incorreta";
        }
    }
}
$geral = new Matematica();

if($_SERVER['REQUEST_METHOD'] === "POST"){

$resposta2 = $_POST["q2"];

    $geral->Resposta2($resposta2);
}



?>