<?php
$products = $this->view_var["products"];
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

                <div class="col-3">
                    <a href="<?= 'http://' . APP_HOST . '/portfolio/productDetail/' . $product->getId() ?>" class="linkProduct" target="_blank">
                        <div class="boxProduct">
                            <img src="<?= 'http://' . APP_HOST . '/App/View/Images/' . $product->getImage()  ?>" alt="pao" class="imagePortfolio">
                            <h3 class="imagePortfolio"><?= $product->getName() ?></h3>
                            <p class="imagePortfolio">Preço: <?= $product->getPrice()  ?></p>
                            <img id="ava" src="<?= 'http://' . APP_HOST . '/App/View/Images/avaliacao.png' ?>" alt="ava" class="imagePortfolio">
                        </div>
                    </a>
                </div>

            <?php } ?>
        </div>
    </div>
</body>



<style>
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
        height: 463px;
        margin-right: 1rem;
        text-align: center;
        color: white;
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