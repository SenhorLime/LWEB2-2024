<!--
    Aluno: João Vitor Lima Zeferino
    Data: 11/03/2024
-->
<!DOCTYPE html>
<html lang="pt-br" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles.css">
    <title>Formulario Login</title>
</head>

<body>
<article>
    <header>
        <div class="aligned-items">
            <h6>Username:&nbsp;</h6>
            <p><?php echo "{$_POST['username']}" ?></p>
        </div>

        <div class="aligned-items">
            <h6>Email:&nbsp;</h6>
            <p><?php echo $_POST['email'] ?></p>
        </div>
    </header>

    <div class="aligned-items">
        <h6>País:&nbsp;</h6>
        <p><?php echo $_POST['pais'] ?></p>
    </div>

    <div class="aligned-items">
        <h6>Senha:&nbsp;</h6>
        <p><?php echo $_POST['password'] ?></p>
    </div>
</article>
</body>

</html>