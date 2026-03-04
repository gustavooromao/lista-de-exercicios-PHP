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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>
    <!-- implementação da solução -->
     <?php
        $segundosTotais = 10000;

        $horas = floor($segundosTotais / 3600);

        $restoSegundos = $segundosTotais % 3600;

        $minutos = floor($restoSegundos / 60);

        $segundosFinais = $restoSegundos % 60;
        echo "Duração do evento: $horas horas, $minutos minutos e $segundosFinais segundos.";
        ?>
    </main>
</body>


</html>