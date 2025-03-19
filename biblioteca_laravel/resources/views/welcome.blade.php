<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Produto</title>
  <!-- Link para o Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f2f5;
      font-family: Arial, sans-serif;
      padding-top: 30px;
    }

    .navbar {
      margin-bottom: 30px;
    }

    .container {
      max-width: 500px;
      margin-top: 50px;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h3 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    input {
      margin-bottom: 15px;
    }

    button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
    }

    button:hover {
      background-color: #0056b3;
    }

    .form-control:focus {
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
  </style>
</head>
<body>

  <!-- Barra de navegação -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cadastro de Produto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <form action="/cadastrar-produto" method="POST">
    @csrf
      <label for="lblNome">Nome:</label>
      <input type="text" name="nome" class="form-control">
      <br>

      <label for="lblValor">Valor:</label>
      <input type="text" name="valor" class="form-control">
      <br>

      <label for="lblQuantidade">Quantidade:</label>
      <input type="text" name="estoque" class="form-control">
      <br>

      <button type="submit">Cadastrar</button>
    </form>
  </div>

  <!-- Scripts do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
