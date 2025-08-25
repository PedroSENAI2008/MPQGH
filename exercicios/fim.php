<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim</title>
</head>

<body>

    <h1>Parabéns você chegou ao fim</h1>

    <?php

    session_start();

    if (!isset($_SESSION['pontos'])) {
            $_SESSION['pontos'] = 0;
        }

    echo "Seus pontos são " . $_SESSION['pontos'] . " pontos";



    ?>

    <form method="post">

        <div class="multi">
            <div class="submit"><input type="submit" value="Finalizar"></div>
        </div>

    </form>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
        $_SESSION['pontos'] = 0;

        header("Location: " . $_SERVER['PHP_SELF']);
    exit();
    

}