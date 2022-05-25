<div class="container ">
    <div class="row">
        <div class="col-12 text-center">
            <img class="logo" src="<?= 'http://' . APP_HOST . '/App/View/Images/Logo.png' ?>" alt="imagem">
        </div>
    </div>
    <form method="post" action="<?= 'http://' . APP_HOST . '/login/login' ?>">
        <div class="row mt-3">
            <div class="col-12 text-center">
                <input type="text" name="email_user" class="inputAdd" placeholder="email">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <input type="password" name="password_user" class="inputAdd" placeholder="password">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <button class="btnLogin" name="bt_login">Enviar</button>
            </div>
        </div>
        <?php
        if (isset($this->view_var['error'])) {
            if (empty($this->view_var['error'])) { ?>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <div class="alert alert-success text-center" role="alert">
                            login feito com sucesso - aguarde...
                        </div>
                    </div>
                </div>

            <?php } else { ?>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <div class="alert alert-danger text-center" role="alert">
                            <?= $this->view_var['error'] ?>
                        </div>
                    </div>
                </div>

        <?php  }
        }
        ?>
    </form>
</div>


<style>
    .login {
        background-color: rgba(0, 0, 0, 0);
    }



    input {
        padding: 15px;
        outline: none;
    }

    .btnLogin {
        padding: 0.8rem;
        width: 20%;
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
        width: 20%;
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