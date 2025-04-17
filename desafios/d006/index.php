<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 - Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["v1"] ?? 0;
        $divisor = $_GET["v2"] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$dividendo?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            echo "<p>Dividendo = $dividendo<br>Divisor = $divisor</p>";
            
            $divisão = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

            echo "<p>$dividendo / $divisor = $divisão<br>Resto = $resto</p>"
        ?>
    </section>
</body>
</html>