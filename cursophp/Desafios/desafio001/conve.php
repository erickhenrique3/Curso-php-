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
        // cotaçao vinda da API do banco central
        $inicio = date("m-d-Y", strtotime(" -7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];


        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real / $cotacao;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " Equivalem a "
            . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>