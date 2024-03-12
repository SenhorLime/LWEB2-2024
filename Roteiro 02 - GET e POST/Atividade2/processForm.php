<!--
    Aluno: João Vitor Lima Zeferino
    Data: 08/03/2024
-->
<!DOCTYPE html>
<html lang="pt-br" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles.css">
    <title>Formulario 2</title>
</head>

<body>
<article>
    <header>
        <div class="aligned-items">
            <h6>Nome:&nbsp;</h6>
            <p><?php echo "{$_POST['nome']}" ?></p>
        </div>

        <div class="aligned-items">
            <h6>Email:&nbsp;</h6>
            <p><?php echo $_POST['email'] ?></p>
        </div>
    </header>

    <div class="aligned-items">
        <h6>Sexo:&nbsp;</h6>
        <p><?php echo $_POST['sexo'] ?></p>
    </div>

    <div class="aligned-items">
        <h6>Interesses:&nbsp;</h6>
        <p>
					<?php
					if (isset($_POST['interesses']) && !empty($_POST['interesses'])) {
						foreach ($_POST['interesses'] as $interesse) {
							echo "{$interesse}, ";
						}
					}
					?>
        </p>
    </div>

    <div class="aligned-items">
        <h6>País:&nbsp;</h6>
        <p><?php echo $_POST['pais'] ?></p>
    </div>

    <footer>
        <div>
            <h6>Mensagem:</h6>
            <p><?php echo $_POST['mensagem'] ?></p>
        </div>
    </footer>

</article>
</body>

</html>