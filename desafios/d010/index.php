<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 - Cálculo de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nascimento = $_GET['nasc']??'2000';
        $atual = date("Y");
        $anoatual = $_GET['ano'] ?? $atual;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1990" max="<?=$atual?>" value="<?=$nascimento?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong>2025.)</strong></label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$anoatual?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            $idade = $anoatual - $nascimento;
            echo "<p>Quem nasceu em $nascimento vai ter <strong>$idade</strong> em $anoatual.</p>"
        ?>
    </section>
</body>
</html>