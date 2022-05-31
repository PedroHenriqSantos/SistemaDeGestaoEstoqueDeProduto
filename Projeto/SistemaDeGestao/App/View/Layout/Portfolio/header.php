<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= 'http://' . APP_HOST . '/App/View/Styles/styles.css' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1d743cb0e8.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Sistema De Gestão</title>
</head>

<body class="body">
    <header>

        <div class="header">
            <div class="container containerPortfolio">
                <div class="row">
                    <div class="col-lg-2 col-sm-12 logo">
                        <a href="<?= 'http://' . APP_HOST . '/portfolio/index' ?>">
                            <img src="<?= 'http://' . APP_HOST . '/App/View/Images/Logo.png' ?>" alt="logo">
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12 logo">
                    </div>
                    <div class="col-lg-6 col-sm-12 marginTopHeader">
                        <div class="row">
                            <div class="col-lg-1 col-sm-12 logo">
                            </div>
                            <div class="col-lg-9 col-sm-12">
                                <form class="form-outline barra-pesquisa" action="<?= 'http://' . APP_HOST . '/portfolio/index' ?>" method="POST">
                                    <input type="text" name="search" id="search" class="searchInput porfolioSearch form-control " placeholder="Pesquisar" autocomplete="off">
                                    <button type="submit" class="lupa"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="col-lg-2 col-sm-12 marginTopHeader">
                                <span class="countCart"> <?= $this->view_var['countCart'] ?></span>
                                <a href="<?= 'http://' . APP_HOST . '/cart/buy' ?>" id="carrinho"><i class="fa-solid fa-cart-plus"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </header>
</body>
<style>
    .countCart {
        color: white;
        font-size: 1.2rem;
        font-weight: bold;
    }

    .search {
        width: 100%;
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

    .containerPortfolio {
        width: 100%;
        background: #824700;
    }



    .campo {
        color: #dc7f0d;
    }
    @media screen and (max-width: 991px) {
            .marginTopHeader{
                margin-top: 1rem;
            }
        }
    
</style>