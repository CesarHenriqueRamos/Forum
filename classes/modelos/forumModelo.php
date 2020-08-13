<?php
namespace modelos;
class forumModelo{
   public function listarForum(){
    $listarForum = \MySql::connect()->prepare("SELECT * FROM `tb_forum`");
    $listarForum->execute();
    $forum = $listarForum->fetchAll();
     include('views/forum_home.php');
    }
}
?>