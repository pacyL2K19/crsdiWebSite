<?php
require('includes/function.php');

if (isset($_GET['id']) AND !empty($_GET['id'])) {
    $id = intval($_GET['id']);
    $article = getArticle($id);

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
                    echo "L'extension n'est pas prise en charge";
                   }
               }

               else{
              echo "L'image est trop volumineux";
               }
           }


           else{
             $new_name = "default.png";
           }

           $id = $_POST['id'];
           updateArticle($title, $autor, $cellule, $article, $new_name, $id);
           //header('Location: index.php') ;
           echo "L'article a ete modifie";

       }

       else{
          echo "Veuiller remplir tout les champs";
       }

    }

    else{
        echo " Veuiller remplir le formulaire";
    }
   
}

else{
  exit(header('Location:../index.php'));
  //echo "Comment ca va";
}   
 require 'includes/editarticle.view.php';  
?>

