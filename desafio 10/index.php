<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $atual = date('Y');
        $anoNascimento = $_REQUEST["anoNascimento"] ?? 2000;
        $anoEscolhido = $_REQUEST["anoEscolhido"] ?? $atual;
        
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" min="1900" max="<?=$atual?>" value="<?=$anoNascimento?>">

            <label for="anoEscolhido">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="anoEscolhido" id="anoEscolhido" value="<?=($atual-1)?>">

            <input type="submit" value="Qual será a minha idade?">

        </form>

    </main>

    <section>
        <h2>Resultado</h2>
        <?php 

            $res = $anoEscolhido - $anoNascimento;

            echo "Quem nasceu em $anoNascimento vai ter <strong>$res anos</strong> em $anoEscolhido.";
        ?>


    </section>
    
</body>
</html>