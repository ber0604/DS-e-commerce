<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/cadastro2.css">
</head>

<body>

  <header class="container-fluid p-3 bg-black text-danger">
    <div class="header">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="home.php" class=" col-sm nav-link px-2 text-danger ">Home</a></li>
          <li><a href="streaming.php" class="col-sm nav-link px-2 text-danger ">Streaming</a></li>
          <li><a href="conta.php" class="col-sm nav-link px-2 text-danger  ">Minha conta</a></li>
          <li>
            <label for="genero">Gênero:</label>
            <select id="generos" name="generos" onchange="location = this.value;">
              <option value=""></option>
              <option value="acao.php">Ação</option>
              <option value="infantil.php">Infantil</option>
              <option value="romance.php">Romance</option>

            </select>
          </li>
        </ul>

        <div class="busca">
          <form class="col-12 ">
            <input type="search" class="form-control form-control-dark" placeholder="Buscar..." aria-label="Search">
          </form>
        </div>

        <div class="login">
          <a href="login.php" class="col-sm nav-link px-2 text-danger ">Login</a>
        </div>

      </div>
      <div class="membro">
        <a href="membro.php" class=" col-sm nav-link px-2 text-danger ">SEJA MEMBRO</a>
      </div>
  </header>

  <div class="text-danger bg-black container ">
    <main>

      <div class="col-sm-12 container pt-5 justify-content-center">
        <h1 class="mb-3">Crie seu Cadastro</h1>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-12">
              <label for="name" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="firstName" placeholder="João da Silva" value="" required>
              <div class="invalid-feedback">
                Nome inteiro.
              </div>
            </div>

            <div class="col-12">
              <label for="cpf" class="form-label">CPF</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" placeholder="000.000.000-00" required>
                <div class="invalid-feedback">
                  000.000.000-00
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email </label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Adicione um e-mail válido.
              </div>
            </div>

            <div class="col-12">
              <label for="telefone" class="form-label">Telefone</label>
              <input type="text" class="form-control" id="address" placeholder="(00) 00000-0000" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Crie uma senha</label>
              <input type="password" class="form-control" id="senha" placeholder="********" required>
              <div class="invalid-feedback">
                Por favor, crie sua senha.
              </div>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Confirme sua senha</label>
              <input type="password" class="form-control" id="senha" placeholder="********" required>
              <div class="invalid-feedback">
                Por favor, confirme sua senha.
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-danger">Criar meu Cadastro</button>
            </div>
          </div>

      </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small bg-black">
    <p class="mb-1">&copy; 2022 FilmesBR</p>

  </footer>
</body>

</html>