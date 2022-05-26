<?php
$categorys = $this->view_var["categorys"];
?>
<div class="container">
    <div class="row headerBody">
        <div class="col-8">
            <h1 class="titleList">Lista de Categorias</h1>
        </div>
        <div class="col-4">
            <form class="form-outline barra-pesquisa" action="<?= 'http://' . APP_HOST . '/category/search' ?>" method="POST">
                <input type="text" name="idSearch" id="form1" class="searchInput form-control " placeholder="Pesquisar Categoria pelo código" aria-label="Search" />
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
                <p></p>
            </div>
            <div class="col-2">
                <p></p>
            </div>
            <div class="col-2">
                <p></p>
            </div>
            <div class="col-2">
                <p></p>
            </div>
        </div>
        <?php
        foreach ($categorys as $category) { ?>
            <div class="row produtos row-list row-body-info">
                <div class="col-2">
                    <p><?= $category->getId() ?></p>
                </div>
                <div class="col-2">
                    <p><?= $category->getName() ?></p>
                </div>
                <div class="col-2">
                    <p></p>
                </div>
                <div class="col-2">
                    <p></p>
                </div>
                <div class="col-2">
                    <p></p>
                </div>
                <div class="col-2">
                    <a class="linkButton" href="<?= 'http://' . APP_HOST . '/category/delete/' . $category->getId() ?>"><i class="fa-solid fa-square-minus"></i></a>
                    <a class="linkButton" href="<?= 'http://' . APP_HOST . '/category/edit/' . $category->getId() ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                </div>
            </div>
        <?php } ?>
    </div>
    <!--Botão cadastrar produto-->
    <div class="row">
        <div class="col-12 botao">
            <a href="<?= 'http://' . APP_HOST . '/category/register' ?>" target="_blank" class="btn addButton">Cadastrar Categoria</a>
        </div>
    </div>


</div>