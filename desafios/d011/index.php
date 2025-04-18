<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 - Reajustando Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preço = $_GET['preço']??1;
        $reajuste = $_GET['reajuste']??25;
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preço">Preço do Produto (R$)</label>
            <input type="number" name="preço" id="preço">
            <label for="reajuste">Qual será o percentual de reajuste?</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" value="50">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
    </section>
</body>
</html>