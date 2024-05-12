<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Superglobais</title>
</head>
<body>
    <main>
        <pre>
            <?php 
              session_start();
              $_SESSION["teste"] = "Fucionou";
 
              echo "<h1>Superglobais Get</h1>";
              var_dump($_GET);
              echo "<h1>superglobais Post</h1>";
              var_dump($_POST);

              echo "<h1>superglobais REQUEST</h1>";
              var_dump($_REQUEST);

              echo "<h1>Super global
              Session </h1>";
              var_dump($_SESSION);


              echo "<h1>Super globais Server</h1>";
              var_dump($_SERVER)

            ?>
        </pre>
    </main>
</body>
</html>