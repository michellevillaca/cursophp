<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9 - Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1']??0;
        $p1 = $_GET['p1']??1;
        $v2 = $_GET['v2']??0;
        $p2 = $_GET['p2']??1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º valor</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">
            <label for="p1">Peso do 1º valor</label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>">
            <label for="v2">2º valor</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>">
            <label for="p2">Peso do 2º valor</label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php
            $média_simples = ($v1 + $v2) / 2;
            $média_ponderada = (($v1*$p1) + ($v2*$p2)) / ($p1 + $p2);

            echo "<p>Analisando os valores $v1 e $v2:
            <ul><li> <strong>A Média Aritmética Simples</strong> entre os valores é igual a " . number_format($média_simples, 2, ",",".") . ".<li> A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a " . number_format($média_ponderada, 2, ",",".") . ".</ul></p>"
        ?>
    </section>
</body>
</html>