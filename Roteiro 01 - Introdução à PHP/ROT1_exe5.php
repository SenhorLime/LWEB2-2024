<!-- 
    Aluno: João Vitor Lima Zeferino
    Data: 20/02/2024
-->

<?php
$frutas = array("banana", "maçã", "laranja", "limão", "uva");
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays em PHP</title>
</head>

<body>
    <p>Primeiro elemento:
        <?php echo $frutas[1] ?>
    </p>

    <p>Alterando o valor da segundo posição:
        <?php $frutas[1] = "morango" ?>
    </p>

    <p>
        Adionando abacaxi ao final do array:
        <?php
        array_push($frutas, "abacaxi");
        print_r($frutas);
        ?>
    </p>

    <p>Removendo o primeiro elemento do array:
        <?php
        array_shift($frutas);
        print_r($frutas);
        ?>
    </p>

    <p>
        Contando elementos do array:
        <?php echo count($frutas); ?>
    </p>

    <p>
        Verifica se o elemento "banana" está no array:
        <?php
        if (in_array("banana", $frutas)) {
            echo "banana está no array";
        } else {
            echo "banana não está no array";
        }
        ?>

    </p>
</body>

</html>