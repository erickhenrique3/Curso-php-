<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <main>
    <h1>Resultado final</h1>
    <p>
        <?php 
          $n = $_GET ["num"] ?? 0;
          $a = $n - 1;
          $s = $n + 1;
          echo " O número escolhido foi $n <br>
                O antecessor é $a <br>
                O sucessor é $s ";
        ?>

    </p>
      <button onclick="javascript:window.location.href='index.html'">Voltar</button>
 </main>

    
</body>
</html>