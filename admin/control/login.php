<?php 

//require '../includes/connexionbd.php';
require '../includes/connexionbd.php';

if (isset($_SESSION['username'])) {
    session_start();
    $_SESSION = array();
    session_destroy();
    $error = "Vous etes bien deconnecté";
}

else{
    if (isset($_POST['connexion'])) {

        if (!empty($_POST['username']) || !empty($_POST['userpassword'])) {
            $username = htmlspecialchars($_POST['username']);
            $userpassword = md5($_POST['userpassword']);

            $req = $db->prepare('SELECT id_user FROM users WHERE user_name = :username AND user_password = :userpassword');
            $req->execute(array('username' =>$username,
                                'userpassword'=>$userpassword));
            $data = $req->fetch();

          

            if(!$data){
                 $error = "Mauvaise combinaise";  
            }  

            else{
                session_start();
                $_SESSION['id']= $data['id_user'];
                $_SESSION['username']= $username;
                
                header('Location: ../index.php');
            }

        }

        else{
            $error = "Veuiller remplir tout les champs";
        }
    }

    elseif (isset($_POST['inscription'])) {
        if (!empty($_POST['username'])|| !empty($_POST['usermail']) || !empty($_POST['userpassword']) || !empty($_POST['confirmation'])) {
            if ($_POST['userpassword'] == $_POST['confirmation']) {
                $username = stripcslashes($_POST['username']);
                $usermail = stripcslashes($_POST['usermail']);
                $userpassword = stripcslashes($_POST['userpassword']);

                if (strlen($userpassword)>=6) {
                    if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$usermail)){
                        $username = htmlspecialchars($username);
                        $usermail = htmlspecialchars($usermail);
                        $userpassword = md5($userpassword);
                        $useravatar = "Je suis membre de la CRSDI";

                        $req = $db->prepare('SELECT id_user FROM users WHERE user_name = :username');
                        $req->execute(array('username' =>$username));
                        $data = $req->fetch();

                        if ($data['id']==0) {
                            $db->exec("INSERT INTO users VALUES(NULL,'".$username."','".$userpassword."','".$usermail."',NOW() )");
                            session_start();
                            $_SESSION['id'] = $data['id_user'];
                            $_SESSION['username'] = $username;

                            header('Location:index.php');
                            
                        }

                        else{
                            $error = "Le nom d'utilisateur que vous avez selectionne est deja utilise, Veuiller choisir un autre";
                        }
                    }
                    else{
                        $error = "L'email entre n'est pas valide";
                    }
                }

                else{
                    $error = "Le mot de passe doit avoir au moins 6 caracteres";
                }
            }

            else{
                $error = "Les deux mot de passe ne sont pas identiques";
            }
        }

        else{
            $error = "Veuiller remplir tous les champs";
        }
    }

    else{
        $error = "Veuiller remplir le formulaire";
    }
}

require '../includes/login_form.php';


?>