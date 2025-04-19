<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7 - Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salário = $_GET["salário"]??1518;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salário">Salário (R$)</label>
            <input type="number" name="salário" id="salário" step="0.01" value="<?=$salário?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            $divisão = intdiv($salário,1518);
            $resto = $salário % 1518;
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Quem recebe um salário de" .numfmt_format_currency($padrão, $salário, "BRL") . " ganha <strong>$divisão salários mínimos</strong> + " . numfmt_format_currency($padrão, $resto, "BRL").".";
        ?>
    </section>
</body>
</html>