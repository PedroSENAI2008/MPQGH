<?php

class Quimica {

    public function Resposta5($resposta){

        if($resposta == "h4"){
       header("Location:geo.html");
            exit; 
        }else{
            echo "Resposta incorreta";
        }
    }
}
$geral = new Quimica();

if($_SERVER['REQUEST_METHOD'] === "POST"){

$resposta5 = $_POST["q5"];

    $geral->Resposta5($resposta5);
}



?>