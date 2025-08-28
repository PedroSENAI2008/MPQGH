<?php
<?php
class Pontos {
    private $pontos = 0;

    public function __construct() {
        if (isset($_SESSION['pontos'])) {
            $this->pontos = $_SESSION['pontos'];
        }
    }

    public function somarPontos($valor = 100) {
        $this->pontos += $valor;
        $_SESSION['pontos'] = $this->pontos; // salva na sessão
    }
}
?>