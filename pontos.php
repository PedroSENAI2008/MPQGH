<?php
Public class pontos{
    $pontos =0
   if (isset($_SESSION['pontos'])) {
            $this->pontos = $_SESSION['pontos'];
        }
    }

    public function somarPontos($valor = 100) {
        $this->pontos += $valor;
        $_SESSION['pontos'] = $this->pontos; // salva na sessão
    }








?>