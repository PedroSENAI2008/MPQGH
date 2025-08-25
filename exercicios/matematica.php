<?php

class Matematica
{



    public function Resposta2($resposta)
    {
        session_start();

        // Inicia pontuação e tentativas se ainda não existir
        if (!isset($_SESSION['pontos'])) {
            $_SESSION['pontos'] = 0;
        }

        if ($resposta == 48) {
            $_SESSION['pontos'] += 10;
            echo "Certa resposta";
        } else {
            echo "Resposta incorreta";
        }
    }
}
$geral = new Matematica();

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $resposta2 = $_POST["q2"];

    $geral->Resposta2($resposta2);
}



?>