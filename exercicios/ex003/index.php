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
        $v4 = 3e2; // = 3x10(2)
        echo "<br> O valor é $v4 <br>";
        var_dump($v4);
        //eu posso "forçar a barra" e fazer com que o float vire int ao "mandar" o comando:
        $v5 = (int)3e2; //o nome disso é "coerção"
        var_dump($v5);

        //coerções:
        $v6 = (float) "950"; // entre aspas, considera-se uma string, mas eu quero que se converta para float:
        var_dump($v6);

        /* valores booleanos:
        true = 1
        false = *vazio* */
        $casado = false;
        echo "<br> O valor para a variável 'casado' é $casado";
        $solteiro = true;
        echo "<br> O valor para a variável 'solteiro' é $solteiro <br>";

        // Outros tipos primitivos:
        $vetor = [6,2.5,"Maria",9,3,5, false];
        var_dump($vetor);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>