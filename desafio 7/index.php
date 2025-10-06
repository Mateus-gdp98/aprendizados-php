<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php 

    /*Capturando dados do formulário retroalimentado
        E usando o operador de "??" qualecência nula */
    $salario = $_REQUEST["salario"] ?? 0;
    $min = 1509.60;

?>
    <main>

        <h1>Informe seu salário</h1>

        <!-- Usando a short tag para exibir apenas o echo. 
        Esse short tag exibe o nome da página pgp atual -->

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário R$</label>

            <!--Usando a short tag para mostrar o valor que foi salvo na variável desse valor-->
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">

            <p>Considerando o salário mínimo de <strong>R$ <?=number_format($min,2,',','.')?></strong></p>

            <input type="submit" value="Calcular">

        </form>

    </main>

    <section>
        <h2>Resultado final</h2>

        <?php

            $tot = intdiv($salario, $min);
            $dif = $salario%$min;

            echo "<p>Quem recebe um salário de R$ " . number_format($salario,2,',','.') . " ganha <strong> $tot salário(s) mínimo(s) </strong> + R$ " . number_format($dif,2,',','.') . "</p>";


            /* Maneira que fiz
            $res1 = floor($salario / 1509);
            $res2 = floor($salario - $res1 * 1509);


            echo "<p>Quem recebe um salário de R$ " . number_format($salario,2,',','.') . " ganha <strong>" . $res1 . " salário(s) mínimo(s) + </strong>R$ " . number_format($res2,2,',','.');
            */

        ?>

    </section>
    
</body>
</html>