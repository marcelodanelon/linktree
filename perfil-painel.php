<?php
    include "verifica-login.php";
    include "header.php";
?>
<div class="col col-xl-20">
    <div class="card">
        <div class="card-body p-5">
            <div class="row align-items-center">
                <div class="col-1">
                    <?php $foto=$_SESSION["foto"] ?? ''; ?>
                    <img class="circlePainel" src="<?php echo "upload/img/".$foto; ?>" width=100px height=auto>
                </div>
                <div class="col-3">
                    <h1>Painel Inicial</h1>
                </div>         
            </div>            
            <div class="row">
                <div class="d-flex justify-content-end">
                    <div class="col-2 ps-5">
                        <a href="perfil-novo.php">Adicionar novo Perfil</a>
                    </div>
                    <div class="col-1 ps-3">
                        <a href="login.php?msg=logout">Logout!</a>
                    </div>
                </div>
            </div>
            <ul class="list-group mt-3">
            <?php include "conexao.php";
                $sql = "select * from t_perfis";
                $result = mysqli_query($conexao,$sql);
                while($perfil = mysqli_fetch_assoc($result)){
                    $id = $perfil['id'];
                    $nome = $perfil['nome'];
                    $profissao = $perfil['profissao']; 
                    $email = $perfil['email'];            
            ?>                    
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-1 pt-1">
                                    <?php echo $id ?>                                    
                                </div>
                                <div class="col-2 pt-1">
                                    <?php echo $nome ?>
                                </div>
                                <div class="col-3 pt-1">
                                    <?php echo $profissao ?>
                                </div>
                                <div class="col-3 pt-1">
                                    <?php echo $email ?>
                                </div>
                                <div class="col-3 d-flex justify-content-end">      
                                    <a href='perfil-visualizar.php?id=<?php echo $id ?>' class="btn btn-primary me-1">Visualizar</a>                        
                                    <a href='perfil-alterar.php?id=<?php echo $id ?>' class="btn btn-primary me-1">Alterar</a>                              
                                    <a href='perfil-excluir.php?id=<?php echo $id ?>' class="btn btn-primary me-1">Excluir</a>                                     
                                </div>
                            </div>
                        </li>                    
                    <?php } ?>
                </ul>
                <a href="relatorio.php" class="btn btn-success mt-3">Relatório</a>
<?php
    include "footer.php";
?>