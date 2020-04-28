<?php
	require('admin/includes/function.php');
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['name'], $_POST['email'], $_POST['comment']) AND !empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['comment'])) {
			$name = htmlspecialchars($_POST['name']);
			$email = htmlspecialchars($_POST['email']);
			$comment = htmlspecialchars($_POST['comment']);
			$id_art = $_POST['idart'];

			 if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$email)){

			 	$email = stripcslashes($email);
			 	saveComment($name, $email, $comment, $id_art);
			 	echo "Salut ";
			 	header('Location:article.php?id='.$id_art.'');
			 }
			 else{
			 	echo "L'addresse mail n'est pas valide";
			 }
		}
		else{
			echo "Veuiller remplir tout le champs";
		}
	}

	else{
		echo "Veuiller remplir le formulaire";
	}
 $id_art = $_POST['idart'];
 echo "Id = ".$id_art;
?>