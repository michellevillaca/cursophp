<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8 - Raízes de um Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $número = $_GET['num']??0;
        ?>

        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            $r_quadrada = sqrt($número);
            $r_cúbica = pow($número, 1.0/3.0);
            echo "<p>Analisando o <strong>número $número</strong>:
            <ul><li> A sua raiz quadrada é <strong>$r_quadrada</strong>
            <li> A sua raiz cúbica é <strong>$r_cúbica</strong></ul>
            </p>"
        ?>
    </section>
</body>
</html>