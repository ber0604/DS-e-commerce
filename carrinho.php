<!DOCTYPE html>
<html lang="en">

<head>
  <title>Finalizar Carrinho</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/stylehome.css">
</head>

<body>
  <header class="container-fluid p-3 bg-black text-danger">
    <div class="header conatiner">
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
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Buscar..." aria-label="Search">
          </form>
        </div>

        <div class="login">
          <a href="login.php" class="col-sm nav-link px-2 text-danger ">Login</a>
        </div>
        <div class="carrinho">
          <a href="carrinho.php"><img src="imagens/logo.jpg" class="carrinho"></a>
        </div>

      </div>
      <div class="membro">
        <a href="membro.php" class=" col-sm nav-link px-2 text-danger ">SEJA MEMBRO</a>
      </div>
  </header>

  <footer class="my-5 pt-5 text-muted text-center text-small bg-black">
    <p class="mb-1">&copy; 2022 FilmesBR</p>

  </footer>

</body>

</html>