<?php
    include "verifica-login.php";
    include "conexao.php";

    $id = $_POST['id'];
    $nomeDoArquivo = $_FILES["arquivo"]["name"];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];
    $descricao = $_POST['descricao'];
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $facebook = $_POST['facebook'];
    $youtube = $_POST['youtube'];
    $senha = $_POST['senha'];
    $fundo = $_POST['fundo'];

    if($nomeDoArquivo==''){
        $sql = "update t_perfis set nome='$nome', email='$email', profissao='$profissao', descricao='$descricao', instagram='$instagram', linkedin='$linkedin',facebook='$facebook',youtube='$youtube',senha='$senha', fundo='$fundo' where id=$id";
    }else{
        ## criar nome e local imagem
        $pasta = 'upload/img/';
        $partes = explode(".",$nomeDoArquivo);
        $nomeNovo =  round(microtime(true)) . ".". end($partes);
        ## mover imagem para esse local
        move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta . $nomeNovo);

        $sql = "update t_perfis set nome='$nome', email='$email', profissao='$profissao', descricao='$descricao', instagram='$instagram', linkedin='$linkedin',facebook='$facebook',youtube='$youtube',senha='$senha', foto='$nomeNovo', fundo='$fundo' where id=$id";
    }
    mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    header("location: perfil-painel.php");
?>