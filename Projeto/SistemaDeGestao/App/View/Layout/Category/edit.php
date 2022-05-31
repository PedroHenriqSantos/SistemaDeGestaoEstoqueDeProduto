<?php
$category = $this->view_var["category"];
?>
<div class="container">
    <div class="row">
        <h1 class="titleList">Editar Categoria</h1>
    </div>
    <div class="row formAdd">
        <form action="<?= 'http://' . APP_HOST . '/category/update' ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="id_category" class="hidden" placeholder="nome" value="<?= $category->getId() ?>">
            <div class="row mt-4  ">
                <div class="col-3">
                    <input type="text" name="name_category" class="inputAdd" value="<?= $category->getName() ?>" placeholder="nome" />
                </div>

                <section class="enviar">
                    <button class="btn buttonAdd" id="bt_save" name="bt_save">Atualizar Categoria</button>
                </section>
                <?php
                if (isset($this->view_var['error'])) {
                    if (empty($this->view_var['error'])) { ?>
                        <div class="row mt-4">
                            <div class="alert alert-success text-center" role="alert">
                                Categoria atualizada com sucesso
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
            </div>
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