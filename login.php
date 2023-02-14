<?php include "header.php" ?>
            <?php $msg = $_GET['msg'] ?? "";
                if($msg=='logout'){
                    session_start();
                    unset ($_SESSION['usuario']);
                    unset ($_SESSION['senha']);
                    session_destroy();
                } ?>
<div class="col col-xl-3">
        <div class="card">
            <div class="card-body p-5">
                <h3 class="text-center">Bem-Vindo!</h3>
                <form action="confirma-login.php" method="post">  
                    <div class="row align-items-center">                               
                        <div class="row">     
                            Usuário                                  
                            <input type="email" placeholder="usuário" name="usuario" class="form-control" required>                                        
                        </div> 
                        <div class="row mt-3">
                            Senha
                            <input type="password" placeholder="senha" name="senha" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
                    </div>   
                </form>
                <div class="text-center mt-2"><?php include "mensagens.php"; ?></div>
<?php include "footer.php" ?>