<?php
$nameUser =  '';
if (isset($this->view_var["userLogin"])) {
    $user = $this->view_var["userLogin"];
    $nameUser = $user->getName();
}
?>
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
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Sistema De Gestão</title>
</head>

<body class="body">
    <header>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-12 logo">
                        <a href="<?= 'http://' . APP_HOST . '/user/principal' ?>">
                            <img src="<?= 'http://' . APP_HOST . '/App/View/Images/Logo.png' ?>" alt="logo">
                        </a>
                    </div>
                    <div class="col-lg-9 col-sm-12 texto">
                        <p class="textHello">Olá <?= $nameUser ?>, Bem Vindo!</p>
                        <a class="btn logout" href="<?= 'http://' . APP_HOST . '/login/logout' ?>">Logout</a>
                        <a class="btn logout" href="<?= 'http://' . APP_HOST . '/portfolio/index' ?>">Ir para o Portfólio</a>

                    </div>
                </div>
                <div class="row menu">
                        <div class="campo col-lg-3 col-4">
                            <a href="<?= 'http://' . APP_HOST . '/product/list' ?>" class="linkMenu"> Produtos </a>
                        </div>

                        <div class="campo col-lg-3 col-4">
                            <a href="<?= 'http://' . APP_HOST . '/category/list' ?>" class="linkMenu"> Categorias </a>
                        </div>

                        <div class="campo col-lg-3 col-4">
                            <a href="<?= 'http://' . APP_HOST . '/user/list' ?>" class="linkMenu"> Usuários </a>

                        </div>

                </div>
            </div>
        </div>
    </header>



    <style>

        .logout:hover {
            background-color: #c78b2b;
        }

        .logout {
            padding: 0.5rem;
            background-color: #DD6B20;
            color: white;
        }

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

.textHello{
    padding: 0.5rem;
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
            background-color: #FFAB20;
            transition: .5s;
            color: white;
        }

        @media screen and (max-width: 991px) {
            .texto{
                text-align: center;
            }
        }
    </style>