<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/login2.css">
</head>

<body>

    <div class="col-sm-5 container pt-5">
        <img src="https://png.pngtree.com/element_our/png_detail/20181227/movie-icon-which-is-designed-for-all-application-purpose-new-png_287896.jpg" class="mx-auto d-block ">

        <form action="index.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" name="username" class="form-control" id="email" placeholder="Entre com seu email" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Inválido.</div>
            </div>
            <div class="mb-3">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Entre com sua senha" name="password" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Inválido.</div>
            </div>
            <div class="mb-3">
                <a href="cadastro.php" style="color: #dc3545" target="_blank">Não possuo cadastro</a>
            </div>

            <div class="mb-3">
                <input name="submit" type="submit" value="Login" />
            </div>

        </form>
    </div>


    <?php
    require('login/db.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect user to index.php
            header("Location: home.php");
        } else {
            echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    } else {
    ?>
    <?php } ?>
</body>

</html>

</html>