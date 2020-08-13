<?php
	include('config.php');
	$forumController = new \controladores\forumController();

	//Listagem dos foruns
	Router::get('/',function() use ($forumController){
		$forumController->home();
	});
	//Listagem dos topicos.
	Router::get('/?',function() use ($forumController){
		$forumController->topicos();
	});
	//Topico/Post single
	Router::get('/?/?',function() use ($forumController){
		$forumController->postSingle();
	});
	if(Router::isExecuted() == false){
		die('Não Existe');
	}

	
?>