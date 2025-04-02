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
            $num = rand(0,100);
            echo "<p>O valor gerado foi <strong>$num</strong>.</p>";
        ?>
           <input type="reset" value="Gerar novamente">
    </section>
</body>
</html>