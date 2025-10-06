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
        <h1>Desafio 2: Resultado</h1>
    </header>
    
    <main>

        <?php 
            
            echo "<strong><h1>Trabalhando com números aleatórios</h1></strong>";
            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
            echo "<p>O número gerado foi <strong>" . random_int(1,100) . "</strong></p>";
            echo "<button onclick='window.location.reload()'>Gerar outro</button>";
        
        ?>


    </main>
</body>
</html>