<?php

class Portugues {

    public function Resposta4($resposta){

        if($resposta == "c"){
        header("Location:quimica.html");
            exit; 
        }else{
            echo "Resposta incorreta";
        }
    }
}
$geral = new Portugues();

if($_SERVER['REQUEST_METHOD'] === "POST"){

$resposta4 = $_POST["q4"];

    $geral->Resposta4($resposta4);
}



?>