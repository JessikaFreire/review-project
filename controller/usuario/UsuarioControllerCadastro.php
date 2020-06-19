<?php
    require '../../model/UsuarioModel.php';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $picture = $_POST['picture'];

    $newUsuario = new Usuario();
    $newUsuario->setNome($firstName);
    $newUsuario->setSobrenome($lastName);
    $newUsuario->setEmail($email);
    $newUsuario->setSenha($password);
    $newUsuario->setFoto($password);

    if(Usuario::cadastrar($newUsuario))
        echo "<script> alert('Cadastro feito com sucesso!') </script>
        <meta http-equiv='refresh' content=0.1;url='../../index.html'>";
     else
        echo "<script> alert('Não foi possível fazer o Cadastro!') </script>
        <meta http-equiv='refresh' content=0.1;url='../../register.html'>";
?>