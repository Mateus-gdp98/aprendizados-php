<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $num = $_REQUEST["num"] ?? 0;
    
    ?>

    <main>
        <h1>Informe um número</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Número</label>

        <input type="number" name="num" id="num" value="<?=$num?>">
        <input type="submit" value="Calcular raízes">


        </form>

    </main>

    <section>
        <h2>Resultado final</h2>

        <?php
            $raizCubica = number_format($num**(1/3),3,',','.') ?? 0;
            $raizQuadrada = number_format(sqrt($num),3,',','.') ?? 0;

            echo "Analisando o <strong>número $num</strong>, temos:
                <ul>
                    <li>A sua raiz quadrada é <strong>" . $raizQuadrada . "</strong></li>
                    <li>A sua raiz cúbica é <strong>". $raizCubica ."</strong></li>
                </ul>";
        
        ?>
    </section>


    
</body>
</html>