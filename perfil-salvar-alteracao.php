<?php
    include "verifica-login.php";
    include "conexao.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];
    $descricao = $_POST['descricao'];
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $facebook = $_POST['facebook'];
    $youtube = $_POST['youtube'];
    $senha = $_POST['senha'];

    $sql = "update t_perfis set nome='$nome', email='$email', profissao='$profissao', descricao='$descricao', instagram='$instagram', linkedin='$linkedin',facebook='$facebook',youtube='$youtube',senha='$senha' where id=$id";

    mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    header("location: perfil-painel.php");
?>