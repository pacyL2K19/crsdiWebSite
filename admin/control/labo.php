<?php
	require 'includes/function.php';

	if (isset($_POST['laboimg'])) {
		
		if ((isset($_POST['titleimg']) AND !empty($_POST['titleimg'])) AND (isset($_POST['descimg']) AND !empty($_POST['descimg']))) {

			$titleimg = htmlspecialchars($_POST['titleimg']);
			$descimg = htmlspecialchars($_POST['descimg']);

			if ( isset($_FILES['img']) AND $_FILES['img']['error'] == 0) {
          
               if ($_FILES['img']['size'] <= 5000000) {

                   $fileinfo = pathinfo($_FILES['img']['name']);
                   $extension = $fileinfo['extension'];
                   $allowed_ex = array('jpg', 'png', 'jpeg', 'gif');

                    if (in_array($extension, $allowed_ex)) {
                    
                       $tmp_name = $_FILES['img']['tmp_name'];
                       $new_name = date('d_m_Y_H_i_s')."_crsdi".".".$extension;

                       move_uploaded_file($tmp_name, "img/laboimg/".$new_name);
                       newLaboImg($titleimg, $descimg, $new_name);
                       $message = "Bonjour";
                    }

                   else{
                    $message =  "L'extension n'est pas prise en charge";
                   }
               }

               else{
              $message = "L'image est trop volumineux";
               }
           }


           else{
             $new_name = "default.png";
             $message = "image non telecharge";
           }
		}

		else{
			$message = "veuilleur remplir tous les champs";
		}
	}

	else{
		$message = "Failed";
	}

	require 'includes/labo.view.php';
?>