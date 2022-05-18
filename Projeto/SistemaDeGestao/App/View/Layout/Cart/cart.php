<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titlePortfolio">Carrinho de compras</h2>
            </div>
        </div>
        <form action="<?= 'http://' . APP_HOST . '/cart/post' ?>" method="post">
            <div class="row">
                <div class="col-3">
                    <input type="text" name="name" class="inputAdd" placeholder="Nome">
                </div>
                <div class="col-3">
                    <input type="tel" name="phone" class="inputAdd" placeholder="Telefone">
                </div>
                <div class="col-3">
                    <input type="tel" name="email" class="inputAdd" placeholder="E-mail">
                </div>
                <div class="col-3">
                    <input type="tel" name="number" class="inputAdd" placeholder="Número">
                </div>


            </div>

            <div class="row mt-3">
                <div class="col-3">
                    <input type="text" name="neighbohood" class="inputAdd" placeholder="Bairro">
                </div>
                <div class="col-3">
                    <input type="text" name="street" class="inputAdd" placeholder="Rua">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-3">

                    <div class="boxProduct">
                        <img src="<?= 'http://' . APP_HOST . '/App/View/Images/pao.png' ?>" alt="pao" class="imagePortfolio">
                        <h3 class="imagePortfolio">Pão de Sal</h3>
                        <p class="imagePortfolio">Preço: R$1,00</p>
                        <label for="qtd"> Qtd: </label>
                        <input type="number" value="0" class="inputAdd quantityCart"  name="qtd">
                        <a class="linkButton addQuantity" href="#"><i class="fas fa-plus-circle"></i></i></a>
                        <a class="linkButton minimusQuantity" href="#"><i class="fas fa-minus-circle"></i></i></a>


                    </div>
                </div>
                <div class="col-3">

                    <div class="boxProduct">
                        <img src="<?= 'http://' . APP_HOST . '/App/View/Images/pao.png' ?>" alt="pao" class="imagePortfolio">
                        <h3 class="imagePortfolio">Pão de Sal</h3>
                        <p class="imagePortfolio">Preço: R$1,00</p>
                        <label for="qtd"> Qtd: </label>
                        <input type="number" value="0" class="inputAdd quantityCart"  name="qtd">
                        <a class="linkButton addQuantity" href="#"><i class="fas fa-plus-circle"></i></i></a>
                        <a class="linkButton minimusQuantity" href="#"><i class="fas fa-minus-circle"></i></i></a>


                    </div>
                </div>
                <div class="col-3">

                    <div class="boxProduct">
                        <img src="<?= 'http://' . APP_HOST . '/App/View/Images/pao.png' ?>" alt="pao" class="imagePortfolio">
                        <h3 class="imagePortfolio">Pão de Sal</h3>
                        <p class="imagePortfolio">Preço: R$1,00</p>
                        <label for="qtd"> Qtd: </label>
                        <input type="number" value="0" class="inputAdd quantityCart"  name="qtd">
                        <a class="linkButton addQuantity" href="#"><i class="fas fa-plus-circle"></i></i></a>
                        <a class="linkButton minimusQuantity" href="#"><i class="fas fa-minus-circle"></i></i></a>


                    </div>
                </div>
                <div class="col-3">

                    <div class="boxProduct">
                        <img src="<?= 'http://' . APP_HOST . '/App/View/Images/pao.png' ?>" alt="pao" class="imagePortfolio">
                        <h3 class="imagePortfolio">Pão de Sal</h3>
                        <p class="imagePortfolio">Preço: R$1,00</p>
                        <label for="qtd"> Qtd: </label>
                        <input type="number" value="0" class="inputAdd quantityCart"  name="qtd">
                        <a class="linkButton addQuantity" href="#"><i class="fas fa-plus-circle"></i></i></a>
                        <a class="linkButton minimusQuantity" href="#"><i class="fas fa-minus-circle"></i></i></a>


                    </div>
                </div>
            </div>
            <section class="enviar">
                <button class="btn buttonAdd" id="bt_save" name="bt_save">Comprar</button>
            </section>
        </form>



    </div>
</body>

<style>
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
    }

    .boxProduct {

        background: #824700;
        border-radius: 6px;
        width: 100%;
        height: auto;
        margin-right: 1rem;
        text-align: center;
        color: white;
        padding: 1rem;
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