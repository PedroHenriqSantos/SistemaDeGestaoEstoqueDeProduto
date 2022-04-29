<section class="container justify-content-center d-grid ">

    <?php
    $userDoRegister = isset($this->view_var['msg']) ? $this->view_var['msg'] : false;
    if (isset($this->view_var['error'])) { ?>
        <div class="alert-success d-grid m-5 p-5 justify-content-center text-center ">
            <h1 class="col-md-12"> <?= $this->view_var['error'] ?> </h1>
        </div>
    <?php } else if (!$userDoRegister) { /* Caso o usuario tenha se cadastrado o formulário irá sumir e aparecerá a tela de cadastro feito com sucesso */
    ?>
        <div class="container m-5 p-5 bg-dark">
            <div class="row  text-light">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-center ">
                    <h3>Cadastrar Usuario </h3>

                    <form action="<?= 'http://' . APP_HOST . '/user/post' ?>" method="POST" id="form_register_user">
                        <div class="form-group mt-3">
                            <label for="name" class="mb-2">Nome</label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="Ex: Pedro"  onblur="verifyName(this)">
                        </div>

                        <div class="form-group mt-3">
                            <label for="email" class="mb-2">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ex: nome@gmail.com" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="phone" class="mb-2">Telefone</label>
                            <input type="tel" class="form-control phone-mask" id="phone" name="phone" placeholder="Ex: (ddd) 99999-9999" onblur="verifyPhone(this)" required>
                            <!-- Verificação do telefone -->
                        </div>

                        <div class="form-group mt-3">
                            <label for="password" class="mb-2">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" required onblur="verifyPassword(this)" placeholder="*******">
                        </div>

                        <div class="form-group mt-3">
                            <label for="function" class="mb-2">Função</label>
                            <select id="function" name="function" required>
                                <option> Master </option>
                                <option> Funcionário </option>

                            </select>

                        </div>
                        <div class="form-group mt-4 justify-content-center d-flex">
                            <button type="submit" class="btn btn-success px-4 " id="bt_save" name="bt_save">Salvar</button>
                        </div>
                    </form>
                    <!-- Fim do formulário -->

                </div>
                <div class=" col-md-1"></div>
            </div>
        </div>

    <?php

    } else {
    ?>
        <!-- Cadastro feito com sucesso -->
        <div class="alert-success d-grid m-5 p-5 justify-content-center text-center ">
            <h1 class="col-md-12"> Usuário cadastrado com sucesso </h1>
            <p class="mt-3"> Para poder atualizar os dados clique no link:
                <a class="nav-link link-dark" href="<?= 'http://' . APP_HOST . '/user/edit' ?> ">Atualizar</a>
            </p>
        </div>
    <?php

    }
    ?>

</section>