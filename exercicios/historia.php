<?php

class Historia {

    public function Resposta1($resposta){
        session_start();

        // Inicia pontuação e tentativas se ainda não existir
        if (!isset($_SESSION['pontos'])) {
            $_SESSION['pontos'] = 0;
        }

        if($resposta == "vc"){
             $_SESSION['pontos'] += 10;
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