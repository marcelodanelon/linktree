<?php
    include "verifica-login.php";
    include "header.php";
?>
    <div class="col col-xl-10 pb-5">
        <div class="card">
            <div class="card-body p-5">
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
                        $foto = $perfil['foto'];
                        $fundo = $perfil['fundo'];
                    }
                    mysqli_close($conexao);
                ?>
                <div class="row align-items-center">
                    <div class="col-2">
                        <img class="circle" src="<?php echo "upload/img/".$foto; ?>" width=100px height=auto>                        
                    </div>
                    <div class="col-6">
                        <h3>Alterar Perfil</h3>
                    </div>
                </div>
                <form action="perfil-salvar-alteracao.php" method="post" enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-6">
                            <input type="hidden" value="<?php echo $id ?>" name="id" class="form-control">
                            Nome
                            <input type="text" value="<?php echo $nome ?>" name="nome" class="form-control">
                        </div>     
                        <div class="col-6">
                            Foto
                            <input value="<?php $foto ?>" type="file" name="arquivo" class="form-control">
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
                    <div class="row mt-3">
                        <p>Fundos</p>
                    </div>                    
                    <div class="row">                        
                        <div class="form-check col-3">
                            <input name="fundo" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="fundos/fundo1.png" <?php if($fundo=="fundos/fundo1.png"){echo "checked";} ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                <img src="fundos/fundo1.png" alt="fundo1.png" width=150px height=100px>
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input name="fundo" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="fundos/fundo2.png" <?php if($fundo=="fundos/fundo2.png"){echo "checked";} ?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                <img src="fundos/fundo2.png" alt="fundo2.png" width=150px height=100px>
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input name="fundo" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="fundos/fundo3.png" <?php if($fundo=="fundos/fundo3.png"){echo "checked";} ?>>
                            <label class="form-check-label" for="flexRadioDefault3">
                                <img src="fundos/fundo3.png" alt="fundo3.png" width=150px height=100px>
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input name="fundo" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="fundos/fundo4.png" <?php if($fundo=="fundos/fundo4.png"){echo "checked";} ?>>
                            <label class="form-check-label" for="flexRadioDefault4">
                                <img src="fundos/fundo4.png" alt="fundo4.png" width=150px height=100px>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Gravar</button>
                    <a href="perfil-painel.php" class="btn btn-primary mt-3">Voltar</a>
                </form>
<?php
    include "footer.php";
?>