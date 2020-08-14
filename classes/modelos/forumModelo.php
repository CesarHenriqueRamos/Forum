<?php
namespace modelos;
class forumModelo{
   public function listarForum(){
    $listarForum = \MySql::connect()->prepare("SELECT * FROM `tb_forum`");
    $listarForum->execute();
    $forum = $listarForum->fetchAll();
     include('views/forum_home.php');
    }
    public function listarToticos($idForum){
        $forumNome= \MySql::connect()->prepare("SELECT * FROM `tb_forum` WHERE id = ?");
        $forumNome->execute(array($idForum));
        $forumInfo = $forumNome->fetch();
        $listarTopicos = \MySql::connect()->prepare("SELECT * FROM `tb_forum.topicos` WHERE forum_id = ?");
        $listarTopicos->execute(array($idForum));
        $topicos = $listarTopicos->fetchAll();
        include('views/topicos.php');
    }
    public function listarToticosMensagem($idTopico){
        $forumNome= \MySql::connect()->prepare("SELECT * FROM `tb_forum.topicos` WHERE id = ?");
        $forumNome->execute(array($idTopico));
        $forumInfo = $forumNome->fetch();
        $listarPost = \MySql::connect()->prepare("SELECT * FROM `tb_forum.posts` WHERE topico_id = ?");
        $listarPost->execute(array($idTopico));
        $Mensagens = $listarPost->fetchAll();
        include('views/post.php');
    }
}
?>