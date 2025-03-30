<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"];
            $idade = $_GET["idade"];
            $anoatual = $_GET["anoatual"];
            $anonasc = $_GET["anonasc"];
            echo "<p>Olá, $nome! De acordo com o seu formulário, você tem $idade e nasceu no ano de $anonasc.</p>
            <p>Atualmente, estamos no ano de $anoatual.</p>"
        ?>
    </main>
</body>
</html>