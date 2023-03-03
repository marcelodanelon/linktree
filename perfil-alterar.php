<?php
    include "verifica-login.php";
    include "header.php";
?>
    <div class="col col-xl-10 pb-5">
        <div class="card">
            <div class="card-body p-5">
                <h3>Alterar Perfil</h3>
                <?php 
                    $id = $_GET['id'];
                    include "conexao.php";
                    $sql = "select * from t_perfis where id=$id";
                    $result = mysqli_query($conexao, $sql);

                    while($perfil = mysqli_fetch_assoc($result)){
                        $nome = $perfil['nome'];
                        $email = $perfil['email'];
                        $profissao = $perfil['profissao'];
                        $descricao = $perfil['descricao'];
                        $instagram = $perfil['instagram'];
                        $linkedin = $perfil['linkedin'];
                        $facebook = $perfil['facebook'];
                        $youtube = $perfil['youtube'];
                        $senha = $perfil['senha'];
                    }
                    mysqli_close($conexao);
                ?>
                <form action="perfil-salvar-alteracao.php" method="post">
                    <div class="row mt-3">
                        <div class="col-6">
                            <input type="hidden" value="<?php echo $id ?>" name="id" class="form-control">
                            Nome
                            <input type="text" value="<?php echo $nome ?>" name="nome" class="form-control">
                        </div>     
                        <div class="col-6">
                            Foto
                            <input type="file" name="arquivo" class="form-control">
                        </div>                                         
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            Email
                            <input type="email" value="<?php echo $email ?>" name="email" class="form-control">
                        </div>  
                        <div class="col-6">
                            Profissão
                            <input type="text" value="<?php echo $profissao ?>" name="profissao" class="form-control">
                        </div>                                            
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            Descrição
                            <input type="text" value="<?php echo $descricao ?>" name="descricao" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            Instagram
                            <input type="text" value="<?php echo $instagram ?>" name="instagram" class="form-control">
                        </div>
                        <div class="col-6">
                            Facebook
                            <input type="text" value="<?php echo $facebook ?>" name="facebook" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            Linkedin
                            <input type="text" value="<?php echo $linkedin ?>" name="linkedin" class="form-control">
                        </div>
                        <div class="col-6">
                            Youtube
                            <input type="text" value="<?php echo $youtube ?>" name="youtube" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            Senha
                            <input type="password" value="<?php echo $senha ?>" name="senha" class="form-control">
                        </div>
                        <div class="col-6">
                            Confirmar senha
                            <input type="password" value="<?php echo $senha ?>" name="confirmaSenha" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Gravar</button>
                    <a href="perfil-painel.php" class="btn btn-primary mt-3">Voltar</a>
                </form>
<?php
    include "footer.php";
?>