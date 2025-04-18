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
        $preço = $_GET['preço']?? '0';
        $porcentagem = $_GET['reajuste']?? '0';

        $aumento = ($preço*$porcentagem) / 100;
        $novo_preço = $preço + $aumento;
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preço">Preço do Produto (R$)</label>
            <input type="number" name="preço" id="preço" min="0.10" step="0.01" value="<?=$preço?>">

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="porcentagem">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcentagem?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preço, 2, ",",".")?>, com <strong><?=$porcentagem?> de aumento</strong> vai passar a custar <strong>R$<?=number_format($novo_preço, 2, ",",".")?></strong> a partir de agora.</p>
    </section>

    <script>
        // Declarações automáticas
        mudaValor()

       function mudaValor() {
        porcentagem.innerText = reajuste.value
       }
    </script>
</body>
</html>