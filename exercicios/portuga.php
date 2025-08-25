<?php

class Portugues {

    public function Resposta4($resposta){

        session_start();

        // Inicia pontuação e tentativas se ainda não existir
        if (!isset($_SESSION['pontos'])) {
            $_SESSION['pontos'] = 0;
        }

        if($resposta == "c"){
            $_SESSION['pontos'] += 10;
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