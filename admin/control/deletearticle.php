<?php
	require 'includes/function.php';

	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$id = intval($_GET['id']);
		deleteArticle($id);
		$message = "L'article dont l'id est ".$id." a ete suprimmer de la base de des donnees";

	}

	else{

		//header('Location: ../index.php');
		$message = "Veuillez selectioner un article a supprimer";
	}

require 'includes/deletearticle.view.php';
?>