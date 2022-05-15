<?php 
$user = $this->view_var["user"];
?>
<div class="container">
    <div class="row">
        <h1 class="titleList">Editar Usuário</h1>
    </div>
    <div class="row formAdd">
        <form action="<?= 'http://' . APP_HOST. '/user/update' ?>" method="post"  >
            <input type="text" name="id" class="hidden" placeholder="nome" value="<?= $user->getId() ?>">

            <div class="row">
                <div class="col-4">
                    <input type="text" name="name" class="inputAdd" placeholder="nome" value="<?= $user->getName() ?>">
                </div>
                <div class="col-4">
                    <input type="password" name="password" class="inputAdd" placeholder="senha" value="<?= $user->getPassword() ?>">
                </div>
                <div class="col-4">
                    <select  class="selectAdd" name="function" value="<?= $user->getFunction() ?>"> 
                            <option value="MASTER"> MASTER </option>
                            <option value="NORMAL"> NORMAL </option>
                    </select>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <input type="text" name="email" class="inputAdd" placeholder="email" value="<?= $user->getEmail() ?>">
                </div>
                <div class="col-4">
                    <input type="text" name="phone" class="inputAdd" placeholder="telefone" value="<?= $user->getPhone() ?>">
                </div>
            </div>
            <section class="enviar">
                <button class="btn buttonAdd"  id="bt_save" name="bt_save" >Atualizar Usuário</button>
            </section>
        </form>
    </div>
</div>

<style>
    form {
        width: 100%;
    }
    .hidden{
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