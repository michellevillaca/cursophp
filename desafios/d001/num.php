<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1 - Informe um Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <?php 
            $num = $_GET["número"] ?? 0;
            $ant = $num - 1;
            $suc = $num + 1;
            echo "<p>O número escolhido foi <strong>$num</strong>.<br>O seu <em>antecessor</em> é <strong>$ant</strong>.<br>O seu <em>sucessor</em> é <strong>$suc</strong>.</p>"
        ?>
        <button type="button" onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body>
</html>