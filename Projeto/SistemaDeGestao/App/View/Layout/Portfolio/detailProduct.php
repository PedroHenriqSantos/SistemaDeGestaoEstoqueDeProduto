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
            <div class="col-lg-6 col-12">
                <img src="<?= 'http://' . APP_HOST . '/App/Uploads/' . $product->getImage() ?>" alt="imagem" id="imagem" class="imageProduct">
            </div>
            <div class="col-lg-6 col-12">
                <div class="col-12">
                    <h4 class="descriptionProduct"><?= $product->getDescription() ?></h4>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <a href="<?= 'http://' . APP_HOST . '/portfolio/saveCart/' . $product->getId() ?>" class="btn buttonBuy">Comprar</a>
                </div>
                <?php
                if (isset($this->view_var['successBuy'])) { ?>
                    <div class="row mt-4">
                        <div class="alert alert-success text-center" role="alert">
                            <?= $this->view_var['successBuy'] ?>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4 col-12 inforProduct">
                <h3>Preço: R$ <?= $product->getPrice() ?></h3>
            </div>
            <div class="col-lg-8 col-12"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-8 inforProduct">
                <h3>Avaliação: </h3>
                <form class="avaliacoes d-inline-block" action="<?= 'http://' . APP_HOST . '/avaliation/post' ?>" method="post">
                    <input type="text" class="hidden" id="fk_id_product" name="fk_id_product" value="<?= $product->getId() ?>" />
                    <input type="text" class="hidden" id="rate_avaliation" name="rate_avaliation" />
                    <label for="estrela_1" class="labelStar"> <i class="fas fa-star"></i></label>
                    <input type="radio" class="hidden star" id="estrela_1" name="estrela" value="" />
                    <label for="estrela_2" class="labelStar"> <i class="fas fa-star"></i> </label>
                    <input type="radio" class="hidden star" id="estrela_2" name="estrela" value="" />
                    <label for="estrela_3" class="labelStar"> <i class="fas fa-star"></i> </label>
                    <input type="radio" class="hidden star" id="estrela_3" name="estrela" value="" />
                    <label for="estrela_4" class="labelStar"> <i class="fas fa-star"></i> </label>
                    <input type="radio" class="hidden star" id="estrela_4" name="estrela" value="" />
                    <label for="estrela_5" class="labelStar"> <i class="fas fa-star"></i> </label>
                    <input type="radio" class="hidden star" id="estrela_5" name="estrela" value="" />
                    <button class="btn buttonAvaliation" id="bt_save_avaliation" name="bt_save_avaliation">Enviar avaliação</button>

                </form>

            </div>
            <div class="col-lg-8 col-4"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 inforProduct">
                <h3>Restam: <?= $product->getQuantity() ?> Produtos</h3>
            </div>
            <div class="col-lg-8 "></div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="titlePortfolio">Comentarios</h3>
            </div>
        </div>
        <?php foreach ($comments as $comment) { ?>
            <div class="row">
                <div class="col-lg-2 col-1"></div>
                <div class="col-lg-2 col-3">
                    <img src="<?= 'http://' . APP_HOST . '/App/View/Images/user.png' ?>" alt="foto" id="comenta1">
                </div>
                <div class="col-lg-8 col-8">
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
                <div class="col-lg-4 col-6">
                    <input type="text" name="comment_comment" class="inputAdd" placeholder="Comentário">
                </div>
                <div class="col-lg-4 col-6">
                    <input type="text" name="name_comment" class="inputAdd" placeholder="Nome">
                </div>
                <div class="col-lg-4 col-12">

                    <button class="btn buttonAdd" id="bt_save_comment" name="bt_save_comment">Cadastrar Comentário</button>
                </div>
                <div class="col-12">
                    <?php
                    if (isset($this->view_var['successComment'])) { ?>
                        <div class="row mt-4">
                            <div class="alert alert-success text-center" role="alert">
                                <?= $this->view_var['successComment'] ?>
                            </div>
                        </div>
                    <?php } else if (isset($this->view_var['errorComment'])) { ?>
                        <div class="row mt-4">
                            <div class="alert alert-danger text-center" role="alert">
                                <?= $this->view_var['errorComment'] ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </form>
        </div>

    </div>
</body>

<style>
    .labelStar.isChecked {
        color: #CC7200;

    }

    .labelStar {
        color: #FFAB40;

    }


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

    .buttonAvaliation:hover {
        background-color: #c78b2b;
    }

    .buttonAvaliation {
        padding: 0.5rem;
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
        max-width: 100%;
        margin-bottom: 1rem;
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
        max-width: 100%;
        margin-bottom: 1rem;
    }

    .buttonPlus:hover {
        background: #FFAB40;
    }
</style>