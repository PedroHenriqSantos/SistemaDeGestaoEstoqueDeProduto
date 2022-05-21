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
                    </div>
                </a>
                <input type="file" class="inputFile" name="image" value="" />
            </div>
            <div class="row mt-4  ">
                <div class="col-3">
                    <input type="text" name="name" class="inputAdd" placeholder="nome">
                </div>
                <div class="col-3">
                    <input type="description" name="description" class="inputAdd" placeholder="descrição">
                </div>
                <div class="col-3">
                    <input type="text" name="price" class="inputAdd" placeholder="preço">
                </div>
                <div class="col-3">
                    <input type="number" name="quantity" class="inputAdd" placeholder="Quantidade">
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <select class="selectAdd" name="category">
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
        </form>
    </div>
</div>

<style>
    form {
        width: 100%;
    }

    .formAdd {
        margin-top: 2rem;
    }

    .addImageButton {
        background-color: #CC7200;
        color: white;
        border: none;
        width: 200px;
        height: 150px;
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