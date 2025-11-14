<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="process.php" method="POST">
    <div class="caixa">

      <h1>CRIE SUA CONTA</h1>

      <input type="text" placeholder="Usuário" id="usuario" name="usuario">

      <input type="password" placeholder="Senha" id="senha" name="senha">

      <input type="password" placeholder="Confirmar Senha" id="senhac" name="senhac">

      <div class="texto1">
      <button onclick="cadastrar()">Criar Usuário</button>
      </div>

    </div>

    <div class="caixa2">

      <h2>Bem - vindo de volta</h2>
      <h3>Acesse sua conta agora</h3>   

      <button onclick="location.href='login.html'">Login</button>

    </div>

  </form>
  <script src="script.js"></script>
</body>
</html>