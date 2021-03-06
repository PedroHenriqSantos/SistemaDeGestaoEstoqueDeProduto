<?php
$users = $this->view_var["users"];
$hiddenOptions = '';
if (isset($this->view_var["userLogin"])) {
    $user = $this->view_var["userLogin"];
    if ($user->getFunction() == "NORMAL") {
        $hiddenOptions = 'hidden';
    }
}
?>
<div class="container">
    <div class="row headerBody">
        <div class="col-lg-8 col-12">
            <h1 class="titleList">Lista de Usuários</h1>
        </div>
        <div class="col-lg-4 col-12">
            <form class="form-outline barra-pesquisa" action="<?= 'http://' . APP_HOST . '/user/list' ?>" method="POST">
                <input type="text" name="search" id="search" class="searchInput porfolioSearch form-control " placeholder="Pesquisar" autocomplete="off">
                <button type="submit" class="lupa"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <!--Tabela Produtos-->
    <div>
        <div class="row row-list row-header-list ">
            <div class="col-2">
                <p>Código</p>
            </div>
            <div class="col-2">
                <p>Nome</p>
            </div>
            <div class="col-2">
                <p>Função</p>
            </div>
            <div class="col-2">
                <p>Telefone</p>
            </div>
            <div class="col-2">
                <p>Email</p>
            </div>
            <div class="col-2">
                <p></p>
            </div>
            <div class="col-2">
                <p></p>
            </div>
        </div>
        <?php
        foreach ($users as $user) { ?>
            <div class="row produtos row-list row-body-info">
                <div class="col-2">
                    <p><?= $user->getId() ?></p>
                </div>
                <div class="col-2">
                    <p><?= $user->getName() ?></p>
                </div>
                <div class="col-2">
                    <p><?= $user->getFunction() ?></p>
                </div>
                <div class="col-2">
                    <p><?= $user->getPhone() ?></p>
                </div>
                <div class="col-2">
                    <p><?= $user->getEmail() ?></p>
                </div>
                <div class="col-2">
                    <a class="linkButton <?= $hiddenOptions ?>" href="<?= 'http://' . APP_HOST . '/user/delete/' . $user->getId() ?>"><i class="fa-solid fa-square-minus"></i></a>
                    <a class="linkButton <?= $hiddenOptions ?>" href="<?= 'http://' . APP_HOST . '/user/edit/' . $user->getId() ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                </div>
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-12 botao">
                <a href="<?= 'http://' . APP_HOST . '/user/register' ?>" target="_blank" class="btn addButton">Cadastrar Usuário</a>
            </div>
        </div>


    </div>
    <style>
        .hidden {
            display: none;
        }
    </style>