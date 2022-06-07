<?php
$products = $this->view_var["products"];

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titlePortfolio">Carrinho de compras</h2>
            </div>
        </div>
        <?php
        if (count($products)) { ?>


            <form action="<?= 'http://' . APP_HOST . '/cart/sendCart' ?>" method="post" class="formCart">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <input type="text" name="name_client" class="inputAdd" placeholder="Nome" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="tel" name="phone_client" class="inputAdd phone-mask" placeholder="Telefone" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="email" name="email_client" class="inputAdd" placeholder="E-mail" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="text" name="number_client" class="inputAdd" placeholder="Número" required>
                    </div>

                    <div class="col-lg-3 col-6">
                        <input type="text" name="district_client" class="inputAdd" placeholder="Bairro" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="text" name="street_client" class="inputAdd" placeholder="Rua" required>
                    </div>
                </div>



                <div class="row mt-3">
                    <?php
                    $indexProducts = 0;
                    foreach ($products as $product) {
                    ?>
                        <div class="col-lg-3 col-sm-6 col-12 mb-4">
                            <div class="boxProduct">
                                <img src="<?= 'http://' . APP_HOST . '/App/Uploads/' . $product->getImage()  ?>" alt="<?= $product->getName() ?>" class="imagePortfolio">
                                <h3 class="imagePortfolio"><?= $product->getName() ?></h3>
                                <p class="imagePortfolio">Preço: R$<?= $product->getPrice() ?></p>
                                <p class="imagePortfolio">Categoria: <?= $product->getCategoryName()  ?></p>
                                <label for="qtd"> Qtd: </label>
                                <input type="number" value="1" class="inputAdd quantityCart inputOnlyPositive" name="qtd[<?= $indexProducts ?>]">
                                <input type="text" class="hidden" name="idProduct[<?= $indexProducts ?>]" value="<?= $product->getId() ?>" />
                                <a class="linkButton addQuantity" href="#"><i class="fas fa-plus-circle"></i></i></a>
                                <a class="linkButton minimusQuantity" href="#"><i class="fas fa-minus-circle"></i></i></a>
                            </div>
                        </div>
                    <?php
                        $indexProducts++;
                    } ?>
                </div>
                <section class="enviar">
                    <button class="btn buttonAdd" id="bt_save" name="bt_save">Comprar</button>
                </section>
                <?php

                ?>
            </form>
            <?php
        } else {
            if (isset($this->view_var['error'])) {
                if (empty($this->view_var['error'])) { ?>
                    <div class="row mt-4">
                        <div class="alert alert-success text-center" role="alert">
                            Compra efetuada com sucesso
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row mt-4">
                        <div class="alert alert-danger text-center" role="alert">
                            <?= $this->view_var['error'] ?>
                        </div>
                    </div>
                <?php  }
            } else {
                ?>
                <div class="alert alert-danger text-center" role="alert">
                    Nenhum produto está no carrinho
                </div>
        <?php }
        }

        ?>


    </div>
</body>

<style>
    .hidden {
        display: none;
    }

    .buttonAdd:hover {
        background-color: #c78b2b;
        color: white;
    }

    .enviar {
        margin-top: 2rem;
        text-align: center;
    }

    .buttonAdd {
        padding: 0.5rem 2rem 0.5rem 2rem;
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
        max-width: 100%;
        margin-bottom: 1rem;
    }

    .quantityCart {
        padding: 0.2rem;
        width: 20%;
    }

    .inputAdd::focus {
        color: white;
    }

    .inputAdd::placeholder {
        color: white;
    }

    .titlePortfolio {
        color: #FFAB40;
        font-weight: 600;
        font-size: 2.5rem;

    }

    .imagePortfolio {
        margin-bottom: 1rem;
        max-width: 100%;
        height: 100%;
        max-height: 163px;
    }

    .boxProduct {

        background: #824700;
        border-radius: 6px;
        width: 100%;
        height: auto;
        margin-right: 1rem;
        text-align: center;
        min-height: 460px;
        color: white;
        padding: 0.5rem;
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

    .linkButton {
        background-color: #FFAB40;
        color: #CC7200;
        border-radius: 1rem;
        padding: 0.5rem;
        text-decoration: none;

    }

    .linkButton:hover {
        background-color: #FFAB11;
        color: #CC7200;


    }

    .buttonPlus:hover {
        background: #FFAB40;
    }
</style>