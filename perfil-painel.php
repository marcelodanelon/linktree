<?php
    include "verifica-login.php";
    include "header.php";
?>
<div class="menu container-fluid">
    <?php include_once "menu.php"; ?>
</div>
<div class="col col-xl-10">
    <div class="card">
        <div class="card-body p-5">
            <h1>Painel Inicial</h1>
            <div class="row">
                <div class="col-6 d-flex justify-content-start">
                    <a href="perfil-novo.php">Adicionar novo Perfil</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="login.php?msg=logout">Logout!</a>
                </div>
            </div>
            <ul class="list-group mt-3">
            <?php include "conexao.php";
                $sql = "select * from t_perfis";
                $result = mysqli_query($conexao,$sql);
                while($perfil = mysqli_fetch_assoc($result)){
                    $nome = $perfil['nome'];
                    $profissao = $perfil['profissao']; 
                    $id = $perfil['id'];               
            ?>                    
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-4 pt-1">
                                    <?php echo $nome ?>
                                </div>
                                <div class="col-4 pt-1">
                                    <?php echo $profissao ?>
                                </div>
                                <div class="col-4 d-flex justify-content-end">      
                                    <a href='perfil-visualizar.php?id=<?php echo $id ?>' class="btn btn-primary me-1">Visualizar</a>                        
                                    <a href='perfil-alterar.php?id=<?php echo $id ?>' class="btn btn-primary me-1">Alterar</a>                              
                                    <a href='perfil-excluir.php?id=<?php echo $id ?>' class="btn btn-primary me-1">Excluir</a>                                     
                                </div>
                            </div>
                        </li>                    
                    <?php } ?>
                </ul>
<?php
    include "footer.php";
?>