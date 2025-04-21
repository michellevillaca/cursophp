<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13 - Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['reais']??0;
        $resto = $saque;

        $tot100 = intdiv($saque,100);
        $resto %=100;

        $tot50 = intdiv($resto,50);
        $resto %=50;

        $tot10 = intdiv($resto, 10);
        $resto %=10;

        $tot5 = intdiv($resto,5);
        $resto %=5;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="reais">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="reais" id="reais" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.6em;"><sup>*</sup>Notas disponíveis: R$100, $50, R$10 e R$5.</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <h2>Saque de R$<?=number_format($saque,2,",",".")?> realizado!</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul><li><img class="nota" src="100-reais.jpg" alt="100 reais"> x <?=$tot100?></li></ul>
        <ul><li><img class="nota" src="50-reais.jpg" alt="50 reais"> x <?=$tot50?></li></ul>
        <ul><li><img class="nota" src="10-reais.jpg" alt="10 reais"> x <?=$tot10?></li></ul>
        <ul><li><img class="nota" src="5-reais.jpg" alt="5 reais"> x <?=$tot5?></li></ul>
    </section>
</body>
</html>