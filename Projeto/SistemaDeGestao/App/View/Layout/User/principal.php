<?php
$sales = $this->view_var["sales"];


$userNormal = false;
if (isset($this->view_var["userLogin"])) {
  $user = $this->view_var["userLogin"];
  if ($user->getFunction() == "NORMAL") {
    $userNormal = true;
  }
}
?>

<div class="container">
  <div class="row">
    <h1 class="titleList">Lista de Compras</h1>
  </div>
  <div class="row card_compras">
    <?php foreach ($sales as $sale) {

    ?>
      <div class="col-4">
        <div class="card text-white">
          <div class="card-body">
            <h5 class="card-title">Compra <?= $sale->id_sale ?></h5>
            <p class="card-text"> <i class="fa-solid fa-bread-slice"></i> <?= $sale->name_product ?></p>
            <p class="card-info"> Quantidade: <?= $sale->quantity_cart ?></p>
            <p class="card-info"> Valor Total: <?= $sale->price_product ?></p>
            <p class="card-info"><i class="fa-regular fa-user"></i> Cliente</p>
            <p class="card-info"> Nome: <?= $sale->name_client ?></p>
            <p class="card-info"> Email: <?= $sale->email_client ?></p>
            <p class="card-info"> Telefone: <?= $sale->phone_client ?></p>
            <p class="card-info"> Rua: <?= $sale->street_client ?></p>
            <p class="card-info"> Bairro: <?= $sale->district_client ?></p>
            <p class="card-info"> Número: <?= $sale->number_client ?></p>
          </div>
          <div class="card-footer">
            <?php
            if ($userNormal) { ?>
              <a class="btn buttonChange" href="<?= 'http://' . APP_HOST . '/user/changeTypeSale/' . $user->getFunction() . "/" . $sale->id_sale   ?>">Enviar para o Master</a>
            <?php } else { ?>
              <a class="btn buttonChange" href="<?= 'http://' . APP_HOST . '/user/changeTypeSale/' . $user->getFunction() . "/" . $sale->id_sale   ?>">Estoque já alterado</a>
            <?php }
            ?>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</div>
<style>
  .card-title {
    text-align: center;
    margin-bottom: 25px;
  }

  .card-info {
    margin-left: 50px;
  }

  .card-footer {
    text-align: center;
    color: white;
  }

  .buttonChange {
    color: white;
    background-color: #FFAB40;
  }

  .buttonChange:hover {
    background-color: #FFAB20;
    transition: .5s;
    color: white;
  }

  .card {
    background-color: #824700;
    margin-bottom: 2rem;
  }

  .fa-bread-slice {
    color: #FFAB40;
  }

  .fa-user,
  .fa-bread-slice,
  .fa-bread-slice {
    color: #FFAB40;

  }

  .card-text {
    margin-left: 50px;
  }
</style>