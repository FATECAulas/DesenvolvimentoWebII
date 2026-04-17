<?php
$nome = "";
$email = "";
$telefone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefone = $_POST["telefone"] ?? "";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Web II</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      margin: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    h1 {
      text-align: center;
      margin-bottom: 10px;
    }

    p {
      text-align: center;
      color: #666;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      transition: 0.3s;
    }

    input:focus {
      border-color: #4facfe;
      outline: none;
      box-shadow: 0 0 5px rgba(79,172,254,0.5);
    }

    button {
      width: 100%;
      padding: 12px;
      background: #4facfe;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #00c6ff;
    }

    .resultado {
      margin-top: 20px;
      padding: 15px;
      background: #f1f9ff;
      border-radius: 8px;
      border-left: 5px solid #4facfe;
    }

    .resultado strong {
      color: #333;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Cadastro</h1>
    <p>Preencha seus dados</p>

    <form method="POST">
      <label>Nome:</label>
      <input type="text" name="nome" required>

      <label>E-mail:</label>
      <input type="email" name="email" required>

      <label>Telefone:</label>
      <input type="text" name="telefone" required>

      <button type="submit">Cadastrar</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
      <div class="resultado">
        <h3>Dados recebidos:</h3>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
      </div>
    <?php endif; ?>

  </div>

</body>
</html>