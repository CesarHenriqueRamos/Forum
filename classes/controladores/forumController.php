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

		public function topicos(){
			echo 'topico';
			
		}

		public function postSingle(){
			echo 'Post single';
		}
	}
?>