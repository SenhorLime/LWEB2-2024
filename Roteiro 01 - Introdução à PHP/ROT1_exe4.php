<!-- 
    Aluno: João Vitor Lima Zeferino
    Data: 20/02/2024
-->

<?php
$nome = "João Vitor";
$idade = 18;
$profissão = "programdor";
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis em Frases Compostas</title>
</head>

<body>
    <p>Olá, meu nome é
        <?php echo "{$nome}. Tenho {$idade} anos e sou {$profissão}" ?>
    </p>
</body>

</html>