<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analisador de numeros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
     <h1>Resultado</h1>
    </header>
    <main>
        <?php 
         $num = $_POST["n"] ?? 0;
         echo "<p>Conforme o numero $num digitado pelo o usuário</p>";
         $int = (int) $num ;
         $fra = $num - $int;
         echo "<ul>
             <li>
                 <p>A parte inteira do número e <strong>$int</strong></p>
             </li>
         </ul>
         <ul>
             <li>
                 <p>A parte frácionaria do número e <strong>$fra</strong></p>
             </li>
         </ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>
</html>