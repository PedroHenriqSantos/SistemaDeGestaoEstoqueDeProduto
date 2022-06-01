<div class="container">
    <div class="row">
        <h1 class="titleList">Cadastro de Produto</h1>
    </div>
    <div class="row formAdd">
        <form action="<?= 'http://' . APP_HOST . '/product/post' ?>" method="post" enctype="multipart/form-data">
            <div class="row text-center justify-content-center">
                <a href="#" class="addImageButton justify-content-center">
                    <div class="col-12 mt-3">
                        <i class="fas fa-plus iconPlus"></i>
                    </div>
                    <div class="col-12 mt-3">
                        Adicione a imagem do produto
                        <p class="currentImageText"> Atual:  </p>

                    </div>
                </a>
                <input type="file" class="inputFile" name="image_product" value="" />
            </div>
            <div class="row mt-4  ">
                <div class="col-lg-4 col-6">
                    <input type="text" name="name_product" class="inputAdd" placeholder="nome">
                </div>
                <div class="col-lg-4 col-6">
                    <input type="description" name="description_product" class="inputAdd" placeholder="descrição">
                </div>
                <div class="col-lg-4 col-6">
                    <input type="number" name="price_product" class="inputAdd inputPositive" placeholder="preço">
                </div>
                <div class="col-lg-4 col-6">
                    <input type="number" name="quantity_product" class="inputAdd inputPositive" value="1" placeholder="Quantidade">
                </div>
                <div class="col-lg-4 col-12">
                    <select class="selectAdd" name="category_product">
                        <?php
                        foreach ($this->view_var['categorys'] as $category) { ?>
                            <option value="<?= $category->getId() ?>"> <?= $category->getName() ?> </option>
                        <?php }
                        ?>
                    </select>
                </div>
            </div>
            <section class="enviar">
                <button class="btn buttonAdd" id="bt_save" name="bt_save">Cadastrar Produto</button>
            </section>
            <?php
            if (isset($this->view_var['error'])) {
                if (empty($this->view_var['error'])) { ?>
                    <div class="row mt-4">
                        <div class="alert alert-success text-center" role="alert">
                            Produto cadastrado com sucesso
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row mt-4">
                        <div class="alert alert-danger text-center" role="alert">
                            <?= $this->view_var['error'] ?>
                        </div>
                    </div>
            <?php  }
            }
            ?>

        </form>
    </div>
</div>

<style>
    form {
        width: 100%;
    }
    .currentImageText{
        font-size: 0.8rem;
        font-weight: bold;
        margin-top: 0.5rem;

    }
    .formAdd {
        margin-top: 2rem;
    }

    .addImageButton {
        background-color: #CC7200;
        color: white;
        border: none;
        width: 200px;
        height: auto;
        border-radius: 10px;
        text-align: center;
        cursor: pointer;
        font-size: 1.2rem;
        text-decoration: none;
    }

    .addImageButton:hover {
        background-color: #c78b2b;
        color: white;

    }

    .inputFile {
        display: none;
    }

    .inputAdd {

        padding: 1rem;
        outline: none;
        border-radius: 15px;
        outline: none;
        border: none;
        background-color: #CC7200;
        color: white;
        max-width: 100%;
        margin-bottom: 1rem;

    }

    .selectAdd {
        padding: 1rem;
        padding-right: 8rem !important;
        outline: none;
        border-radius: 15px;
        outline: none;
        border: none;
        background-color: #CC7200;
        color: white;
        max-width: 100%;

    }

    .inputAdd::focus {
        color: white;
    }



    input::placeholder {
        color: white
    }

    .buttonAdd:hover {
        background-color: #c78b2b;
    }

    .enviar {
        margin-top: 2rem;
        text-align: center;
    }

    .buttonAdd {
        padding: 1rem 2rem 1rem 2rem;
        background-color: #DD6B20;
        color: white;
    }
</style>