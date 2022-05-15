<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= 'http://' . APP_HOST . '/App/View/Styles/styles.css' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1d743cb0e8.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Sistema De Gestão</title>
</head>

<body class="body">
    <header>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-3 logo">
                        <img src="<?= 'http://' . APP_HOST . '/App/View/Images/Logo.png' ?>" alt="logo">
                    </div>
                    <div class="col-9 texto">
                        <p>Olá, Bem Vindo!</p>
                    </div>
                </div>
                <div class="row ">
                    <div class="row menu">
                        <div class="campo col-3">
                            <a href="<?= 'http://' . APP_HOST . '/product/list' ?>" class="linkMenu"> Cadastrar Produto </a>
                        </div>

                        <div class="campo col-3">
                            <a href="<?= 'http://' . APP_HOST . '/category/list' ?>" class="linkMenu"> Cadastrar Categoria </a>
                        </div>

                        <div class="campo col-3">
                            <a href="<?= 'http://' . APP_HOST . '/user/list' ?>" class="linkMenu"> Cadastrar Usuário </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>



    <style>
        .header {
            background-color: #824700;
            padding: 1rem 0rem 1rem 0rem;
            height: auto;
            width: 100%;
            text-align: center;
        }

        .texto {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 1.2rem;
            line-height: 10px;
            text-align: right;
            margin-top: 2rem;
            color: #FFFFFF;

        }

        .menu {
            margin-top: 3rem;
            margin-bottom: 2rem;
        }

        .container {
            width: 100%;
        }



        .campo {
            color: #dc7f0d;
        }

        .linkMenu {
            padding: 1rem;
            text-align: center;
            text-transform: lowercase;
            font-weight: lighter;
            border-radius: 5px;
            color: #FFFF;
            background: #FFAB40;
            cursor: pointer;
            text-decoration: none;
        }




        .linkMenu:hover {
            background-color: #c78b2b;
            transition: .5s;
        }
    </style>