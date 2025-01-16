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
<fieldset>
    <h2>Cadastro de Usuários</h2>

    <form method="post" action="/CRUD/Source/users/create">

        <label for="nome">Nome: </label>
			<?php if (isset($nome)): ?>
          <input type="text" name="nome" id="nome" value="<?php echo htmlspecialchars($nome); ?>" required>
			<?php else: ?>
          <input type="text" name="nome" id="nome" required>
			<?php endif; ?>


        <label for="email">E-mail: </label>
			<?php if (isset($email)): ?>
          <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($nome); ?>" required>
			<?php else: ?>
          <input type="text" name="email" id="email" required>
			<?php endif; ?>

        <label for="senha">Senha: </label>
        <div
                role="group"
                x-data="{ showPassword : false }"
        >
            <input :type=" showPassword ? 'text' : 'password' " name="senha" id="senha" required>
            <button x-on:click="showPassword = !showPassword" type="button">
                <i class="fa-regular"
                   :class=" showPassword ? 'fa-eye' : 'fa-eye-slash' "></i>
            </button>
        </div>
			<?php if (isset($error)): ?>
          <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
			<?php endif; ?>


        <button type="submit">Salvar</button>
    </form>
</fieldset>
</body>

</html>