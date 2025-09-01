<?php
require_once 'error_handler.php';

class Quimica {

    public function Resposta5($resposta){

        session_start();

        // Inicia pontuação e tentativas se ainda não existir
        if (!isset($_SESSION['pontos'])) {
            $_SESSION['pontos'] = 0;
        }

        if($resposta == "h4"){
            $_SESSION['pontos'] += 10;
            ErrorHandler::redirectToNext("../trail4.html");
        }else{
            ErrorHandler::showError("Resposta incorreta! Revise a fórmula molecular da água.", "quimica.html", "Tentar novamente");
        }
    }
}
$geral = new Quimica();

if($_SERVER['REQUEST_METHOD'] === "POST"){

$resposta5 = $_POST["q5"];

    $geral->Resposta5($resposta5);
}



?>