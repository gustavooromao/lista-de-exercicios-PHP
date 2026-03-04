<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

    <!-- implementação da solução -->
        <?php
        $nome = "Mario";
        $idade = 78;

        $diasDeVida = $idade * 365;

        echo "Olá, $nome!\n";
        echo "Com $idade anos, você já viveu aproximadamente $diasDeVida dias.";
        ?>
    </main>
</body>


</html>