<?php
    include "conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];
    $descricao = $_POST['descricao'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $youtube = $_POST['youtube'];
    $senha = $_POST['senha'];
    
    $sql = "insert into t_perfis(nome,email,profissao,descricao,instagram,facebook,linkedin,youtube,senha) values('$nome','$email','$profissao','$descricao','$instagram','$facebook','$linkedin','$youtube','$senha')";

    mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    header("location:painel.php");
?>