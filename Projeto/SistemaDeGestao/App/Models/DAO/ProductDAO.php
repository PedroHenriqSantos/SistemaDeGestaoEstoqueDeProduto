<?php

namespace App\Models\DAO;

use App\Models\Entity\Product;
use App\Models\DAO\BaseDAO;

class ProductDAO extends BaseDAO
{

    private $table_name = 'products';
    private $fields = ["name_product", "description_product", "price_product", "quantity_product", "category_product"];
    private $columns = ":id_product, :name_product, :description_product, :price_product, :quantity_product, :image_product, :fk_id_cat";

    public function getColumn()
    {
        return $this->columns;
    }
    public function getFields()
    {
        return $this->fields;
    }

    public function saveDates(Product $product)
    {
        try {
            $column = $this->getColumn();

            $values = array(
                ":id_product" => $product->getid(),
                ":name_product" => $product->getName(),
                ":description_product" => $product->getDescription(),
                ":price_product" => $product->getPrice(),
                ":quantity_product" => $product->getQuantity(),
                ":image_product" => $product->getImage(),
                ":fk_id_cat" => $product->getIdCategory(),

            );
            return $this->insert($this->table_name, $column, $values);
        } catch (Exception $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }
    public function findByName($name_product)
    {
        try {
            $sql = "SELECT *" . " FROM " . $this->table_name;
            $sql .= " WHERE name_product LIKE  :name_product ";
            $values = array(
                ":name_product" => '%' . $name_product . '%',
            );
            $resut = $this->select($sql, $values);
            $data =  $resut->fetchAll(\PDO::FETCH_CLASS, Product::class);
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

    /* Função responsável por buscar todos os usuários dentro do banco de dados */
    public function findAll($where = null, $values = null)
    {
        try {
            $sql = "SELECT *" . " FROM " . $this->table_name;
            if ($where && $values) {
                $sql .= " WHERE " . $where;
            }

            $resut = $this->select($sql, $values);

            $data = $resut->fetchAll(\PDO::FETCH_CLASS, Product::class);
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


    public function findAllRanking($where = null, $values = null)
    {
        try {
            $sql = "SELECT * , AVG(rate_avaliation) as rate" . " FROM " . $this->table_name;
            $sql .= " INNER JOIN avaliation on fk_id_product = id_product";
            if ($where && $values) {
                $sql .= " WHERE " . $where;
            }
            $sql .= " GROUP BY(id_product)";
            $sql .= " ORDER BY(rate_avaliation) DESC";
            $resut = $this->select($sql, $values);
            $data = $resut->fetchAll(\PDO::FETCH_CLASS, Product::class);
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
            $sql .= " WHERE id_product = :id_product";
            $values = array(
                ":id_product" => $id,
            );
            $resut = $this->select($sql, $values);
            $data = $resut->fetchAll(\PDO::FETCH_CLASS, Product::class);
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
    public function updateByID(Product $product)
    {
        try {
            //Atributos pré-definidos
            $cols = "id_product = :id_product, name_product = :name_product, description_product =  :description_product, price_product = :price_product, image_product = :image_product, quantity_product = :quantity_product, fk_id_cat = :fk_id_cat";
            $where = "id_product = :id_product";
            //Criando a referência dos atributos pré-definos com os novos dados correspondentes do usuario que será alterado

            $values = array(
                ":id_product" => $product->getid(),
                ":name_product" => $product->getName(),
                ":description_product" => $product->getDescription(),
                ":price_product" => $product->getPrice(),
                ":quantity_product" => $product->getQuantity(),
                ":image_product" => $product->getImage(),
                ":fk_id_cat" => $product->getIdCategory(),
            );
            //Chama a função de alterar dados da classe BaseDAO
            return $this->update($this->table_name, $cols, $values, $where);
        } catch (Exception $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }


    public function deleteByID(Product $product)
    {
        try {
            $where = "id_product = :id_product";
            $values = array(
                ":id_product" => $product->getId(),
            );

            return $this->delete($this->table_name, $values, $where);
        } catch (Exception $error) {
            echo "ERROR: " . $error->getMessage();
        }
    }
}
