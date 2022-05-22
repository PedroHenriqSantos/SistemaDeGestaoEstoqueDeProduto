<?php

    namespace App\Models\DAO;

    use App\Models\Entity\Client;
    use App\Models\DAO\BaseDAO;
    
     class ClientDAO extends BaseDAO{

        private $table_name = 'clients';
        private $fields = ["name_client", "street_client", "district_client", "phone_client","email_client","number_client"]; 
        private $columns = ":id_client,:name_client,:district_client,:street_client,:phone_client,:email_client,:number_client"; 

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
                    ":id_client" => $client->getid(), 
                    ":name_client" => $client->getName(),
                    ":street_client" => $client->getStreet(),
                    ":district_client" => $client->getDistrict(),
                    ":phone_client" => $client->getPhone(),
                    ":email_client" => $client->getEmail(),
                    ":number_client" => $client->getNumber(),
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
                $sql .= " WHERE id_client = :id_client";
                $values = array( 
                    ":id_client" => $user->getId(),
                );
                
                $resut = $this->select($sql, $values);
                return $resut->fetchAll(\PDO::FETCH_CLASS,User::class)[0]; 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }

}
