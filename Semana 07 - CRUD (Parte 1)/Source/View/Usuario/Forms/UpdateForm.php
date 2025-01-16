<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <script defer src="https://kit.fontawesome.com/ad9be2ab79.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>

    <title>Cadastro de Usuários</title>
</head>

<body>
<h2>Cadastro de Usuários</h2>

<?php if (!empty($user)): ?>
    <fieldset>
        <form method="post" action="/CRUD/Source/users/update">
            <input type="hidden" value=<?php echo $user->getID(); ?> name="id" id="id">

            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" value=<?php echo $user->getNome(); ?> required>

            <label for="email">E-mail: </label>
            <input type="text" name="email" id="email" value=<?php echo $user->getEmail(); ?> required>

            <button type="submit">Salvar</button>
        </form>
    </fieldset>
<?php endif; ?>
</body>

</html>
