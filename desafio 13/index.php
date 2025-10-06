<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define o conjunto de caracteres para suportar acentos e caracteres especiais -->
    <meta charset="UTF-8">
    <!-- Configura a escala da página para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <!-- Importa um arquivo CSS externo chamado style.css -->
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estiliza as imagens das notas para que tenham altura de 50px e espaçamento de 5px */
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>

    <?php 
        // Obtém o valor enviado pelo formulário via método GET ou define como 0 se não existir
        $valor = $_REQUEST["valor"] ?? 0;
    ?>

    <main>
        <h1>Caixa eletrônico</h1>
        <!-- Formulário para receber o valor a ser sacado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <!-- Rótulo para o campo de entrada do valor -->
            <label for="valor">Qual valor deseja sacar? (R$)*</label>
            <!-- Campo de entrada do valor, aceita apenas números múltiplos de 5 -->
            <input type="number" name="valor" id="valor" step="5" value="<?=$valor?>" min="0">
            <p style="font-size: 0.7em;">Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <!-- Botão para enviar o formulário -->
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php
            // Inicializa a variável $resto com o valor informado pelo usuário
            $resto = $valor;

            // Calcula a quantidade de notas de R$100
            $cem = floor($resto / 100); // Divide por 100 e pega a parte inteira
            $resto %= 100; // Atualiza o resto da divisão (o que sobra após retirar as notas de 100)

            // Calcula a quantidade de notas de R$50
            $cinquenta = floor($resto / 50);
            $resto %= 50;

            // Calcula a quantidade de notas de R$10
            $dez = floor($resto / 10);
            $resto %= 10;

            // Calcula a quantidade de notas de R$5
            $cinco = floor($resto / 5);
            $resto %= 5;
        ?>

        <!-- Exibe o valor formatado com duas casas decimais e separadores brasileiros -->
        <h1>Saque de R$ <?=number_format($valor,2,',','.')?> realizado</h1>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

        <!-- Lista de notas a serem entregues -->
        <ul>
            <li><img src="nota_de_cem.jpg" alt="Nota de 100" class="nota"> x<?=$cem?></li>
            <li><img src="nota_de_cinquenta.jpg" alt="Nota de 50" class="nota"> x<?=$cinquenta?></li>
            <li><img src="nota_de_dez.jpg" alt="Nota de 10" class="nota"> x<?=$dez?></li>
            <li><img src="nota_de_cinco.jpg" alt="Nota de 5" class="nota"> x<?=$cinco?></li>
        </ul>
    </section>

</body>
</html>
