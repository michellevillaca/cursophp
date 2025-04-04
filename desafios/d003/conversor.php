<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3 - Conversor de Moedas v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $real = $_REQUEST["reais"];
            $dolar = 5.62;
            $conversao = $real / $dolar;

            // Formatação de moedas com internacionalização.
            // Biblioteca intl (Internallization PHP).
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ". numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $conversao, "USD") . "<br>*Cotação fixa de R$ 5,62</strong> informada diretamente no código.</p>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>