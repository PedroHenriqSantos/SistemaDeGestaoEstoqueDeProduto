<?php

    namespace App\Models\DAO;

    use App\Models\Entity\Comment;
    use App\Models\DAO\BaseDAO;
    
     class CommentDAO extends BaseDAO{

        private $table_name = 'comment';
        private $fields = ["name_comment", "comment_comment","fk_id_product"]; 
        private $columns = ":id_comment, :name_comment, :comment_comment, :fk_id_product"; 

        public function getColumn(){
            return $this->columns;
        }
        public function getFields(){
            return $this->fields;
        }

        public function saveDates(Comment $comment){
            try{
                $column = $this->getColumn();
                
                $values = array(
                    ":id_comment" => $comment->getid(), 
                    ":name_comment" => $comment->getName(),
                    ":comment_comment" => $comment->getComment(),
                    ":fk_id_product" => $comment->getProduct(),
                );
                return $this->insert($this->table_name,$column,$values);

            }catch(Exception $error){
                echo "ERROR: ".$error->getMessage();
            }
        }


        public function findByProduct($idProduct){
            try{
                $sql = "SELECT *" . " FROM " . $this->table_name;
                $sql .= " WHERE fk_id_product = :fk_id_product";
                $values = array(
                    ":fk_id_product" => $idProduct, 
                );
                $resut = $this->select($sql, $values);
                $data = $resut->fetchAll(\PDO::FETCH_CLASS,Comment::class);
                if(count($data) > 0){
                    return  $data ; 
                } 
                return array();    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }



}
