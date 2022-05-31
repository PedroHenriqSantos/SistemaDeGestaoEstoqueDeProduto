<?php
$product = $this->view_var["product"];
$hiddenQuantity = '';
if(isset($this->view_var["userLogin"])){
    $user = $this->view_var["userLogin"];
    if( $user->getFunction() == "NORMAL"){
        $hiddenQuantity = 'hidden';
    }
}
?>
<div class="container">
    <div class="row">
        <h1 class="titleList">Editar Produto</h1>
    </div>
    <div class="row formAdd">
        <form action="<?= 'http://' . APP_HOST . '/product/update' ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="id_product" class="hidden" placeholder="nome" value="<?= $product->getId() ?>">
            <div class="row text-center justify-content-center">
                <a href="#" class="addImageButton justify-content-center">
                    <div class="col-12 mt-3">
                        <i class="fas fa-plus iconPlus"></i>
                    </div>
                    <div class="col-12 mt-3">
                        Adicione a imagem do produto
                        <p class="currentImageText"> Atual: <?=  $product->getImage()  ?> </p>
                    </div>
                </a>
                <input type="file" class="inputFile" name="image_product" value="<?= $product->getImage() ?>" />
            </div>
            <div class="row mt-4  ">
                <div class="col-lg-3 col-sm-4  col-6">
                    <input type="text" name="name_product" class="inputAdd" placeholder="nome" value="<?= $product->getName() ?>">
                </div>
                <div class="col-lg-3 col-sm-4  col-6">
                    <input type="description" name="description_product" class="inputAdd" placeholder="descrição" value="<?= $product->getDescription() ?>">
                </div>
                <div class="col-lg-3 col-sm-4  col-6">
                    <input type="text" name="price_product" class="inputAdd" placeholder="preço" value="<?= $product->getPrice() ?>">
                </div>
                <div class="col-lg-3 col-sm-4  col-6">
                    <input type="number" name="quantity_product" class="inputAdd <?= $hiddenQuantity ?>" placeholder="Quantidade" value="<?= $product->getQuantity() ?>">
                </div>
                <div class="col-lg-3 col-sm-4  col-6">
                    <select class="selectAdd" name="category_product" value="<?= $product->getIdCategory() ?>">
                        <?php
                        foreach ($this->view_var['categorys'] as $category) { ?>
                            <option value="<?= $category->getId() ?>"> <?= $category->getName() ?> </option>
                        <?php }
                        ?>
                    </select>
                </div>

            </div>

            <section class="enviar">
                <button class="btn buttonAdd" id="bt_save" name="bt_save">Atualizar Produto</button>
            </section>
            <?php
            if (isset($this->view_var['error'])) {
                if (empty($this->view_var['error'])) { ?>
                    <div class="row mt-4">
                        <div class="alert alert-success text-center" role="alert">
                            Produto atualizado com sucesso
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

    .hidden {
        display: none;
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
        height: 180px;
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