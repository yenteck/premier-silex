<?php 

	
	require_once __DIR__.'/../vendor/autoload.php';

	$app= new Silex\Application();
	


	$app->get('/',function(){

		return " bonjour voici ma premiere appli base sur le framework silex de php" ;
	});


	$app->get("/hello/{name}",function($name) use ($app){
		return "Hello <b>".$app->escape($name)."</b> comment tu va ?";
	});

	$app->run();