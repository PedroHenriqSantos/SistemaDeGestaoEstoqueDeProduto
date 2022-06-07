<?php
$user = $this->view_var["user"];
?>
<div class="container">
    <div class="row">
        <h1 class="titleList">Editar Usuário</h1>
    </div>
    <div class="row formAdd">
        <form action="<?= 'http://' . APP_HOST . '/user/update' ?>" method="post" class="formUserInsert">
            <input type="text" name="id_user" class="hidden" placeholder="nome" value="<?= $user->getId() ?>" >required

            <div class="row">
                <div class="col-4">
                    <input type="text" name="name_user" class="inputAdd" placeholder="nome" value="<?= $user->getName() ?>" required>
                </div>
                <div class="col-4">
                    <input type="password" name="password_user" class="inputAdd" placeholder="senha" value="<?= $user->getPassword() ?>" required>
                </div>
                <div class="col-4">
                    <select class="selectAdd" name="function_user" value="<?= $user->getFunction() ?>" required>
                        <option value="MASTER"> MASTER </option>
                        <option value="NORMAL"> NORMAL </option>
                    </select>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <input type="email" name="email_user" class="inputAdd" placeholder="email" value="<?= $user->getEmail() ?>" required>
                </div>
                <div class="col-4">
                    <input type="tel" name="phone_user" class="inputAdd phone-mask" placeholder="telefone" value="<?= $user->getPhone() ?>" required>
                </div>
            </div>
            <section class="enviar">
                <button class="btn buttonAdd" id="bt_save" name="bt_save">Atualizar Usuário</button>
            </section>
            <?php
            if (isset($this->view_var['error'])) {
                if (empty($this->view_var['error'])) { ?>
                    <div class="row mt-4">
                        <div class="alert alert-success text-center" role="alert">
                            Usuário atualizado com sucesso
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
</div>

<style>
    form {
        width: 100%;
    }

    .hidden {
        display: none;
    }

    .formAdd {
        margin-top: 2rem;
    }

    .inputAdd {

        padding: 1rem;
        outline: none;
        border-radius: 15px;
        outline: none;
        border: none;
        background-color: #CC7200;
        color: white;
    }

    .selectAdd {
        padding: 1rem;
        padding-right: 8rem !important;
        outline: none;
        border-radius: 15px;
        outline: none;
        border: none;
        background-color: #CC7200;
        color: white;
        max-width: 100%;

    }

    .inputAdd::focus {
        color: white;
    }



    input::placeholder {
        color: white
    }

    .buttonAdd:hover {
        background-color: #c78b2b;
    }

    .enviar {
        margin-top: 2rem;
        text-align: center;
    }

    .buttonAdd {
        padding: 1rem 2rem 1rem 2rem;
        background-color: #DD6B20;
        color: white;
    }
</style>