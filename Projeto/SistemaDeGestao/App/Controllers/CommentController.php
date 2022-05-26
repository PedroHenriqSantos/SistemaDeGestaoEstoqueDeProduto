<?php

    namespace App\Controllers;

    use App\Models\DAO\CommentDAO;
    use App\Models\Entity\Comment;

    class CommentController extends Controller{

        public function save(){
            if(isset($_POST['bt_save_comment'])){
                $newComment = new Comment();
                $commentDAO = new CommentDAO();
                if($this->validateFields($commentDAO->getFields())){
                    $newComment->setName($_POST['name_comment']);
                    $newComment->setComment($_POST['comment_comment']);
                    $newComment->setProduct($_POST['fk_id_product']);
                    $commentDAO->saveDates($newComment);
                    $this->redirectToUrl("/portfolio/successComment/" . $_POST['fk_id_product']);
                }
            }
            $this->redirectToUrl("/portfolio/productDetail/" . $_POST['fk_id_product']);
       

        }


    }



?>
