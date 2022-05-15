
<style>
     main{
        margin-top: 100px;
    }
    .texto{
        position: absolute;
width: 283px;
height: 40px;
left: 135px;
top: 70px;

font-family: 'Poppins';
font-style: normal;
font-weight: 500px;
font-size: 45px;
line-height: 68px;
/* identical to box height */
color: #FFAB40;
    }
    .descricao{
        position: absolute;
width: 598px;
height: 372px;
left: 743px;
top: 227px;

font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 35px;
line-height: 52px;

color: #824700;

    }
    #imagem{
        position: absolute;
width: 559px;
height: 372px;
left: 135px;
top: 227px;

    }

    input[ type="text"], input[ type="submit"], input[type="number"]{
        color: #FFFFFF;
    }
    
    #comprar{
        position: absolute;
width: 221px;
height: 51px;
left: 896px;
top: 548px;
border: none;
background: #DD6B20;
border-radius: 6px;
cursor: pointer;
    }
    .preco{
        position: absolute;
width: 559px;
height: 53px;
left: 144px;
top: 619px;

font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 35px;
line-height: 52px;
color: #824700;
    }
    .ava{
        position: absolute;
width: 559px;
height: 53px;
left: 144px;
top: 707px;

font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 35px;
line-height: 52px;
color: #824700;

    }
    #avaliacao{
        position: absolute;
width: 300px;
height: 43px;
left: 211px;
top: 45px;
    }
.restam{
    position: absolute;
width: 559px;
height: 53px;
left: 144px;
top: 799px;

font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 35px;
line-height: 52px;
color: #824700;

}
.coment{
    position: absolute;
width: 550px;
height: 68px;
left: 144px;
top: 892px;

font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 45px;
line-height: 68px;
color: #FFAB40;

}
p{
    position: absolute;
width: 591px;
height: 34px;
left: 50px;
top: 10px;

font-family: 'Roboto';
font-style: normal;
font-weight: 700;
font-size: 18px;
line-height: 21px;
text-align: center;

color: #FFFFFF;
}

.comentar1{
    position: absolute;
width: 73px;
height: 76px;
left: 231px;
top: 1058px;
}
#persona1, #persona2, #persona3{
    position: absolute;
left: 20px;
right: 0%;
top: 20px;

}
.coment1{
    position: absolute;
width: 665px;
height: 72px;
left: 375px;
top: 1062px;
background: #824700;

}
.comentar2{
    position: absolute;
width: 73px;
height: 76px;
left: 231px;
top: 1208px;

}
.coment2{
    position: absolute;
width: 665px;
height: 72px;
left: 375px;
top: 1210px;
background: #824700;

}
.comentar3{
    position: absolute;
width: 73px;
height: 76px;
left: 231px;
top: 1358px;
}
.coment3{
    position: absolute;
width: 665px;
height: 72px;
left: 377px;
top: 1362px;

background: #824700;
}
#mais{
    position: absolute;
width: 221px;
height: 51px;
left: 574px;
top: 1482px;
border: none;
background: #DD6B20;
border-radius: 6px;
cursor: pointer;
}
#escreve{
    position: absolute;
width: 283px;
height: 72px;
left: 253px;
top: 1590px;
text-align: center;
border: none;
border-radius: 6px;
background: #824700;
}
input::placeholder{
        color: #FFFFFF;
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 21px;
    }
    input:focus{
        outline: none;
    }
    #nome{
        position: absolute;
width: 283px;
height: 72px;
left: 574px;
top: 1590px;
text-align: center;
border: none;
border-radius: 6px;
background: #824700;
    }
    #cadastrar{
        position: absolute;
width: 221px;
height: 51px;
left: 920px;
top: 1604px;
border: none;
background: #DD6B20;
border-radius: 6px;
cursor: pointer;
    }
</style>
<main>
        <div class="texto">
            <h3>Pão de Sal</h3>
        </div>
        <div class="descricao">
            <h4>Pão realizado aos moldes francêses com uma crocância impressioante.</h4>
        </div>
        <img src="img/pao.jpg" alt="imagem" id="imagem">

        <input type="submit" id="comprar" value="Comprar">

        <div class="preco">
            <h3>Preço: R$ 1,00</h3>
        </div>
        <div class="ava">
            <h3>Avaliação: </h3>
            <img src="img/Avaliação.png" alt="avaliacao" id="avaliacao">
        </div>
        <div class="restam">
            <h3>Restam: 02 Produtos</h3>
        </div>
        <div class="coment">
            <h3>Comentarios</h3>
        </div>
        <div class="comentar1">
        <img src="img/Ellipse 1.png" alt="foto" id="comenta1">
        <img src="img/Vector.png" alt="p" id="persona1">
    </div>
        <div class="coment1">
            <p>Pão delicioso</p>
        </div>
        <div class="comentar2">
            <img src="img/Ellipse 1.png" alt="foto" id="comenta2">
            <img src="img/Vector.png" alt="p" id="persona2">
        </div>
            <div class="coment2">
                <p>Pão delicioso</p>
            </div>
            <div class="comentar3">
                <img src="img/Ellipse 1.png" alt="foto" id="comenta3">
                <img src="img/Vector.png" alt="p" id="persona3">
            </div>
                <div class="coment3">
                    <p>Pão delicioso</p>
                </div>
                <input type="submit" id="mais" value="Carregar mais">

                <input type="text" name="escreve" id="escreve" placeholder="Escreva seu comentario aqui">
                <input type="text" name="nome" id="nome" placeholder="Nome">

                <input type="submit" id="cadastrar" value="Cadastrar">
    </main>