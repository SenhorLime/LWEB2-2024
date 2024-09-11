<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Styles/styles.css">
  <title>Validação de CPF</title>
</head>

<body>
  <main>
    <h1>Validação de CPF</h1>
    <form method="POST" action="Post/sent.php">
      <div>
        <label for="cpf">CPF
        <input 
          type="text" 
          name="cpf" 
          maxlength="11" 
          minlength="11" 
          required 
        />
        </label>
        
      </div>

      <input type="submit" value="Validar">
    </form>
  </main>
</body>

</html>