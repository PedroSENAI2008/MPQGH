<?php
require_once 'error_handler.php';

class Historia {

    public function Resposta1($resposta){
        session_start();

        // Inicia pontuação e tentativas se ainda não existir
        if (!isset($_SESSION['pontos'])) {
            $_SESSION['pontos'] = 0;
        }

        if($resposta == "vc"){
             $_SESSION['pontos'] += 10;
             ErrorHandler::redirectToNext("fim.php");
        }else{
            ErrorHandler::showError("Resposta incorreta! Revise os fatos históricos sobre a chegada de Pedro Álvares Cabral.", "historia.html", "Tentar novamente");
        }
    }
}
$geral = new Historia();

if($_SERVER['REQUEST_METHOD'] === "POST"){

$resposta1 = $_POST["q1"];

    $geral->Resposta1($resposta1);
}



?>