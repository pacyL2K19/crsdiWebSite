<?php
	 require('includes/function.php');

	 if ($_SERVER["REQUEST_METHOD"] == "POST"){
	 	if ((isset($_POST['description']) AND !empty($_POST['description'])) AND (isset($_FILES['image']) AND !empty($_FILES['image']))) {

	 		$description = htmlspecialchars($_POST['description']);

	 		  if ($_FILES['image']['error'] == 0) {
          
               if ($_FILES['image']['size'] <= 5000000) {

                   $fileinfo = pathinfo($_FILES['image']['name']);
                   $extension = $fileinfo['extension'];
                   $allowed_ex = array('jpg', 'png', 'jpeg', 'gif');

                    if (in_array($extension, $allowed_ex)) {
                    
                       $tmp_name = $_FILES['image']['tmp_name'];
                       $new_name = date('d_m_Y_H_i_s')."_crsdi_dayimg".".".$extension;

                       move_uploaded_file($tmp_name, "img/dayimg/".$new_name);
                       uploadImg($description, $new_name);
                    }

                   else{
                    echo "L'extension n'est pas prise en charge";
                   }
               }

               else{
              echo "L'image est trop volumineux";
               }
           }
           else{
           	echo "Une erreur c'est produite lors du chargement du fichier";
           }

	 	}

	 	else{
	 		echo "Veuiller remplir tout les champs";
	 	}
	 }

	 else{
	 	echo "Veuiller remplir le formulaire";
	 }
  require('includes/newimage.view.php');
?>