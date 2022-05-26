<?php

namespace App\Controllers;

use App\Models\DAO\AvaliationDAO;
use App\Models\Entity\Avaliation;

class AvaliationController extends Controller
{

    public function post()
    {
        if (isset($_POST['bt_save_avaliation'])) {
            $newAvaliation = new Avaliation();
            $avaliationDAO = new AvaliationDAO();
            if ($this->validateFields($avaliationDAO->getFields())) {
                $newAvaliation->setRate($_POST['rate_avaliation']);
                $newAvaliation->setProductId($_POST['fk_id_product']);
                $avaliationDAO->saveDates($newAvaliation);
                $this->setViewVar('error', '');
            }
            $this->redirectToUrl("/portfolio/productDetail/" . $_POST['fk_id_product']);
        }
    }

    public function update()
    {
        if (isset($_POST['bt_save'])) {
            $newAvaliation = new Avaliation();
            $avaliationDAO = new AvaliationDAO();

            if ($this->validateFields($avaliationDAO->getFields())) {
                $newAvaliation->setId($_POST['id_rate']);
                $newAvaliation->setRate($_POST['rate_avaliation']);
                $newAvaliation->setProduct($_POST['fk_id_product']);
                $avaliationDAO->updateByID($newAvaliation);
                $this->setViewVar('error', '');
            }

        }
    }
}
