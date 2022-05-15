<?php

    namespace App\Models\DAO;

    use App\Models\Entity\Cart;
    use App\Models\DAO\BaseDAO;
    
     class CartDAO extends BaseDAO{

        private $table_name = 'carrinho';
        private $fields = ["fk_id_product", "quantity"]; 
        private $columns = ":id, :fk_id_product, :quantity"; 

        public function getColumn(){
            return $this->columns;
        }
        public function getFields(){
            return $this->fields;
        }

        public function saveDates(Cart $cart){
            try{
                $column = $this->getColumn();
                
                $values = array(
                    ":id" => $cart->getid(), 
                    ":fk_id_product" => $cart->getProductId(),
                    ":quantity" => $cart->getQuantity(),
                );
                return $this->insert($this->table_name,$column,$values);

            }catch(Exception $error){
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
                return $resut->fetchAll(\PDO::FETCH_CLASS,Cart::class); 
    
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