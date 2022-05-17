<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titlePortfolio">Produtos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="boxProduct">
                    <img src="<?= 'http://' . APP_HOST . '/App/View/Images/pao.png' ?>" alt="pao" class="imagePortfolio">
                    <h3 class="imagePortfolio">Pão de Sal</h3>
                    <p class="imagePortfolio">Preço: R$1,00</p>
                    <img id="ava" src="<?= 'http://' . APP_HOST . '/App/View/Images/avaliacao.png' ?>" alt="ava" class="imagePortfolio">
                </div>
            </div>
            <div class="col-3">
                <div class="boxProduct">
                    <img src="<?= 'http://' . APP_HOST . '/App/View/Images/pao.png' ?>" alt="pao" class="imagePortfolio">
                    <h3 class="imagePortfolio">Pão de Sal</h3>
                    <p class="imagePortfolio">Preço: R$1,00</p>
                    <img id="ava" src="<?= 'http://' . APP_HOST . '/App/View/Images/avaliacao.png' ?>" alt="ava" class="imagePortfolio">
                </div>
            </div>
            <div class="col-3">
                <div class="boxProduct">
                    <img src="<?= 'http://' . APP_HOST . '/App/View/Images/pao.png' ?>" alt="pao" class="imagePortfolio">
                    <h3 class="imagePortfolio">Pão de Sal</h3>
                    <p class="imagePortfolio">Preço: R$1,00</p>
                    <img id="ava" src="<?= 'http://' . APP_HOST . '/App/View/Images/avaliacao.png' ?>" alt="ava" class="imagePortfolio">
                </div>
            </div>
            <div class="col-3">
                <div class="boxProduct">
                    <img src="<?= 'http://' . APP_HOST . '/App/View/Images/pao.png' ?>" alt="pao" class="imagePortfolio">
                    <h3 class="imagePortfolio">Pão de Sal</h3>
                    <p class="imagePortfolio">Preço: R$1,00</p>
                    <img id="ava" src="<?= 'http://' . APP_HOST . '/App/View/Images/avaliacao.png' ?>" alt="ava" class="imagePortfolio">
                </div>
            </div>
            <div class="col-12 justify-content-center d-flex ">
                <button type="submit" class="buttonPlus"> Carregar mais </button>
            </div>

        </div>
    </div>
</body>



<style>
    .titlePortfolio{
        color: #FFAB40;
        font-weight: 600;
        font-size: 2.5rem;

    }
    .imagePortfolio {
        margin-bottom: 1rem;
    }

    .boxProduct {

        background: #824700;
        border-radius: 6px;
        width: 246px;
        height: 463px;
        margin-right: 1rem;
        text-align: center;
        color: white;
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