<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php 
   /// capturNDO OS DADOS DO FORM RETROALIMENTADOS  
   $valor1 = $_GET['v1']?? 0;
   $valor2 = $_GET['v2']?? 0;
  ?>
     <header>
        <h1>Somador</h1>
     </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="somar">

        </form>
    </main>
    <section id="resultado">
       <h2>Resultado da soma</h2>
       <?php 
       $soma = $valor1 + $valor2;
        print "<p>A soma entre os valores $valor1 e $valor2 é ingual a: <strong>$soma<strong/>.</p>"
       ?>
    </section>
</body>

</html>