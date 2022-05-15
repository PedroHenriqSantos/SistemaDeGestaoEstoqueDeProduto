<body>
    <main>
        <div class="texto">
            <h2>Produtos</h2>
        </div>
        <div class="retangulo1">
            <img src="C:\Users\Usuário\Pictures\pao.jpg" alt="pao">
            <h3>Pão de Sal</h3>
            <p>Preço: R$1,00</p>
            <img id="ava" src="img/Avaliação.png" alt="ava">
        </div>
        <div class="retangulo2">
            <img src="img/pao.jpg" alt="pao">
            <h3>Pão de Sal</h3>
            <p>Preço: R$1,00</p>
            <img id="ava" src="img/Avaliação.png" alt="ava">
        </div>
        <div class="retangulo3">
            <img src="img/pao.jpg" alt="pao">
            <h3>Pão de Sal</h3>
            <p>Preço: R$1,00</p>
            <img id="ava" src="img/Avaliação.png" alt="ava">
        </div>
        <div class="retangulo4">
            <img src="img/pao.jpg" alt="pao">
            <h3>Pão de Sal</h3>
            <p>Preço: R$1,00</p>
            <img src="img/pao.jpg" alt="pao">
            <img id="ava" src="img/Avaliação.png" alt="ava">
        </div>
        <input type="submit" id="mais" value="Carregar mais">

    </main>
</body>



<style>
    main {
        margin-top: 100px;
    }

    .texto {

        position: absolute;
        width: 183px;
        height: 40px;
        left: 135px;
        top: 100px;

        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 30px;
        line-height: 60px;
        /* identical to box height */

        color: #FFAB40;
    }

    .retangulo1 {
        position: absolute;
        width: 246px;
        height: 463px;
        left: 135px;
        top: 223px;

        background: #824700;
        border-radius: 6px;
    }

    .retangulo2 {
        position: absolute;
        width: 246px;
        height: 463px;
        left: 459px;
        top: 223px;

        background: #824700;
        border-radius: 6px;
    }

    .retangulo3 {
        position: absolute;
        width: 246px;
        height: 463px;
        left: 783px;
        top: 223px;

        background: #824700;
        border-radius: 6px;
    }

    .retangulo4 {
        position: absolute;
        width: 246px;
        height: 463px;
        left: 1107px;
        top: 223px;

        background: #824700;
        border-radius: 6px;
    }

    #mais {
        position: absolute;
        width: 221px;
        height: 51px;
        left: 639px;
        top: 794px;
        border: #FFAB40;
        background: #DD6B20;
        border-radius: 6px;
        cursor: pointer;
    }

    input[type="submit"] {
        color: #FFFFFF;
    }

    #ava {
        position: absolute;
        width: 147px;
        height: 20px;
        left: 24px;
        top: 400px;
    }

    img {
        position: absolute;
        width: 246px;
        height: 208.44px;
        left: 0;
        top: 0px;

        border-radius: 6px 6px 0px 0px;
    }

    h3 {
        position: absolute;
        width: 206px;
        height: 38px;
        left: 21px;
        top: 218px;

        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 28px;

        color: #ffffff;

    }

    p {
        position: absolute;
        width: 187px;
        height: 27px;
        left: 40px;
        top: 289px;

        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 21px;

        color: #FFFFFF;

    }
</style>