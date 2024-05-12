<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
         $cotaçao = 4.89;
         $real = $_REQUEST["din"] ?? 0;
         $dolar = $real / $cotaçao;
         $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
         echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " Equivalem a "
         . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>