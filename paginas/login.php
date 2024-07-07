<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Perfil</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght@20..48,400..700" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    <nav class="navbar">
        <a href="./feed.php"><button class="nav-button btn-secondary">Feed</button></a>
        <a href="./novoUsuario.php"><button class="nav-button btn-dark">New User</button></a>
    </nav>
    
    <main>
        <div style="width: 100%;">

            <div class="single-post-container" style="margin-top: 20px;">
                <h2>Fazer Login</h2>

                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Usuario:</label>
                    <input type="text" name="usuario" class="input-button">
                    
                    <br><br><label for="">Senha:</label>
                    <input type="text" name="senha" class="input-button">

                    <br><br><button type="submit" class="btn-blue">Comentar</button>
                </form>
            </div>
            <?php

session_start();


if(empty($_POST) or (empty(@$_POST["usuario"] or (empty(@$_POST["senha"]))))){
    print "<script>location.href='index.php'</script>";
}

include('config.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM USUARIOS"
WHERE usuario = '{$usuario}'
AND  senha = '{$senha}'";

$res = $conn->query($sql) or die($conn->error);

$row = $res0>fetch_object

       

    echo password_hash("senha123", PASSWORD_DEFAULT);

    // $2y$10$2Fp8gGFKPLzX0QkTII5ki.AzcwljwFUrxAHRtgpxzqMIzKJXw8Ka.

    // $2y$10$5JFbbaEJfJRGM57UHSEHp.a7K.SzmLTqYP.XuWJ8PNu1UK32yLe9i
    // $2y$10$pmWZmFhMdJutMfK8hqqUAOnzUxeUlChDTrEx8NYchuuuoGOe.Fd..
    // $2y$10$/vEnKnjfT9G/pKE6BA3rmeLX6c1cGg6hh6JRdJqeiaFQ4Z0mdxZC6

    $hash = '$2y$10$pmWZmFhMdJutMfK8hqqUAOnzUxeUlChDTrEx8NYchuuuoGOe.Fd.';

    if (password_verify('senha123', $hash)) {
        echo '<br>Password is valid!';
    } else {
        echo '<br>Invalid password.';
    }
    


        </div>
    </main>

</body>
</html>

?>
