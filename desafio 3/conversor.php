<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <header>
        <h1>Desafio 3: Resultado</h1>
    </header>
    
    <main>

    <?php
        $cotacao = 5.78;
        $real = $_REQUEST["valor"];

        // Conversão
        $dólar = $real / $cotacao;

        //Mostrando o resultado

        //Formatação de moedas com internacionalização
        //Biblioteca intl (Internacionalização PHP)

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dólar, "USD");
    ?>

    <button onclick="javascript:history.go(-1)">Voltar</button>


    </main>
</body>
</html>