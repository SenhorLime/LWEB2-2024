<!-- 
    Aluno: João Vitor Lima Zeferino
    Data: 20/02/2024
-->

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição do nome em PHP</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f9dc;
            /* verde claro */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .nome {
            color: #ff4500;
            /* Cor laranja */
            font-size: 24px;
        }
    </style>
    </head>

    <body>
        <div>
            <h1>Meu Nome em PHP</h1>
            <p class="nome">
                <?php

                echo "João Limão";
                ?>
            </p>
        </div>
    </body>

</html>