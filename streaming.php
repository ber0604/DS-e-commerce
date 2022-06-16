<!DOCTYPE html>
<html lang="en">

<head>
    <title>Streaming</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/stylehome.css">
    <script>
        $(function() {
            var $refreshButton = $('#refresh');
            var $results = $('#css_result');

            function refresh() {
                var css = $('style.cp-pen-styles').text();
                $results.html(css);
            }

            refresh();
            $refreshButton.click(refresh);

            // Select all the contents when clicked
            $results.click(function() {
                $(this).select();
            });
        });
    </script>
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
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control form-control-dark" placeholder="Buscar..." aria-label="Search">
                    </form>
                </div>

                <div class="login">
                    <a href="login.php" class="col-sm nav-link px-2 text-danger ">Login</a>
                </div>
                <div class="carrinho">
                    <a href="carrinho.php"><img src="../e-commerce/imagens/logo.jpg" class="carrinho"></a>
                </div>

            </div>
            <div class="membro">
                <a href="membro.php" class=" col-sm nav-link px-2 text-danger ">SEJA MEMBRO</a>
            </div>
    </header>

    <div class="container text-danger">
        <h1>Seus Filmes Disponíveis</h1>
    </div>


    <div id="instructions">

        <video id="my_video_1" class="video-js vjs-default-skin" width="640px" height="267px" controls preload="none" poster='http://video-js.zencoder.com/oceans-clip.jpg' data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
            <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
            <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
        </video>

    </div>

    <style>
        #instructions {
            max-width: 640px;
            text-align: left;
            margin: 30px auto;
        }

        #instructions textarea {
            width: 100%;
            height: 100px;
        }

        /* Show the controls (hidden at the start by default) */
        .video-js .vjs-control-bar {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        /* Make the demo a little prettier */
        body {
            margin-top: 20px;
        }

        a,
        a:hover,
        a:visited {
            color: #76DAFF;
        }
    </style>


    <script src="https://vjs.zencdn.net/7.19.2/video.min.js"></script>
    <footer class="my-5 pt-5 text-muted text-center text-small bg-black">
    <p class="mb-1">&copy; 2022 FilmesBR</p>

  </footer>
</body>

</html>