<?php
require_once 'error_handler.php';

class Geo {

    public function Resposta3($resposta){
        session_start();

        // Inicia pontuação e tentativas se ainda não existir
        if (!isset($_SESSION['pontos'])) {
            $_SESSION['pontos'] = 0;
        }

        if($resposta == "km3"){
             $_SESSION['pontos'] += 10;
             ErrorHandler::redirectToNext("../trail5.html");
        }else{
            ErrorHandler::showError("Resposta incorreta! Lembre-se da escala do mapa.", "geo.html", "Tentar novamente");
        }
    }
}
$geral = new Geo();

if($_SERVER['REQUEST_METHOD'] === "POST"){

$resposta3 = $_POST["q3"];

    $geral->Resposta3($resposta3);
}



?>