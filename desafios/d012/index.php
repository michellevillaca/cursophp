<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 - Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_GET['segundos']??0;

        /*semana = 604800;
        dia = 86400;
        hora = 3600;
        minuto - 60;*/
        
        $semana = intdiv($segundos,604800);
        $r_sem = $segundos%604800;
        $dia = intdiv($r_sem,86400);
        $r_dia = $r_sem%86400;
        $hora = intdiv($r_dia,3600);
        $r_hora = $r_dia%3600;
        $minuto = intdiv($r_hora,60);
        $r_min = $r_hora%60;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" required value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($segundos,0,',','.')?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas;</li>
            <li><?=$dia?> dias;</li>
            <li><?=$hora?> horas;</li>
            <li><?=$minuto?> minutos;</li>
            <li><?=$r_min?> segundos.</li>
        </ul>
    </section>
</body>
</html>