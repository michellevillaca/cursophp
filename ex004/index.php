<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <h1>Manipulação de Strings</h1>
    <?php 
        //para variáveis:
        $nome = "Michelle";
        echo "Olá, $nome! \u{1F920} <br>"; //aspas duplas --> ocorre a interpolação;
        echo 'Olá, $nome! \u{1F920} <br>'; //aspas simples --> não ocorre a interpolação.

        //para constantes:
        const ESTADO = "São Paulo";
        echo "Eu moro em ESTADO. <br>";
        echo 'Eu moro em ESTADO. <br>';
        echo "Eu moro em " .ESTADO; //a interpretação do dado da constante só ocorrerá dessa forma, com o operador de concatenação.
    ?>
</body>
</html>