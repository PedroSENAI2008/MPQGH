<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim</title>
    <link rel="stylesheet" href="../assets/css/error.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: rgba(204, 198, 185, 0.658);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        
        .congratulations {
            background-color: #e8f5e9;
            border-left: 5px solid #4caf50;
            color: #2e7d32;
            padding: 20px 30px;
            margin: 20px auto;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            animation: fadeIn 0.8s ease-in-out;
        }
        
        h1 {
            color: #2e7d32;
            margin-bottom: 20px;
        }
        
        .points {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 20px 0;
            color: #1b5e20;
        }
        
        .submit input {
            background-color: #4a4a4a;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .submit input:hover {
            background-color: #333333;
            transform: scale(1.05);
        }
        
        .home-button {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #4a4a4a;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .home-button:hover {
            background-color: #333333;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="congratulations">
        <h1>Parabéns! Você chegou ao fim!</h1>
        
        <?php
        session_start();

        if (!isset($_SESSION['pontos'])) {
            $_SESSION['pontos'] = 0;
        }
        
        echo "<div class='points'>Seus pontos são: " . $_SESSION['pontos'] . " pontos</div>";
        ?>
        
        <p>Você completou todas as questões com sucesso!</p>
        
        <form method="post">
            <div class="submit">
                <input type="submit" value="Reiniciar Jogo">
            </div>
        </form>
        
        <a href="../index.html" class="home-button">&#8592; Voltar para o Início</a>
    </div>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
        $_SESSION['pontos'] = 0;

        header("Location: " . $_SERVER['PHP_SELF']);
    exit();
    

}