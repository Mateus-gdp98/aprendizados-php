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
        <h1>Desafio 3: Resultado com API</h1>
    </header>
    
    <main>

    <?php

        //Automatizando as datas para estar sempre atualizado
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        //Usar aspas simples para colar a url, e ajustar com o \ nas aspas simples que o link já possuir
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        //Criando um array baseado no link | true -> array | false -> objeto
        $dados = json_decode(file_get_contents($url), true);

        //Exibindo o tipo da variável para achar a informação
        //var_dump($dados);

        //Pegando somente o dado que precisamos (o valor da cotação)
        $cotacao = $dados["value"][0]["cotacaoCompra"];
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