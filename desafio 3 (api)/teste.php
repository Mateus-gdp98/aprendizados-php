<pre>
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

    echo "A cotação atual é $cotacao";
?>
</pre>