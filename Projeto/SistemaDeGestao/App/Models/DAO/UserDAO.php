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


    /* Função responsável por atualizar os dados do usuário por meio do id */
    public function updateByID(User $user){
        try{
            //Atributos pré-definidos
            $cols = "id_cliente = :id_cliente, nome_cliente = :nome_cliente, email_cliente = :email_cliente, telefone_cliente = :telefone_cliente, senha_cliente = :senha_cliente, data_nasc_cliente = :data_nasc_cliente";
            $where = "id_cliente = :id_cliente";
            //Criando a referência dos atributos pré-definos com os novos dados correspondentes do usuario que será alterado
            $values = array(
                ":id_cliente" => $user->getid(), 
                ":nome_cliente" => $user->getName_client(),
                ":email_cliente" => $user->getEmail_client(),
                ":telefone_cliente" => $user->getPhone_client(),
                ":senha_cliente" => $user->getPassword_client(),
                ":data_nasc_cliente" => $user->getDateBirth_client(),

            );
            //Chama a função de alterar dados da classe BaseDAO

            return $this->update($this->table_name,$cols,$values,$where);

        }catch(Exception $error){
            echo "ERROR: ".$error->getMessage();
        }
    }
}

?>