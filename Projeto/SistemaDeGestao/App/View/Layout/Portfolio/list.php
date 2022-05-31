<?php
$products = $this->view_var["products"];
$productsRanking = $this->view_var["productsRanking"];

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titlePortfolio">Produtos</h2>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($products as $product) { ?>

                <div class="col-lg-3 col-sm-6 col-12 mb-4">
                    <a href="<?= 'http://' . APP_HOST . '/portfolio/productDetail/' . $product->getId() ?>" class="linkProduct" target="_blank">
                        <div class="boxProduct">
                            <img src="<?= 'http://' . APP_HOST . '/App/Uploads/' . $product->getImage()  ?>" alt="pao" class="imagePortfolio">
                            <h3 class="imagePortfolio"><?= $product->getName() ?></h3>
                            <p class="imagePortfolio">Preço: <?= $product->getPrice()  ?></p>
                        </div>
                    </a>
                </div>

            <?php } ?>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="titlePortfolio">Produtos Melhores Avaliados </h2>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($productsRanking as $product) {
            ?>

                <div class="col-lg-3 col-sm-6 col-12 mb-4">
                    <a href="<?= 'http://' . APP_HOST . '/portfolio/productDetail/' . $product->getId() ?>" class="linkProduct" target="_blank">
                        <div class="boxProduct">
                            <img src="<?= 'http://' . APP_HOST . '/App/Uploads/' . $product->getImage()  ?>" alt="pao" class="imagePortfolio">
                            <h3 class="imagePortfolio"><?= $product->getName() ?></h3>
                            <p class="imagePortfolio">Preço: <?= $product->getPrice()  ?></p>
                            <div>
                                <?php
                                $countStarFull = 0;
                                for ($i = 0; $i < 5; $i++) {
                                    if ($i < $product->rate) { ?>
                                        <label class="starFull"> <i class="fas fa-star"></i> </label>
                                    <?php
                                        $countStarFull++;
                                    } else { ?>
                                        <label class="starEmpty"> <i class="fas fa-star"></i> </label>

                                <?php }
                                } ?>
                            </div>
                        </div>
                    </a>
                </div>

            <?php } ?>
        </div>
    </div>
</body>



<style>
    .starEmpty {
        color: #FFAB40;
    }

    .starFull {
        color: #CC7200;
    }

    .linkProduct {
        text-decoration: none;
    }

    .titlePortfolio {
        color: #FFAB40;
        font-weight: 600;
        font-size: 2.5rem;

    }

    .imagePortfolio {
        margin-bottom: 1rem;
        width: 100%;
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

    .boxProduct:hover {

        background: #825700;

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