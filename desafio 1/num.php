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
        <h1>Desafio 1: Resultado</h1>
    </header>
    
    <main>

        <?php 
            $numero = $_REQUEST["numero"];

            echo "<strong><h1>Resultado Final</h1></strong>";
            echo "O número escolhido foi $numero";
            echo "<p>O seu antecessor é " . $numero-1;
            echo "<p>O seu sucessor é " . $numero+1;
            echo "<br><button onclick='window.history.back()'>Voltar</button>";
        
        ?>


    </main>
</body>
</html>