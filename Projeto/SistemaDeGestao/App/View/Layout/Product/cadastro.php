<section class="container justify-content-center d-grid ">

    <?php
    $userDoRegister = isset($this->view_var['msg']) ? $this->view_var['msg'] : false;

    if(isset($this->view_var['error'])){ ?>
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

                    <form action="<?= 'http://' . APP_HOST . '/product/post' ?>" method="POST" id="form_register_user" enctype="multipart/form-data">
                        <div class="form-group mt-3">
                            <label for="name" class="mb-2">Nome</label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="Ex: Pedro" required onblur="verifyName(this)">
                        </div>

                        <div class="form-group mt-3">
                            <label for="description" class="mb-2">Descrição</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Ex: nome@gmail.com" > </textarea>
                        </div>

                        <div class="form-group mt-3">
                            <label for="price" class="mb-2">Preço</label>
                            <input type="text" class="form-control phone-mask" id="price" name="price" placeholder="Ex: (ddd) 99999-9999" onblur="verifyPhone(this)" required>
                            <!-- Verificação do telefone -->
                        </div>

                        <div class="form-group mt-3">
                            <label for="quantity" class="mb-2">Quantidade</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" required onblur="verifyPassword(this)" placeholder="*******">
                        </div>

                        <div class="form-group mt-3">
                            <label for="category" class="mb-2">Categoria</label>
                            <select id="category" name="category" required>
                            <?php 
                                foreach($this->view_var['categorys'] as $category){ ?>
                                    <option value="<?=  $category->getId() ?>"> <?= $category->getName() ?> </option>

                                <?php }
                            ?>    


                            </select>

                        </div>
                        <div class="form-group mt-3">
                            <label for="image" class="mb-2">Categoria</label>
                            <input type="file" name="image" value="" />



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
            <h1 class="col-md-12"> <?= $this->view_var['msg'] ?> </h1>
        </div>
    <?php

    }
    ?>

</section>