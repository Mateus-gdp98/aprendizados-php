<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $tempo = $_REQUEST["tempo"] ?? 0;
        
    ?>

    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="tempo">Qual o tempo em segundos?</label>
            <input type="number" name="tempo" id="tempo" value="<?=$tempo?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>

        <?php
            $sobra = $tempo;
            $semanas = intdiv($tempo, 604_800);  // 604800 segundos = 1 semana
            $tempo = $tempo % 604_800; // Subtrai as semanas calculadas do tempo original
            $dias = intdiv($tempo, 86_400);  // 86400 segundos = 1 dia
            $tempo = $tempo % 86_400;  // Subtrai os dias calculados do tempo original
            $horas = gmdate("H", $tempo);
            $minutos = gmdate("i", $tempo);
            $segundos = gmdate("s", $tempo);
        ?>

        <p>Analisando o valor que você digitou, <strong><?=number_format($sobra,0,',','.')?> segundos</strong>, equivalem a um total de:</p>

        <ul>
                    <li><?=$semanas?> Semana (s)</li>
                    <li><?=$dias?> Dia (s)</li>
                    <li><?=$horas?> Hora (s)</li>
                    <li><?=$minutos?> Minuto (s)</li>
                    <li><?=$segundos?> Segundo (s)</li>

        </ul>

    </section>
    
</body>
</html>