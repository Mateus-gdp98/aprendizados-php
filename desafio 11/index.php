<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $valorInicial = $_REQUEST["valorInicial"] ?? 0;
        $barra = $_REQUEST["barra"] ?? 50;
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valorInicial">Preço do produto <strong>(R$)</strong></label>
            <input type="number" name="valorInicial" id="valorInicial" min="0.10" step="0.01" value="<?=$valorInicial?>">

            <label for="barra">Qual será o percentual de reajuste? <strong>(<span id="valorSlider"><?=$barra?></span>%)</strong></label>
            <input type="range" min="0" max="100" name="barra" id="barra" value="<?=$barra?>" oninput="atualizarValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    
    <script>
        //Usando JS para exibir o resultado da barra deslizante em tempo real

        atualizarValor()

        function atualizarValor() {
            document.getElementById('valorSlider').textContent = document.getElementById('barra').value;
        }
    </script>

    <section>
        <h2>Resultado do reajuste</h2>

        <?php

            $res = $valorInicial+($valorInicial * ($barra/100));

            echo "O produto que custava R$ " . number_format($valorInicial,2,',','.') . ", com <strong>$barra% de aumento</strong> vai passar a custar <br> R$ " . number_format($res,2,',','.') . " a partir de agora.";
        
        ?>
    </section>

</body>
</html>
