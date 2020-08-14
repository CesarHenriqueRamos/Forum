<?php

	namespace controladores;

	class forumController
	{		
		private $forumModel;

		public function __construct(){
			$this->forumModel = new \modelos\forumModelo();
		}


		public function home(){
			if(isset($_POST['cadastrar'])){
				//cadastrar novo topico
				$titulo = $_POST['titulo_forum'];
				$sql = \MySql::connect()->prepare("INSERT INTO `tb_forum` VALUES(null,?)");
				$sql->execute(array($titulo));
				echo '<script>alert("Cadastro Realisado Com Sucesso")</script>';
			}
			$this->forumModel->listarForum();
		}

		public function topicos($idForum){
			if(isset($_POST['cadastrar_topico'])){
				//cadastrar novo topico
				$titulo = $_POST['titulo_topico'];
				$forum_id = $_POST['forum_id'];
				$sql = \MySql::connect()->prepare("INSERT INTO `tb_forum.topicos` VALUES(null,?,?)");
				$sql->execute(array($forum_id,$titulo));
				echo '<script>alert("Cadastro Realisado Com Sucesso")</script>';
			}
			$sql = \MySql::connect()->prepare("SELECT id FROM `tb_forum` WHERE id = ?");
			$sql->execute(array($idForum));
			if($sql->rowCount() == 1){
				$this->forumModel->listarToticos($idForum);
			}else{
				echo 'O forum <strong>Não</strong> Existe';
			}
			
		}

		public function postSingle($idTopico){
			if(isset($_POST['cadastrar_post'])){
				//cadastrar novo topico
				$nome = $_POST['nome'];
				$mensagem = $_POST['mensagem'];
				$topico_id = $_POST['topico_id'];
				$sql = \MySql::connect()->prepare("INSERT INTO `tb_forum.posts` VALUES(null,?,?,?)");
				$sql->execute(array($topico_id,$nome,$mensagem));
				echo '<script>alert("Cadastro Realisado Com Sucesso")</script>';
			}
			$sql = \MySql::connect()->prepare("SELECT id FROM `tb_forum.topicos` WHERE id = ?");
			$sql->execute(array($idTopico));
			if($sql->rowCount() == 1){
				$this->forumModel->listarToticosMensagem($idTopico);
			}else{
				echo 'O forum <strong>Não</strong> Existe';
			}
		}
	}
?>