<?php 

function getArticles(){
	try {
			$bdd=new PDO('mysql:host=localhost;dbname=microcms','yenteck','beboila');

		} catch (Exception $e) {
			die("Erreur ".$e->getMessage());
		}


		$articles=$bdd->query("select * from t_article order by art_id desc");

		return $articles;
}