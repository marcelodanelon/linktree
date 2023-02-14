<?php
    include "verifica-login.php";
    include "header.php";
?>
<div class="col col-xl-10">
    <div class="card">
        <div class="card-body p-5">
            <h1>Conseguiu acessar!</h1>
            <a href="perfil-novo.php">Adicionar novo Perfil</a>
            <br>
            <a href="login.php?msg=logout">Logout!</a>
            <?php include "conexao.php";
                $sql = "select * from t_perfis";
                $result = mysqli_query($conexao,$sql);
                while($perfil = mysqli_fetch_assoc($result)){
                    $nome = $perfil['nome'];
                    $profissao = $perfil['profissao'];
                }
                ?>
                <ul>
                    <li><?php echo $nome ?></li>
                    <li><?php echo $profissao ?></li>
                </ul>
<?php
    include "footer.php";
?>