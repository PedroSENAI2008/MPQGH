<?php

class Geo {

    public function Resposta3($resposta){
        session_start();

        // Inicia pontuação e tentativas se ainda não existir
        if (!isset($_SESSION['pontos'])) {
            $_SESSION['pontos'] = 0;
        }

        if($resposta == "km3"){
             $_SESSION['pontos'] += 10;
            header("Location:historia.html");
            exit; 
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