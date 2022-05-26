<?php

    namespace App\Models\DAO;

    use App\Models\Entity\Category;
    use App\Models\DAO\BaseDAO;
    
     class CategoryDAO extends BaseDAO{

        private $table_name = 'categorys';
    
        private $fields = ["name_category"]; 
        private $columns = ":id_category, :name_category"; 

        public function getColumn(){
            return $this->columns;
        }
        public function getFields(){
            return $this->fields;
        }
        public function saveDates(Category $category){
            try{
                $column = ":id_category, :name_category";
                
                $values = array(
                    ":id_category" => $category->getid(), 
                    ":name_category" => $category->getName(),
                );
                return $this->insert($this->table_name,$column,$values);

            }catch(Exception $error){
                echo "ERROR: ".$error->getMessage();
            }
        }
        public function findByName($name_category){
            try{
                $sql = "SELECT *" . " FROM " . $this->table_name;
                $sql .= " WHERE name_category LIKE  :name_category ";
                $values = array(
                    ":name_category" => '%' . $name_category . '%' ,
                );
                $resut = $this->select($sql, $values);
                return $resut->fetchAll(\PDO::FETCH_CLASS,Category::class); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            } 
        }
        /* Função responsável por buscar todos os usuários dentro do banco de dados */
        public function findAll($where = null,$values = null){
            try{
                $sql = "SELECT * " . " FROM " . $this->table_name;
                if($where && $values){
                    $sql .= " WHERE ".$where;
                }
                
                $resut = $this->select($sql, $values);
                return $resut->fetchAll(\PDO::FETCH_CLASS,Category::class); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }
        public function findById($id){
            try{
                $sql = "SELECT *" . " FROM " . $this->table_name;
                $sql .= " WHERE id_category = :id_category";
                $values = array(
                    ":id_category" => $id, 
                );
                $resut = $this->select($sql, $values);
                return $resut->fetchAll(\PDO::FETCH_CLASS,Category::class)[0]; 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }

    /* Função responsável por atualizar os dados do usuário por meio do id */
    public function updateByID(Category $category){
        try{
            //Atributos pré-definidos
            $cols = "id_category = :id_category, name_category = :name_category";
            $where = "id_category = :id_category";
            //Criando a referência dos atributos pré-definos com os novos dados correspondentes do usuario que será alterado
                
            $values = array(
                ":id_category" => $category->getid(), 
                ":name_category" => $category->getName(),
            );
            //Chama a função de alterar dados da classe BaseDAO
            return $this->update($this->table_name,$cols,$values,$where);

        }catch(Exception $error){
            echo "ERROR: ".$error->getMessage();
        }
    }

    
    public function deleteByID(Category $category){
        try{
            $where = "id_category = :id_category";
            $values = array(
                ":id_category" => $category->getId(), 
            );

            return $this->delete($this->table_name,$values,$where);

        }catch(Exception $error){
            echo "ERROR: ".$error->getMessage();
        }
    }
}

?>