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
        <h2>Questão 07: Fatorial </h2>
    </header>

    <main>

    <!-- implementação da solução -->
        <?php
        $a = 15;
        $b = 85;
        $c = 42;

        if ($a >= $b && $a >= $c) {
            if ($b >= $c) {
                echo "$a, $b, $c";
            } else {
                echo "$a, $c, $b";
            }
        } elseif ($b >= $a && $b >= $c) {
            if ($a >= $c) {
                echo "$b, $a, $c";
            } else {
                echo "$b, $c, $a";
            }
        } else {
            if ($a >= $b) {
                echo "$c, $a, $b";
            } else {
                echo "$c, $b, $a";
            }
        }
        ?>
    </main>
</body>


</html>