<!--
    Aluno: João Vitor Lima Zeferino
    Data: 06/03/2024
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metodo GET</title>
</head>

<body>
  <?php
  if (isset($_GET["nome"]) && isset($_GET["email"])) {
    echo "Seja bem vindo {$_GET["nome"]}";
    echo "<br>Seu email é {$_GET["email"]}";
  } else {
    echo "Erro ao pegar dados do formulario";
  }
  ?>
</body>

</html>