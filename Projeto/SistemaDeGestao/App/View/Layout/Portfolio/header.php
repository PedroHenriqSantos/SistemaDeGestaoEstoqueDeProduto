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
                    <div class="col-2 logo">
                        <img src="<?= 'http://' . APP_HOST . '/App/View/Images/Logo.png' ?>" alt="logo">
                    </div>
                    <div class="col-4 logo">
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-2 logo">
                            </div>
                            <div class="col-9">
                                <form class="search">
                                    <input type="text" name="search" id="search" class="searchInput porfolioSearch form-control " placeholder="Pesquisar" autocomplete="off">
                                    <button type="submit" class="lupa"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="col-1">
                                <a href="#" id="carrinho"><i class="fa-solid fa-cart-plus"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </header>
</body>
<style>
    /*
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


*/
    .lupa {
        display: inline-block;
        background-color: #CC7200 !important;
        color: white !important;
        padding: 0.3rem;
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

    .container {
        width: 100%;
        background: #824700;
    }



    .campo {
        color: #dc7f0d;
    }
</style>