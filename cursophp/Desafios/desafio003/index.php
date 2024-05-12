<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Trabalhando com números aleatorios</h1>
    </header>
    <main>
        <p>Gerando números aleatorios entre 0 e 100:</p>
      <?php 
      $min = 0;
      $max = 100;
      $num = mt_rand($min , $max);
      echo "O número gerado foi: $num";
      ?>
      <!-- <button onclick="javascript:history.go(-1)">Recarregar</button> -->
      <button onclick="javascript:document.location.reload()">Recarregar</button>
    </main>

</body>

</html>