<?php
    include "header.php";
?>
    <div class="col col-xl-10">
        <div class="card">
            <div class="card-body p-5">
                <h3>Perfil Novo</h3>
                <form action="perfil-salvar.php" method="post">
                    <div class="row mt-3">
                        <div class="col-6">
                            Nome
                            <input type="text" name="nome" class="form-control">
                        </div>                                            
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            Email
                            <input type="email" name="email" class="form-control">
                        </div>                                            
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            Profissão
                            <input type="text" name="profissao" class="form-control">
                        </div>                      
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            Descrição
                            <input type="text" name="descricao" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            Instagram
                            <input type="text" name="instagram" class="form-control">
                        </div>
                        <div class="col-6">
                            Facebook
                            <input type="text" name="facebook" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            Linkedin
                            <input type="text" name="linkedin" class="form-control">
                        </div>
                        <div class="col-6">
                            Youtube
                            <input type="text" name="youtube" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            Senha
                            <input type="password" name="senha" class="form-control">
                        </div>
                        <div class="col-6">
                            Confirmar senha
                            <input type="password" name="confirmaSenha" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Gravar</button>
                    <a href="painel.php" class="btn btn-primary mt-3">Voltar</a>
                </form>
<?php
    include "footer.php";
?>