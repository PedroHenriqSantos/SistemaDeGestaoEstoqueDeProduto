<?php

    namespace App\Models\DAO;

    use App\Models\Entity\User;
    use App\Models\DAO\BaseDAO;
    
     class UserDAO extends BaseDAO{

        private $table_name = 'users';
        private $fields = ["name_user", "password_user", "function_user", "phone_user","email_user"]; 
        private $columns = ":id_user, :name_user,  :password_user, :function_user, :phone_user, :email_user"; 

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
                    ":id_user" => $user->getid(), 
                    ":name_user" => $user->getName(),
                    ":password_user" => $user->getPassword(),
                    ":function_user" => $user->getFunction(),
                    ":phone_user" => $user->getPhone(),
                    ":email_user" => $user->getEmail(),
                );
                //Chama a função de inserir dados da classe BaseDAO
                return $this->insert($this->table_name,$column,$values);

            }catch(Exception $error){ //Caso ocorra um erro, esse é tratado
                echo "ERROR: ".$error->getMessage();
            }
        }

        public function findByName($name_user){
            try{
                $sql = "SELECT *" . " FROM " . $this->table_name;
                $sql .= " WHERE name_user LIKE  :name_user ";
                $values = array(
                    ":name_user" => '%' . $name_user . '%' ,
                );
                $resut = $this->select($sql, $values);
                $data =  $resut->fetchAll(\PDO::FETCH_CLASS,User::class); 
                if (!$data) {
                    return array();
                }
                if (count($data) > 0) {
                    return $data[0];
                }
                return array();
                
    
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
                $data =  $resut->fetchAll(\PDO::FETCH_CLASS,User::class); 
                if (!$data) {
                    return array();
                }
                if (count($data) > 0) {
                    return $data;
                }
                return array(); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }
        public function findById($id){
            try{
                $sql = "SELECT *" . " FROM " . $this->table_name;
                $sql .= " WHERE id_user = :id_user";
                $values = array(
                    ":id_user" => $id, 
                );
                $resut = $this->select($sql, $values);
                $data = $resut->fetchAll(\PDO::FETCH_CLASS,User::class);
                if(!$data){
                    return array();
                }
                if(count($data) > 0){
                    return $data[0]; 
                }
                return array();
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }

        public function findByEmailAndPassword(User $user){
            try{
                $sql = "SELECT * " . " FROM " . $this->table_name;
                $sql .= " WHERE email_user = :email_user AND password_user = :password_user";
                $values = array( 
                    ":email_user" => $user->getEmail(),
                    ":password_user" => $user->getPassword(),
                );
                
                $resut = $this->select($sql, $values);
                $data =  $resut->fetchAll(\PDO::FETCH_CLASS,User::class);
                if (!$data) {
                    return array();
                }
                if (count($data) > 0) {
                    return $data[0];
                }
                return array(); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }


        public function updateByID(User $user){
            try{
                //Atributos pré-definidos
                $cols = "id_user = :id_user, name_user = :name_user, password_user =  :password_user, function_user = :function_user, phone_user = :phone_user, email_user = :email_user";
                $where = "id_user = :id_user";
                //Criando a referência dos atributos pré-definos com os novos dados correspondentes do usuario que será alterado
                $values = array(
                    ":id_user" => $user->getid(), 
                    ":name_user" => $user->getName(),
                    ":password_user" => $user->getPassword(),
                    ":function_user" => $user->getFunction(),
                    ":phone_user" => $user->getPhone(),
                    ":email_user" => $user->getEmail(),
                );
                //Chama a função de alterar dados da classe BaseDAO
                return $this->update($this->table_name,$cols,$values,$where);
    
            }catch(Exception $error){
                echo "ERROR: ".$error->getMessage();
            }
        }


        public function deleteByID(User $user){
            try{
                $where = "id_user = :id_user";
                $values = array(
                    ":id_user" => $user->getId(), 
                );

                return $this->delete($this->table_name,$values,$where);
    
            }catch(Exception $error){
                echo "ERROR: ".$error->getMessage();
            }
        }

}
