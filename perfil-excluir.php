<?php
    include 'verifica-login.php';
    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "delete from t_perfis where id=$id";

    mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    header('location:perfil-painel.php')
?>