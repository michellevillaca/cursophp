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
            <p>Atualmente, estamos no ano de $anoatual.</p>";

            $soma = $anoatual + $idade + $anonasc;
            $somadiv = $anoatual + $anonasc / $idade;
            $subtraçao_multiplicaçao = $anoatual*$idade - $anonasc;
            $multiplicaçao_divisao = $anoatual * $anonasc / $idade;
            echo "<p>Vamos fazer algumas operações com os números preenchidos no formulário:</p>
            <p><ul><li>A soma de todos os números:<br>$idade + $anonasc + $anoatual = $soma<br><br> <li> O ano atual somado ao seu ano de nascimento dividido pela sua idade:<br>$anoatual + $anonasc / $idade = $somadiv<br><br> <li>O ano atual vezes a sua idade menos o ano de seu nascimento:<br>$anoatual * $idade - $anonasc = $subtraçao_multiplicaçao<br><br> <li>O ano atual vezes o seu ano de nascimento dividido pela sua idade:<br>$anoatual * $anonasc / $idade = $multiplicaçao_divisao</p>"
        ?>
    </main>
</body>
</html>