<?php

    namespace App\Models\DAO;

    use App\Models\Entity\Product;
    use App\Models\DAO\BaseDAO;
    
     class ProductDAO extends BaseDAO{

        private $table_name = 'products';
        private $fields = ["name", "description", "price", "quantity", "category"]; 
        private $columns = ":id, :name, :description, :price, :quantity, :image, :fk_id_cat"; 

        public function getColumn(){
            return $this->columns;
        }
        public function getFields(){
            return $this->fields;
        }

        public function saveDates(Product $product){
            try{
                $column = $this->getColumn();
                
                $values = array(
                    ":id" => $product->getid(), 
                    ":name" => $product->getName(),
                    ":description" => $product->getDescription(),
                    ":price" => $product->getPrice(),
                    ":quantity" => $product->getQuantity(),
                    ":image" => $product->getImage(),
                    ":fk_id_cat" => $product->getIdCategory(),
                );
                return $this->insert($this->table_name,$column,$values);

            }catch(Exception $error){
                echo "ERROR: ".$error->getMessage();
            }
        }


        /* Função responsável por buscar todos os usuários dentro do banco de dados */
        public function findAll($where = null,$values = null){
            try{
                $sql = "SELECT *" . " FROM " . $this->table_name;
                if($where && $values){
                    $sql .= " WHERE ".$where;
                }
                
                $resut = $this->select($sql, $values);
                return $resut->fetchAll(\PDO::FETCH_CLASS,Product::class); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }
        public function findById($id){
            try{
                $sql = "SELECT *" . " FROM " . $this->table_name;
                $sql .= " WHERE id = :id";
                $values = array(
                    ":id" => $id, 
                );
                $resut = $this->select($sql, $values);
                return $resut->fetchAll(\PDO::FETCH_CLASS,Product::class); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }

    /* Função responsável por atualizar os dados do usuário por meio do id */
    public function updateByID(Product $product){
        try{
            //Atributos pré-definidos
            $cols = "id = :id, name = :name, description =  :description, price = :price, image = :image, quantity = :quantity, fk_id_cat = :fk_id_cat";
            $where = "id = :id";
            //Criando a referência dos atributos pré-definos com os novos dados correspondentes do usuario que será alterado
                
            $values = array(
                ":id" => $product->getid(), 
                ":name" => $product->getName(),
                ":description" => $product->getDescription(),
                ":price" => $product->getPrice(),
                ":quantity" => $product->getQuantity(),
                ":image" => $product->getImage(),
                ":fk_id_cat" => $product->getIdCategory(),
            );
            //Chama a função de alterar dados da classe BaseDAO
            return $this->update($this->table_name,$cols,$values,$where);

        }catch(Exception $error){
            echo "ERROR: ".$error->getMessage();
        }
    }

    
    public function deleteByID(Product $product){
        try{
            $where = "id = :id";
            $values = array(
                ":id" => $product->getId(), 
            );

            return $this->delete($this->table_name,$values,$where);

        }catch(Exception $error){
            echo "ERROR: ".$error->getMessage();
        }
    }
}

?>