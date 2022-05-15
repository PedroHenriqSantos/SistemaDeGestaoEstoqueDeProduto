<style>
    main{
        margin-top: 50px;
    }
    .texto{
        position: absolute;
width: 183px;
height: 40px;
left: 135px;
top: 70px;

font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 30px;
line-height: 60px;
/* identical to box height */

color: #FFAB40;
    }
    input::placeholder{
        color: #FFFFFF;
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 21px;
    }
    input[ type="text"], input[ type="submit"], input[type="number"]{
        color: #FFFFFF;
    }
    input:focus{
        outline-color:#8c5309;
    }
#nomes{
    position: absolute;
width: 221px;
height: 45.25px;
left: 148px;
top: 200px;
border: #FFAB40;
background: #CC7200;
border-radius: 6px;
}
#tel{
    position: absolute;
width: 221px;
height: 45.25px;
left: 445px;
top: 200px;
border: #FFAB40;
background: #CC7200;
border-radius: 6px;
}
#email{
    position: absolute;
width: 221px;
height: 45.25px;
left: 750px;
top: 200px;
border: #FFAB40;
background: #CC7200;
border-radius: 6px;
}
#numero{
    position: absolute;
width: 221px;
height: 45.25px;
left: 1034px;
top: 200px;
border: #FFAB40;
background: #CC7200;
border-radius: 6px;
}
#bairro{
    position: absolute;
width: 221px;
height: 45.25px;
left: 148px;
top: 287px;
border: #FFAB40;
background: #CC7200;
border-radius: 6px;
}
#rua{
    position: absolute;
width: 221px;
height: 45.25px;
left: 445px;
top: 287px;
border: #FFAB40;
background: #CC7200;
border-radius: 6px;
}
.retangulo1{
    position: absolute;
width: 246px;
height: 313px;
left: 135px;
top: 372px;

background: #824700;
border-radius: 6px;
    }
    .retangulo2{
        position: absolute;
width: 246px;
height: 313px;
left: 435px;
top: 372px;

background: #824700;
border-radius: 6px;
    }
    .retangulo3{
        position: absolute;
width: 246px;
height: 313px;
left: 735px;
top: 372px;

background: #824700;
border-radius: 6px;
    }
    img{
        position: absolute;
width: 246px;
height: 188.44px;
left: 0;
top: 0px;

border-radius: 6px 6px 0px 0px;
    }
    h3{
        position: absolute;
width: 187px;
height: 27px;
left: 20px;
top: 165px;

font-family: 'Roboto';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 28px;

color: #FFFFFF;
    }
    p{
        position: absolute;
width: 187px;
height: 27px;
left: 40px;
top: 219px;

font-family: 'Roboto';
font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 21px;

color: #FFFFFF;

    }
    #mais{
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
    #qtde{
        position: absolute;
width: 187px;
height: 27px;
left: 10px;
top: 269px;
border: #FFAB40;
background: #CC7200;
border-radius: 6px;
    }
</style>

<body>
    <main>
        <div class="texto">
            <h2>Carrinho</h2>
        </div>
        
            <input type="text" name="nomes" id="nomes" placeholder="Nome" autocomplete="off"> 
            <input type="text" name="nomes" id="tel" placeholder="Telefone" autocomplete="off">
            <input type="text" name="nomes" id="email" placeholder="E-mail" autocomplete="off">
            <input type="text" name="nomes" id="numero" placeholder="Número" autocomplete="off">
            <input type="text" name="nomes" id="bairro" placeholder="Bairro" autocomplete="off">
            <input type="text" name="nomes" id="rua" placeholder="Rua" autocomplete="off">
        
            <div class="retangulo1">
                <img src="img/pao.jpg" alt="pao">
                <h3>Pão de Sal</h3>
                <p>Preço: R$1,00</p>
                <input type="number" id="qtde" value="Qtde: ">
            </div>
            <div class="retangulo2">
                <img src="img/pao.jpg" alt="pao">
                <h3>Pão de Sal</h3>
                <p>Preço: R$1,00</p>
                <input type="number" id="qtde" value="Qtde: ">
            </div>
            <div class="retangulo3">
                <img src="img/pao.jpg" alt="pao">
                <h3>Pão de Sal</h3>
                <p>Preço: R$1,00</p>
                <input type="number" id="qtde" min="1" max="50">
            </div>
            <input type="submit"  id="mais" value="Comprar">
        </main>
</body>