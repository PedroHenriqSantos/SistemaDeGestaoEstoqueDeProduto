<?php
$product = $this->view_var["product"];
$comments = $this->view_var["comments"];
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="titlePortfolio"><?= $product->getName() ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="<?= 'http://' . APP_HOST . '/App/View/Images/' . $product->getImage() ?>" alt="imagem" id="imagem" class="imageProduct">
            </div>
            <div class="col-6">
                <div class="col-12">
                    <h4 class="descriptionProduct"><?= $product->getDescription() ?></h4>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <a href="<?= 'http://' . APP_HOST . '/portfolio/saveCart/' . $product->getId() ?>" class="btn buttonBuy">Comprar</a>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-4 inforProduct">
                <h3>Preço: R$ <?= $product->getPrice() ?></h3>
            </div>
            <div class="col-8"></div>
        </div>
        <div class="row">
            <div class="col-4 inforProduct">
                <h3>Avaliação: </h3>
                <img src="<?= 'http://' . APP_HOST . '/App/View/Images/avaliacao.png' ?>" alt="avaliacao" id="avaliacao">
            </div>
            <div class="col-8"></div>
        </div>
        <div class="row">
            <div class="col-4 inforProduct">
                <h3>Restam: <?= $product->getQuantity() ?> Produtos</h3>
            </div>
            <div class="col-8"></div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="titlePortfolio">Comentarios</h3>
            </div>
        </div>
        <?php foreach ($comments as $comment) { ?>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-2">
                    <img src="<?= 'http://' . APP_HOST . '/App/View/Images/user.png' ?>" alt="foto" id="comenta1">
                </div>
                <div class="col-8">
                    <div class="comentInput"> <?= $comment->getComment() ?> </div>
                </div>
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-12">
                <h3 class="titlePortfolio">Escreva seu comentário aqui: </h3>
            </div>
        </div>
        <div class="row mb-5">
            <form class="row" action="<?= 'http://' . APP_HOST . '/comment/save' ?>" method="post">
                <input type="text" name="fk_id_product" value="<?= $product->getId() ?>" class="inputAdd hidden" placeholder="Produto">
                <div class="col-4">
                    <input type="text" name="comment_comment" class="inputAdd" placeholder="Comentário">
                </div>
                <div class="col-4">
                    <input type="text" name="name_comment" class="inputAdd" placeholder="Nome">
                </div>
                <div class="col-4">

                    <button class="btn buttonAdd" id="bt_save_comment" name="bt_save_comment">Cadastrar Comentário</button>
                </div>
                <div class="col-12">
                    <?php
                    if (isset($this->view_var['msgComment'])) {
                        if (empty($this->view_var['msgComment'])) { ?>
                            <div class="row mt-4">
                                <div class="alert alert-success text-center" role="alert">
                                    Comentário cadastrado com sucesso
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="row mt-4">
                                <div class="alert alert-danger text-center" role="alert">
                                    <?= $this->view_var['msgComment'] ?>
                                </div>
                            </div>
                    <?php  }
                    } ?>
                </div>
            </form>
        </div>

    </div>
</body>

<style>
    .hidden {
        display: none;
    }

    .imageProduct {
        width: 100%;
        height: auto;
    }

    .buttonAdd:hover {
        background-color: #c78b2b;
    }

    .buttonAdd {
        padding: 1rem 2rem 1rem 2rem;
        background-color: #DD6B20;
        color: white;
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

    .inputAdd::placeholder {
        color: white;
    }

    .inputAdd::focus {
        color: white;
    }

    .comentInput {
        color: white;
        padding: 2rem;
        background-color: #824700;
        border: none;
        border-radius: 0.5rem;
        width: 80%;
        margin-bottom: 1rem;

    }

    .buttonBuy {

        width: 10rem;
        padding: 0.5rem;
        border: #FFAB40;
        background: #DD6B20;
        border-radius: 6px;
        margin-top: 1.3rem;
        cursor: pointer;
        color: white;
    }

    .buttonBuy:hover {
        background: #FFAB40;
    }

    .inforProduct {
        margin-top: 1rem;
        color: #824700;
        font-size: 2rem;
        font-weight: bold;

    }

    .descriptionProduct {
        color: #824700;
        font-size: 2rem;
    }

    .titlePortfolio {
        color: #FFAB40;
        font-weight: 600;
        font-size: 2.5rem;
        margin-bottom: 2rem;

    }



    .buttonPlus {

        width: 10rem;
        padding: 0.5rem;
        border: #FFAB40;
        background: #DD6B20;
        border-radius: 6px;
        margin-top: 1.3rem;
        cursor: pointer;
    }

    .buttonPlus:hover {
        background: #FFAB40;
    }
</style>