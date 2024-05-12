<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex003</title>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo"); //GMT - 3
    echo "Hoje é dia " . date('d/M/Y');
    echo "é a hora atual é " . date("G:i:s")
    ?>
</body>
</html>