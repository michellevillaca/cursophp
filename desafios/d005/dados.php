<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5 - Analisador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $número = $_REQUEST["número"] ?? 0;

            echo "<p>Analisando o número <strong>".number_format($número, 3, ",", ".")."</strong> informado pelo usuário:</p>";

            $int = (int)$número;
            $fra = $número - $int;

            echo "<ul><li> A parte inteira do número é <strong>".number_format($int, 0, ",", ".")."</strong>";
            echo "<li> A parte fracionária do número é <strong>".number_format($fra, 3, ",",".")."</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>