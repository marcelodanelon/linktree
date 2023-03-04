<?php
    include "verifica-login.php";
    include "header.php";
?>
    <div class="col col-xl-10 pb-5">
        <div class="card">
            <div class="card-body p-5">
                <h3>Perfil Novo</h3>
                <form action="perfil-salvar.php" method="post" enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-6">
                            Nome
                            <input required type="text" name="nome" class="form-control">
                        </div> 
                        <div class="col-6">
                            Foto
                            <input type="file" name="arquivo" class="form-control">
                        </div>                                           
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            Email
                            <input required type="email" name="email" class="form-control">
                        </div>       
                        <div class="col-6">
                            Profissão
                            <input required type="text" name="profissao" class="form-control">
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
                    <div class="row mt-3">
                        <p>Fundos</p>
                    </div>                    
                    <div class="row">                        
                        <div class="form-check col-3">
                            <input name="fundo" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="fundos/fundo1.png" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                <img src="fundos/fundo1.png" alt="fundo1.png" width=150px height=100px>
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input name="fundo" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="fundos/fundo2.png">
                            <label class="form-check-label" for="flexRadioDefault2">
                                <img src="fundos/fundo2.png" alt="fundo2.png" width=150px height=100px>
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input name="fundo" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="fundos/fundo3.png">
                            <label class="form-check-label" for="flexRadioDefault3">
                                <img src="fundos/fundo3.png" alt="fundo3.png" width=150px height=100px>
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input name="fundo" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="fundos/fundo4.png">
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