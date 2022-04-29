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
                $sql = "SELECT id_cliente as id_client, nome_cliente as name_client, email_cliente as email_client, telefone_cliente as phone_client, senha_cliente as password_client,  data_nasc_cliente as dateBirth_client" . " FROM " . $this->table_name;
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