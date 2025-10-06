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
        <h1>Desafio 4: Resultado</h1>
    </header>
    
    <main>

        <?php 
            $numero = $_REQUEST["numero"];
            $inteiro = (int) $numero;
            $fra = $numero - $inteiro;

            echo "<strong><h1>Analisador de número real</h1></strong>";
            echo "Analisando o número <strong>" . number_format(abs($numero), 3, ',', '.') . "</strong> informado pelo usuário";

            echo "<ul>
                    <li>A parte inteira do número é <strong>" . number_format($inteiro, 0, ',', '.') . "</strong></li>
                    <li>A parte fracionária do número é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li>
                 </ul>";       
        ?>
        <br><button onclick='window.history.back()'>Voltar</button></br>


    </main>
</body>
</html>