<?php
    $email = $_POST['usuario'];
    $senha = $_POST['senha'];

    include "conexao.php";

    $sql = "select * from t_perfis where email='$email' and senha='$senha'";

    $result = mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    if(mysqli_num_rows($result)> 0){
        while($perfil = mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION["usuario"]=$perfil['email'];
            $_SESSION["senha"]=$perfil['senha'];
        }
        header("location: perfil-painel.php");
    }else{
        unset ($_SESSION['usuario']);
        unset ($_SESSION['senha']);
        header("location: login.php?msg=usuarionaolocalizado");
    }
?>