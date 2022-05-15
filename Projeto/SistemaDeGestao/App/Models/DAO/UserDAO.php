<?php

    namespace App\Models\DAO;

    use App\Models\Entity\User;
    use App\Models\DAO\BaseDAO;
    
     class UserDAO extends BaseDAO{

        private $table_name = 'users';
        private $fields = ["name", "password", "function", "phone","email"]; 
        private $columns = ":id, :name,  :password, :function, :phone, :email"; 

        public function getColumn(){
            return $this->columns;
        }
        public function getFields(){
            return $this->fields;
        }
        
        public function saveDates(User $user){
            try{
                //Atributos pré-definidos
                $column = $this->getColumn();
                
                //Criando a referência dos atributos pré-definos com os dados correspondentes
                $values = array(
                    ":id" => $user->getid(), 
                    ":name" => $user->getName(),
                    ":password" => $user->getPassword(),
                    ":function" => $user->getFunction(),
                    ":phone" => $user->getPhone(),
                    ":email" => $user->getEmail(),
                );
                //Chama a função de inserir dados da classe BaseDAO
                return $this->insert($this->table_name,$column,$values);

            }catch(Exception $error){ //Caso ocorra um erro, esse é tratado
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
                return $resut->fetchAll(\PDO::FETCH_CLASS,User::class); 
    
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
                return $resut->fetchAll(\PDO::FETCH_CLASS,User::class); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }

        public function findByEmailAndPassword(User $user){
            try{
                $sql = "SELECT * " . " FROM " . $this->table_name;
                $sql .= " WHERE email = :email AND password = :password";
                $values = array( 
                    ":email" => $user->getEmail(),
                    ":password" => $user->getPassword(),
                );
                
                $resut = $this->select($sql, $values);
                return $resut->fetchAll(\PDO::FETCH_CLASS,User::class); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }


        public function updateByID(User $user){
            try{
                //Atributos pré-definidos
                $cols = "id = :id, name = :name, password =  :password, function = :function, phone = :phone, email = :email";
                $where = "id = :id";
                //Criando a referência dos atributos pré-definos com os novos dados correspondentes do usuario que será alterado
                $values = array(
                    ":id" => $user->getid(), 
                    ":name" => $user->getName(),
                    ":password" => $user->getPassword(),
                    ":function" => $user->getFunction(),
                    ":phone" => $user->getPhone(),
                    ":email" => $user->getEmail(),
                );
                //Chama a função de alterar dados da classe BaseDAO
                return $this->update($this->table_name,$cols,$values,$where);
    
            }catch(Exception $error){
                echo "ERROR: ".$error->getMessage();
            }
        }


        public function deleteByID(User $user){
            try{
                $where = "id = :id";
                $values = array(
                    ":id" => $user->getId(), 
                );

                return $this->delete($this->table_name,$values,$where);
    
            }catch(Exception $error){
                echo "ERROR: ".$error->getMessage();
            }
        }

}

?>