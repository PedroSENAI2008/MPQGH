<?php
/**
 * Arquivo para lidar com mensagens de erro de forma padronizada
 */

class ErrorHandler {
    /**
     * Exibe uma mensagem de erro estilizada
     * 
     * @param string $message Mensagem de erro a ser exibida
     * @param string $backUrl URL para voltar (opcional)
     * @param string $backText Texto do botão de voltar (opcional)
     */
    public static function showError($message, $backUrl = null, $backText = 'Voltar') {
        // Inicia o buffer de saída para garantir que nada seja enviado antes
        ob_start();
        
        // Inclui o CSS de erro
        echo '<link rel="stylesheet" href="../assets/css/error.css">';
        
        // Container de erro
        echo '<div class="error-container shake">';
        echo '<span class="error-icon">&#9888;</span>'; // Ícone de aviso
        echo '<h3>Ops! Algo deu errado</h3>';
        echo '<p>' . htmlspecialchars($message) . '</p>';
        
        // Botão de voltar, se uma URL for fornecida
        if ($backUrl) {
            echo '<a href="' . htmlspecialchars($backUrl) . '" class="back-button">';
            echo '<i>&#8592;</i> ' . htmlspecialchars($backText);
            echo '</a>';
        }
        
        echo '</div>';
        
        // Envia o conteúdo para o navegador
        ob_end_flush();
        
        // Encerra a execução do script
        exit;
    }
    
    /**
     * Redireciona para a próxima página após resposta correta
     * 
     * @param string $nextUrl URL da próxima página
     */
    public static function redirectToNext($nextUrl) {
        header("Location: $nextUrl");
        exit;
    }
}
?>