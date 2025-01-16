<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >

    <title>Lista de usuários</title>

    <style>
        body {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        nav {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        nav h2 {
            margin: 0;
            padding: 10px;
        }

        nav ul li a {
            display: flex;
            list-style: none;
            padding: 30px;
        }

        table {
            width: 95%;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><h2>Lista de usuários</h2></li>
    </ul>
    <ul>
        <li><a href="/CRUD/Source/users/form/create">Criar registro</a></li>
    </ul>
</nav>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Senha</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
		<?php if (!empty($users)): ?>
			<?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user->id); ?></td>
                <td><?php echo htmlspecialchars($user->nome); ?></td>
                <td><?php echo htmlspecialchars($user->email); ?></td>
                <td><?php echo htmlspecialchars($user->senha); ?></td>
                <td>
                    <div class="grid">
                        <div>
                            <a href=<?php echo "users/form/update?id={$user->id}"; ?>>
                                <button>Editar</button>
                            </a>
                        </div>

                        <div>
                            <a href=<?php echo "users/delete?id={$user->id}"; ?>>
                                <button class="contrast">Deletar</button>
                            </a>
                        </div>

                    </div>
                </td>
            </tr>
			<?php endforeach; ?>
		<?php else: ?>
        <tr>
            <td colspan="5">Nem usuário foi encontrado</td>
        </tr>
		<?php endif; ?>
    </tbody>
</table>
</body>
</html>