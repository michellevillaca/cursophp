<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2 - Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $num = mt_rand(0,100);
            echo "<p>O valor gerado foi <strong>$num</strong>.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.php'">&#x1F504; Gerar novamente</button>
    </section>
</body>
</html>