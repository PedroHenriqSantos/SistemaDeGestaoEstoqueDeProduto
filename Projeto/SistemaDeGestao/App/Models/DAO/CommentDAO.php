<?php

    namespace App\Models\DAO;

    use App\Models\Entity\Comment;
    use App\Models\DAO\BaseDAO;
    
     class CommentDAO extends BaseDAO{

        private $table_name = 'comment';
        private $fields = ["name", "comment"]; 
        private $columns = ":id, :name, :comment"; 

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
                    ":id" => $comment->getid(), 
                    ":name" => $comment->getName(),
                    ":comment" => $comment->getComment(),
                );
                return $this->insert($this->table_name,$column,$values);

            }catch(Exception $error){
                echo "ERROR: ".$error->getMessage();
            }
        }


        public function findAll($where = null,$values = null){
            try{
                $sql = "SELECT *" . " FROM " . $this->table_name;
                if($where && $values){
                    $sql .= " WHERE ".$where;
                }
                
                $resut = $this->select($sql, $values);
                return $resut->fetchAll(\PDO::FETCH_CLASS,Product::class); 
    
            }catch(PDOException $error ){
                echo "ERROR: ".$error->getMessage();
            }
    
        }



}

?>