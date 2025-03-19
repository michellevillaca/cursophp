<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 300;
        echo "O valor da variável é $num <br>";
        $numHexadecimal = 0x1A;
        echo "O valor da variável é $numHexadecimal <br>";
        // 0x = hexadecimal; 0b = binário; 0 = octal
        $numBinário = 0b1010;
        echo "O valor da variável é $numBinário <br>";
        $numOctal = 010;
        echo "O valor da variável é $numOctal <br>";

        $v1 = 300;
        var_dump($v1);
        $v2 = 40.2;
        var_dump($v2);
        $v3 = "Michelle";
        var_dump($v3);
    ?>
</body>
</html>