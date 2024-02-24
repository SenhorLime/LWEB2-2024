<!-- 
    Aluno: João Vitor Lima Zeferino
    Data: 20/02/2024
-->

<?php
$cidade = "Contagem";
$estado = "Minas Gerais";
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação de Strings</title>
</head>

<body>
    <p>Estou em
        <?php echo "{$cidade}, {$estado}" ?>
    </p>
</body>

</html>