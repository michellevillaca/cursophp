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
            $num = $_GET["número"];
            $ant = $num - 1;
            $suc = $num + 1;
            echo "<p>O número escolhido foi $num.<br>O seu antecessor é $ant.<br>O seu sucessor é $suc."
        ?>
         <p><button type="button"><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></button></p>
    </section>
</body>
</html>