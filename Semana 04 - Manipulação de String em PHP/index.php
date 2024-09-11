<!--
    Aluno: João Vitor Lima Zeferino
    Data: 06/03/2024
-->
<!DOCTYPE html>
<html lang="en" data-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    />
    <title>Formulario</title>
  </head>
  <body>
    <div>
      <h3>Usando Metodo POST</h3>
      <form method="POST">
        <label>
          Nome:
          <input type="text" name="nome" placeholder="Nome" />
        </label>

        <input type="submit" value="Enviar" />
      </form>
    </div>
  </body>

  <style>
    body {
      padding: 10%;
    }
  </style>
</html>

<?php
if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];

    echo "a) Exibir a quantidade de caracteres (incluindo os espaços): " . strlen($nome);
    echo "<br>b) Exibir a string reversa: " . strrev($nome);
    echo "<br>c) Converter a primeira letra de cada palavra em letra maiúscula: " . ucwords($nome);
    echo "<br>d) Exibir todo o texto em letra maiúscula: " . strtoupper($nome);
    echo "<br>e) Exibir todo o texto em letra minúscula: " . strtolower($nome);
    echo "<br>f) Exibir a repetição do nome 3 vezes, sendo um por linha: " . str_repeat("<br>" . $nome, 3);
    echo "<br>g) Verificar e apresentar se a string digitada contém a substring ‘ana’: " . anaExists($nome);
    echo "<br>h) Verificar se a string termina com a substring ‘antos’: " . endsWithAntos($nome);
    echo "<br>i) Embaralhar a string aleatoriamente : " . str_shuffle($nome);
    echo "<br>j) Retornar o primeiro caractere da string em maiúsculo: " . strtoupper(substr($nome, 0, 1));
} else {
    echo "Erro ao pegar dados do formulario";
}

function endsWithAntos($string)
{
    if (substr($string, -5, 5) === "antos") {
        return "Termina com 'antos'";
    } 
    
    return "Não termina com 'antos'";
}

function anaExists($string)
{
    if (strpos($string, "ana") !== false) {
        return "Ana foi encontrada na string";
    } else {
        return "Ana não foi encontrada na string";
    }
}

?>
