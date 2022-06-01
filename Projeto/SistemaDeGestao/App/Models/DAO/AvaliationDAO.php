<?php

namespace App\Models\DAO;

use App\Models\Entity\Cart;
use App\Models\DAO\BaseDAO;
use App\Models\Entity\Avaliation;

class AvaliationDAO extends BaseDAO
{

    private $table_name = 'avaliation';
    private $fields = ["fk_id_product", "rate_avaliation"];
    private $columns = ":id_avaliation, :fk_id_product, :rate_avaliation";

    public function getColumn()
    {
        return $this->columns;
    }
    public function getFields()
    {
        return $this->fields;
    }

    public function saveDates(Avaliation $avaliation)
    {
        try {
            $column = $this->getColumn();

            $values = array(
                ":id_avaliation" => $avaliation->getid(),
                ":fk_id_product" => $avaliation->getProductId(),
                ":rate_avaliation" => $avaliation->getRate(),
            );
            return $this->insert($this->table_name, $column, $values);
        } catch (Exception $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }


    public function findById($id)
    {
        try {
            $sql = "SELECT *" . " FROM " . $this->table_name;
            $sql .= " WHERE id = :id";
            $values = array(
                ":id" => $id,
            );
            $resut = $this->select($sql, $values);
            $data = $resut->fetchAll(\PDO::FETCH_CLASS, Avaliation::class);
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

    /* Função responsável por atualizar os dados do usuário por meio do id */
    public function updateByID(Avaliation $avaliation)
    {
        try {
            //Atributos pré-definidos
            $cols = "id_avaliation = :id_avaliation, fk_id_product =  :fk_id_product, rate_avaliation = :rate_avaliation";
            $where = "id_avaliation = :id_avaliation";
            //Criando a referência dos atributos pré-definos com os novos dados correspondentes do usuario que será alterado
            $values = array(
                ":id_avaliation" => $avaliation->getid(),
                ":fk_id_product" => $avaliation->getProductId(),
                ":rate_avaliation" => $avaliation->getRate(),
            );
            //Chama a função de alterar dados da classe BaseDAO

            return $this->update($this->table_name, $cols, $values, $where);
        } catch (Exception $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }
}
