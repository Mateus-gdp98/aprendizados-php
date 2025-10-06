<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $num1 = $_REQUEST["num1"] ?? '';
        $num2 = $_REQUEST["num2"] ?? '';
        $peso1 = $_REQUEST["peso1"] ?? '';
        $peso2 = $_REQUEST["peso2"] ?? '';
    ?>

    <main>
        <h1>Médias aritméticas</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num1">1° valor</label>
        <input type="number" name="num1" id="num1" value="<?=$num1?>" require>

        <label for="peso1">1° peso</label>
        <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" min="1" require>

        <label for="num2">2° valor</label>
        <input type="number" name="num2" id="num2" value="<?=$num2?>" min="1" require>

        <label for="peso2">2° peso</label>
        <input type="number" name="peso2" id="peso2" value="<?=$peso2?>" require>
        <input type="submit" value="Calcular médias">


        </form>

    </main>
    
    <section>

        <?php
        $mediaAritmetica = number_format(($num1 + $num2) / 2, 2,',','.');
        $mediaPonderada = number_format((($num1 * $peso1) + ($num2 * $peso2)) / ($peso1 + $peso2),2,',','.');
        ?>

        <h2>Cálculo de médias</h2>
        <p>Analisando os valores <?=$num1?> e <?=$num2?></p>

        <ul>
            <li>A <strong> média aritmética simples</strong> entre os valores é igual a <?=$mediaAritmetica?></li>
            <li>A <strong> média aritmética ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=$mediaPonderada?></li>
        </ul>

    </section>
</body>
</html>