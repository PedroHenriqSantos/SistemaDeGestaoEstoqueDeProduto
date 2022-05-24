<body>
    <div class="container login">
        <div class="row">
            <img class="logo" src="<?= 'http://' . APP_HOST . '/App/View/Images/Logo.png' ?>" alt="imagem">
        </div>
        <form method="post" action="<?= 'http://' . APP_HOST . '/login/validate' ?>">
            <div class="row mt-3">
                <input type="text" name="email_user" class="inputAdd" placeholder="email">
            </div>
            <div class="row">
                <input type="password" name="password_user" class="inputAdd" placeholder="password">
            </div>
            <button class="btnLogin" name="bt_login">Enviar</button>
            <?php
                if (isset($this->view_var['error'])) {
                    if (empty($this->view_var['error'])) { ?>
                        <div class="row mt-4">
                            <div class="alert alert-success text-center" role="alert">
                                login feito com sucesso - aguarde...
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="row mt-4">
                            <div class="alert alert-danger text-center" role="alert">
                                <?= $this->view_var['error'] ?>
                            </div>
                        </div>
                <?php  }
                }
                ?>
        </form>
    </div>
</body>


<style>
    body {
        background-color: #824700;
    }

    .login {
        background-color: rgba(0, 0, 0, 0);
    }

    .login {
        position: absolute;
    }

    .login {
        top: 40%;
    }

    .login {
        left: 49%;
    }



    input {
        padding: 15px;
        outline: none;
    }

    .btnLogin {
        padding: 15px;
        width: 100%;
        color: white;
        border: 0;
        border-radius: 10px;
        cursor: pointer;
        background-color: #DD6B20;
        margin-top: 1rem;

    }

    .btnLogin:hover {
        background-color: #FFAB40;
    }

    .inputAdd {
        margin-top: 1rem;
        padding: 1rem;
        outline: none;
        border-radius: 15px;
        outline: none;
        border: none;
        background-color: #CC7200;
        color: white;
    }

    .inputAdd::placeholder {
        color: white;
    }

    .inputAdd::focus {
        color: white;
    }
</style>