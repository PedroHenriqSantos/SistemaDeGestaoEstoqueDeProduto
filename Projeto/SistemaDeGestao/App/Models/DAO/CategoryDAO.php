<?php

    namespace App\Models\DAO;

    use App\Models\Entity\Category;
    use App\Models\DAO\BaseDAO;
    
     class CategoryDAO extends BaseDAO{

        private $table_name = 'categorys';
    
        private $fields = ["name"]; 
        private $columns = ":id, :name"; 

        public function getColumn(){
            return $this->columns;
        }
        public function getFields(){
            return $this->fields;
        }
        public function saveDates(Category $category){
            try{
                $column = ":id, :name";
                
                $values = array(
                    ":id" => $category->getid(), 
                    ":name" => $category->getName(),
                );
                return $this->insert($this->table_name,$column,$values);

            }catch(Exception $error){
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
                $sql .= " WHERE id = :id";
                $values = array(
                    ":id" => $id, 
                );
                $resut = $this->select($sql, $values);
                return $resut->fetchAll(\PDO::FETCH_CLASS,Category::class); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }

    /* Função responsável por atualizar os dados do usuário por meio do id */
    public function updateByID(Category $category){
        try{
            //Atributos pré-definidos
            $cols = "id = :id, name = :name";
            $where = "id = :id";
            //Criando a referência dos atributos pré-definos com os novos dados correspondentes do usuario que será alterado
                
            $values = array(
                ":id" => $category->getid(), 
                ":name" => $category->getName(),
            );
            //Chama a função de alterar dados da classe BaseDAO
            return $this->update($this->table_name,$cols,$values,$where);

        }catch(Exception $error){
            echo "ERROR: ".$error->getMessage();
        }
    }

    
    public function deleteByID(Category $category){
        try{
            $where = "id = :id";
            $values = array(
                ":id" => $category->getId(), 
            );

            return $this->delete($this->table_name,$values,$where);

        }catch(Exception $error){
            echo "ERROR: ".$error->getMessage();
        }
    }
}

?>