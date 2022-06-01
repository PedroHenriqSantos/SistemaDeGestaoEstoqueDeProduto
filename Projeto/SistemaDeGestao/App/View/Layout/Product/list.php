<?php
$products = $this->view_var["products"];
$hiddenRegister = '';
if (isset($this->view_var["userLogin"])) {
    $user = $this->view_var["userLogin"];
    if ($user->getFunction() == "NORMAL") {
        $hiddenRegister = 'hidden';
    }
}
?>
<div class="container">
    <div class="row headerBody">
        <div class="col-lg-8 col-12">
            <h1 class="titleList">Lista de Produtos</h1>
        </div>
        <div class="col-lg-4 col-12">
            <form class="form-outline barra-pesquisa" action="<?= 'http://' . APP_HOST . '/product/list' ?>" method="POST">
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
                <p>Valor</p>
            </div>
            <div class="col-2">
                <p>Estoque</p>
            </div>
            <div class="col-2">
                <p></p>
            </div>
            <div class="col-2">
                <p></p>
            </div>
        </div>
        <?php
        foreach ($products as $product) {  ?>
            <div class="row produtos row-list row-body-info">
                <div class="col-2">
                    <p><?= $product->getId() ?></p>
                </div>
                <div class="col-2">
                    <p><?= $product->getName() ?></p>
                </div>
                <div class="col-2">
                    <p><?= $product->getPrice() ?></p>
                </div>
                <div class="col-2">
                    <p><?= $product->getQuantity() ?></p>
                </div>
                <div class="col-2">
                    <p></p>
                </div>
                <div class="col-2">
                    <a class="linkButton" href="<?= 'http://' . APP_HOST . '/product/delete/' . $product->getId() ?>"><i class="fa-solid fa-square-minus"></i></a>
                    <a class="linkButton  " href="<?= 'http://' . APP_HOST . '/product/edit/' . $product->getId() ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                </div>
            </div>
        <?php } ?>
    </div>
    <!--Botão cadastrar produto-->
    <div class="row">
        <div class="col-12 botao">
            <a href="<?= 'http://' . APP_HOST . '/product/register' ?>" target="_blank" class="btn addButton">Cadastrar Produto</a>
        </div>
    </div>


</div>
<style>
    .hidden {
        display: none;
    }
</style>