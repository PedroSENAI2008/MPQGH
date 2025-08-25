<?php

class Quimica {

    public function Resposta5($resposta){

        session_start();

        // Inicia pontuação e tentativas se ainda não existir
        if (!isset($_SESSION['pontos'])) {
            $_SESSION['pontos'] = 0;
        }

        if($resposta == "h4"){
            $_SESSION['pontos'] += 10;
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