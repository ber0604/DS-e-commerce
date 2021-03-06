<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="css/estilo.css">
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

        <div class="cart-btn">
          <i id="cart" class="fas fa-shopping-cart"></i>
          <span class="cart-quantity">0</span>
        </div>


      </div>
      <div class="membro">
        <a href="membro.php" class=" col-sm nav-link px-2 text-danger ">SEJA MEMBRO</a>
      </div>
  </header>
  <div class="cart-modal-overlay">
    <div class="cart-modal">
      <i id="close-btn" class="fas fa-times"></i>
      <h1 class="cart-is-empty">Cart is empty</h1>

      <div class="product-rows">
      </div>
      <div class="total">
        <h1 class="cart-total">TOTAL</h1>
        <span class="total-price">R$ 00,00</span>
        <button class="purchase-btn">Finalizar Compra</button>
      </div>
    </div>
  </div>
  <!--   end of cart modal -->

  <!--  products  -->
  <div class="items-container">
    <div class="card-1 card" id="filmes">
      <img class="product-image " src="https://br.web.img2.acsta.net/medias/nmedia/18/91/54/04/20150812.jpg" alt="">
      <button class="add-to-cart">Adicionar ao carrinho</button>
      <span class="product-price text-danger">R$ 20,00</span>
    </div>
    <div class="card-2 card" id="filmes">
      <img class="product-image" src="https://br.web.img2.acsta.net/pictures/15/10/14/14/58/220036.jpg" alt="">
      <button class="add-to-cart">Adicionar ao carrinho</button>
      <span class="product-price text-danger">R$ 20,00</span>
    </div>
    <div class="card-3 card" id="filmes">
      <img class="product-image" src="https://i.pinimg.com/originals/7b/7e/4b/7b7e4bd243e8a0284aa4b8e52f761cef.jpg" alt="">
      <button class="add-to-cart">Adicionar ao carrinho</button>
      <span class="product-price text-danger">R$ 20,00</span>
    </div>

  </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small bg-black">
    <p class="mb-1">&copy; 2022 FilmesBR</p>

  </footer>
  <!--  end of products  -->
  <script src="js/script.js"></script>


</body>
<?php
// session_start();
// if(!isset($_SESSION["username"])){
// header("Location: home.php");
// exit(); }
?>

</html>