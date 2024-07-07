<nav class="navbar">
<?php
    <a href="./feed.php"><button class="nav-button btn-secondary">Feed</button></a>
    <a href="./perfil.php?usr=1"><button class="nav-button btn-secondary">Meu Perfil</button></a>
    <a href="./logout.php"><button class="nav-button btn-red">Logout</button></a>
    <a href="./login.php"><button class="nav-button btn-success">Login</button></a>
    <a href="./novoUsuario.php"><button class="nav-button btn-dark">Criar Usuario</button></a>


    function criarUsuario($usuario, $nome, $senha){
        global $banco;

        // $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, 'pedroca', 'pedro', '122')";

        $senha = password_hash($senha, PASSWORD_DEFAULT);
        // createOnDB("usuarios(cod, usuario, nome, senha)", "(NULL, '$usuario', '$nome', '$senha')");

        $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";
        
        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);
    }
    
    criarUsuario("zezinho", "arthur", "senha123");
    criarUsuario("joaozinho", "joao", "AbC1");

    require_once "header.php";

    $usu = $_POST['usuario'] ?? null;
    $nom = $_POST['nome'] ?? "";
    $sen = $_POST['senha'] ?? "";

    if(is_null($usu) || $sen == ""){
        require_once "form-criar-usuario.php";
    }else{
        require_once "form-criar-usuario.php"; // para testes
        echo "<h3>Usuario $usu atualizado..</h3>";
        // echo "~ [Usuario: $usu - Nome: $nom - Senha: $sen] ~ <br>";
        atualizarUsuario($usu, $nom, $sen, false);
        
    }



?>
</pre>

</nav>