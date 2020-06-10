<?php
    //require('includes/function.php');
    require 'includes/function.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

       if ( isset($_POST['title'], $_POST['autor'], $_POST['cellule'], $_POST['article']) AND !empty($_POST['autor']) AND !empty($_POST['title']) AND !empty($_POST['cellule'])  AND !empty($_POST['article'])) {

           $autor = htmlspecialchars($_POST['autor']);
           $title = $_POST['title'];
           $cellule = $_POST['cellule'];
           $article = htmlspecialchars($_POST['article']);

           if ( isset($_FILES['cover']) AND $_FILES['cover']['error'] == 0) {
          
               if ($_FILES['cover']['size'] <= 5000000) {

                   $fileinfo = pathinfo($_FILES['cover']['name']);
                   $extension = $fileinfo['extension'];
                   $allowed_ex = array('jpg', 'png', 'jpeg', 'gif');

                    if (in_array($extension, $allowed_ex)) {
                    
                       $tmp_name = $_FILES['cover']['tmp_name'];
                       $new_name = date('d_m_Y_H_i_s')."_crsdi".".".$extension;
                       move_uploaded_file($tmp_name, "img/uploads/".$new_name); 
                    }

                   else{
                    $message = "L'extension n'est pas prise en charge";
                   }
               }

               else{
              $message = "L'image est trop volumineux";
               }
           }


           else{
             $new_name = "default.png";
           }

           saveArticle($title, $autor, $cellule, $article, $new_name);
           //header('Location: ../index.php') ;
           $message = "L'article est bien enregistré";

       }

       else{
          $message = "Veuiller remplir tout les champs";
       }

    }

    else{
        $message = " Veuiller remplir le formulaire";
    }

    require 'includes/newarticle.view.php';
?>
