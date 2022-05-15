<?php

    namespace App\Models\DAO;

    use App\Models\Entity\Client;
    use App\Models\DAO\BaseDAO;
    
     class ClientDAO extends BaseDAO{

        private $table_name = 'clients';
        private $fields = ["name", "street", "district", "phone","email","number"]; 
        private $columns = ":id,:name,:district,:street,:phone,:email,:number"; 

        public function getColumn(){
            return $this->columns;
        }
        public function getFields(){
            return $this->fields;
        }
        
        public function saveDates(Client $client){
            try{
                //Atributos pré-definidos
                $column = $this->getColumn();
                
                //Criando a referência dos atributos pré-definos com os dados correspondentes
                $values = array(
                    ":id" => $client->getid(), 
                    ":name" => $client->getName(),
                    ":street" => $client->getStreet(),
                    ":district" => $client->getDistrict(),
                    ":phone" => $client->getPhone(),
                    ":email" => $client->getEmail(),
                    ":number" => $client->getNumber(),
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

        public function findById(User $user){
            try{
                $sql = "SELECT * " . " FROM " . $this->table_name;
                $sql .= " WHERE id = :id";
                $values = array( 
                    ":id" => $user->getId(),
                );
                
                $resut = $this->select($sql, $values);
                return $resut->fetchAll(\PDO::FETCH_CLASS,User::class); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }

}
