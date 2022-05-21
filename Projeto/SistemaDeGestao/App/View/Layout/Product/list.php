<?php
$products = $this->view_var["products"];
?>
<div class="container">
    <div class="row headerBody">
        <div class="col-8">
            <h1 class="titleList">Lista de Produtos</h1>
        </div>
        <div class="col-4">
            <form class="form-outline barra-pesquisa">
                <input type="search" id="form1" class="searchInput form-control " placeholder="Pesquisar código de produto" aria-label="Search" />
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
        foreach ($products as $product) { ?>
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
                    <a class="linkButton" href="<?= 'http://' . APP_HOST . '/product/edit/' . $product->getId() ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                </div>
            </div>
        <?php } ?>
    </div>
    <!--Botão cadastrar produto-->
    <div class="row">
    <div class="col-12 botao">
            <a href="<?= 'http://' . APP_HOST. '/product/register' ?>" target="_blank" class="btn addButton">Cadastrar Produto</a>
        </div>
    </div>


</div>