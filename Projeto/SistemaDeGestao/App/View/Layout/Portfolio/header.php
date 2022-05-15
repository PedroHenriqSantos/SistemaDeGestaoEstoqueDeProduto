<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f2b223d0ba.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <form id="headere">
            <img src="C:\Users\Usuário\Pictures\logo.png" alt="logotipo">
            <form id="search">
                <input type="text" name="search" id="search" placeholder="Pesquisar" autocomplete="off">
                <button type="submit" id="lupa"><i class="fa-solid fa-magnifying-glass"></i></button>
                <button type="submit" id="carrinho"><i class="fa-solid fa-cart-plus"></i></button>
            </form>
    </header>
</body>

</html>
<style>
    #headere {
        position: absolute;
        width: 100%;
        height: 77px;
        left: 0px;
        top: 0px;

        background: #824700;
    }

    img {
        position: absolute;
        width: 198px;
        height: 51px;
        left: 135px;
        top: 16px;
    }

    input::placeholder {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 21px;
        color: #FFFFFF;
    }

    input[type="text"] {
        color: #FFFFFF;
    }

    input:focus {
        outline: none;
    }

    input {
        position: absolute;
        width: 300px;
        height: 45.25px;
        left: 855px;
        top: 16px;

        background: #CC7200;
        border-radius: 6px;
    }

    #lupa {
        position: absolute;
        width: 55px;
        height: 52px;
        left: 1165px;
        top: 16px;
        background: #CC7200;
        border-radius: 6px;
        cursor: pointer;
        color: #d8a869;
        font-size: 1.2em;
        border-radius: 0.2em;
        border: none;
        padding: 0.2em;
    }

    #search {
        font-size: 1.2em;
        border-radius: 0.2em;
        border: none;
        padding: 0.2em;
    }

    #carrinho {
        position: absolute;
        width: 55px;
        height: 52px;
        left: 1440px;
        top: 16px;
        background: #CC7200;
        border-radius: 6px;
        cursor: pointer;
        color: #d8a869;
        font-size: 1.2em;
        border-radius: 0.2em;
        border: none;
        padding: 0.2em;
    }
</style>