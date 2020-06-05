<?php
	 require('includes/function.php');

	 if ($_SERVER["REQUEST_METHOD"] == "POST"){
	 	if (!empty($_POST['type_activity']) AND !empty($_POST['day']) AND !empty($_POST['month']) AND !empty($_POST['status']) AND !empty($_POST['description_activity'])) {

	 		$type_activity = htmlspecialchars($_POST['type_activity']);
            $day = htmlspecialchars($_POST['day']);
            $month = htmlspecialchars($_POST['month']);
            $status_activity = htmlspecialchars($_POST['status']);
	 		$description_activity = htmlspecialchars($_POST['description_activity']);
            
            $message = "Saved";
            newActivity($type_activity, $day, $month, $status_activity, $description_activity);
	 	}
	 	else{
	 		$message =  "Veuiller remplir tout les champs";
	 	}
	 }

	 else{
	 	$message = "Veuiller remplir le formulaire";
	 }
     require('includes/newactivite.view.php');
?>