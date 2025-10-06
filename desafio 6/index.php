<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <?php
        
        /*Capturando dados do formulário retroalimentado
            E usando o operador de "??" qualecência nula */
        $dividendo = $_REQUEST['dividendo'] ?? 0;
        $divisor = $_REQUEST['divisor'] ?? 1;
    
    ?>

    <main>
        <h1>A anatomia de uma divisão</h1>
        
        <!-- Usando a short tag para exibir apenas o echo. 
                Esse short tag exibe o nome da página pgp atual -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>

            <!--Usando a short tag para mostrar o valor que foi salvo na variável desse valor-->
            <input type="number" name="dividendo" id="dividendo" min=0 value="<?=$dividendo?>">

            <label for="divisor">Divisor</label>
            
            <!--Usando a short tag para mostrar o valor que foi salvo na variável desse valor-->
            <input type="number" name="divisor" id="divisor" min=1 value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        
            <?php
                // Cálculos               
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo%$quociente;                
            ?>
        
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>

            <tr>
                <td><?=$quociente?></td>
                <td><?=$resto?></td>

            </tr>
        </table>
         
    </section>
    
</body>
</html>