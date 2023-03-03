<?php
    include "verifica-login.php";
    include "conexao.php";

    $nomeDoArquivo = $_FILES["arquivo"]["name"];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];
    $descricao = $_POST['descricao'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $youtube = $_POST['youtube'];
    $senha = $_POST['senha'];
    $foto = $_FILES["arquivo"];

    ## criar nome e local imagem
    $pasta = 'upload/img/';
    $partes = explode(".",$nomeDoArquivo);
    $nomeNovo =  round(microtime(true)) . ".". end($partes);
    ## mover imagem para esse local
    move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta . $nomeNovo);
    
    $sql = "insert into t_perfis(nome,email,profissao,descricao,instagram,facebook,linkedin,youtube,senha) values('$nome','$email','$profissao','$descricao','$instagram','$facebook','$linkedin','$youtube','$senha')";

    mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    header("location:perfil-painel.php");
?>