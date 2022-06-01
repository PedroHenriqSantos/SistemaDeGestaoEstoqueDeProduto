<?php

namespace App\Models\DAO;

use App\Models\Entity\Sale;
use App\Models\DAO\BaseDAO;
use App\Models\Entity\Cart;
use App\Models\Entity\Client;
use App\Models\Entity\Product;

class SaleDAO extends BaseDAO
{

    private $table_name = 'sale';
    private $fields = ["fk_id_cart", "fk_id_client"];
    private $columns = ":id_sale, :fk_id_cart, :fk_id_client";

    public function getColumn()
    {
        return $this->columns;
    }
    public function getFields()
    {
        return $this->fields;
    }

    public function saveDates(Sale $sale)
    {
        try {
            $column = $this->getColumn();

            $values = array(
                ":id_sale" => $sale->getid(),
                ":fk_id_cart" => $sale->getIdCart(),
                ":fk_id_client" => $sale->getIdClient(),
            );
            return $this->insert($this->table_name, $column, $values);
        } catch (Exception $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }


    /* Função responsável por buscar todos os usuários dentro do banco de dados */
    public function findAll($where = null, $values = null)
    {
        try {
            $sql = "SELECT *" . " FROM " . $this->table_name;
            if ($where && $values) {
                $sql .= " WHERE " . $where;
            }

            $resut = $this->select($sql, $values);
            $data = $resut->fetchAll(\PDO::FETCH_CLASS, Sale::class);
            if (!$data) {
                return array();
            }
            if (count($data) > 0) {
                return $data;
            }
            return array();
        } catch (PDOException $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }
    public function findById($id)
    {
        try {
            $sql = "SELECT *" . " FROM " . $this->table_name;
            $sql .= " WHERE id_sale = :id_sale";
            $values = array(
                ":id_sale" => $id,
            );
            $resut = $this->select($sql, $values);
            $data = $resut->fetchAll(\PDO::FETCH_CLASS, Sale::class);
            if (!$data) {
                return array();
            }
            if (count($data) > 0) {
                return $data[0];
            }
            return array();
        } catch (PDOException $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }


    public function findAllSaleWithClientAndCart($functionUser)
    {
        try {
            $sql = "SELECT *" . " FROM " . $this->table_name;
            $sql .= " INNER JOIN clients on clients.id_client = sale.fk_id_client ";
            $sql .= " INNER JOIN cart on cart.id_cart = sale.fk_id_cart ";
            $sql .= " INNER JOIN products on products.id_product = cart.fk_id_product ";
            $sql .= " WHERE typeUser_sale = '" . $functionUser . "'";
            $resut = $this->select($sql);
            $data = $resut->fetchAll(\PDO::FETCH_CLASS);
            if (!$data) {
                return array();
            }
            if (count($data) > 0) {
                return $data;
            }
            return array();
        } catch (PDOException $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }
    /* Função responsável por atualizar os dados do usuário por meio do id */
    public function updateByID(Sale $sale)
    {
        try {
            //Atributos pré-definidos
            $cols = "id_sale = :id_sale, fk_id_cart = :fk_id_cart, fk_id_client =  :fk_id_client, typeUser_sale = :typeUser_sale";
            $where = "id_sale = :id_sale";
            //Criando a referência dos atributos pré-definos com os novos dados correspondentes do usuario que será alterado

            $values = array(
                ":id_sale" => $sale->getid(),
                ":fk_id_cart" => $sale->getIdCart(),
                ":fk_id_client" => $sale->getIdClient(),
                ":typeUser_sale" => $sale->getTypeUser(),

            );
            //Chama a função de alterar dados da classe BaseDAO
            return $this->update($this->table_name, $cols, $values, $where);
        } catch (Exception $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }


    public function deleteByID(Sale $sale)
    {
        try {
            $where = "id_sale = :id_sale";
            $values = array(
                ":id_sale" => $sale->getId(),
            );

            return $this->delete($this->table_name, $values, $where);
        } catch (Exception $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }
}
