
<?php 
//   include('partie_head.php');
     //CONNEXION AVEC LA BASE DES DONNEES
       //declarer les variables
       $nomBaseDeDonnee="crsdi";
       $namTable="appareil.entree";
       $serveur = "localhost";
       $login = "root";
       $pass_serveur = "";
         try
         {
           $connexion = new PDO("mysql:host=$serveur", $login, $pass_serveur); /*connexion avec  le serveur */ 
         $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /* echo "conexion avec le serveur reussi <br/>";*/
         //pour faire la connexion avec la base de donnee
             $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnee", $login, $pass_serveur); /*connexion $nomBaseDeDonnee */ 
           $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          /* echo "conexion  avec base de donnee : ".$nomBaseDeDonnee." Etablie <br/>"; */
       }
         catch(PDOException $e)
           {
             session_start();
             $_SESSION['id'] = $resultat['id'];
             $_SESSION['pseudo'] = $pseudo;
               echo "echec de la connexion : " .$e ->getMessage();
           }
//include('connexiondatabase.php');
$PAGE_NEXT_NEXT;
$PAGE_PREV_PREV;
$Article_max_afficher=4;

function compterArticlesL(){ 
  $artsCellule = [];
  //global $connexion;
  // $resultat = $connexion->query( "SELECT  COUNT(*) AS nbclient FROM competances");
 // $nbArticles = $resultat->fetch();
   $nbArticles[0] = 4;
  return $nbArticles[0];
}

// Calcul des INTERVALLES
$ArtTOT_db = compterArticlesL(); // Nombre d articles totales dans la base de donne
$pageTotales = ceil($ArtTOT_db/$Article_max_afficher);

function calcInterval(){ // calculdes intervalles [<<< 10...20...30 >>>]
  global $pageTotales;
  $tab_interval =[];
  $interval=(int) ($pageTotales/3);
  $tab_interval[0] = $interval;
  $tab_interval[1] = $tab_interval[0] *2;
  $tab_interval[2] = $pageTotales;
  return $tab_interval;
}

function faireArray($valAVANT, $valACTUEL, $valSuivant){
  $tab = [];
  $tab [0] = $valAVANT;
  $tab [1] = $valACTUEL;
  $tab [2] = $valSuivant;
  return $tab;
}

function verifier_GET(){ // cette fonction gere l'URL recu : verifie parmis le _GET[] le quel est recu
  global $PAGE_NEXT_NEXT; // puis elle calcule la page 'AVANT' 'ACTUELLE'  ET 'SUIVANT' 
  global $Article_max_afficher;  // retourne un tableau
  global $PAGE_PREV_PREV;

  if(isset($_GET['pageSuivante']) AND !empty($_GET['pageSuivante']) AND $_GET['pageSuivante'] > 0 ){
      
      $pageNext = $_GET['pageSuivante'];
      $depart = ($pageNext-1) * $Article_max_afficher;
      $PAGE_NEXT_NEXT = $pageNext+1;
      $PAGE_PREV_PREV = $pageNext-1;
      return faireArray($PAGE_PREV_PREV,$pageNext, $PAGE_NEXT_NEXT);      
  }
  elseif(isset($_GET['pageAvant'])  AND !empty($_GET['pageAvant']) AND $_GET['pageAvant'] > 0 ){
    $pagePrev = $_GET['pageAvant'];
    $depart = ($pagePrev-1) * $Article_max_afficher;
    $PAGE_PREV_PREV = $pagePrev -1;
    $PAGE_NEXT_NEXT = $pagePrev +1;
    return faireArray($PAGE_PREV_PREV,$pagePrev, $PAGE_NEXT_NEXT); 

  }
  elseif(isset($_GET['page'])  AND !empty($_GET['page']) AND $_GET['page'] > 0 ){
    $page = $_GET['page'];
    $depart = ($page-1) * $Article_max_afficher;
    $PAGE_PREV_PREV = $page -1;
    $PAGE_NEXT_NEXT = $page +1;
    return faireArray($PAGE_PREV_PREV,$page, $PAGE_NEXT_NEXT); 
  }
  else{
      echo("Nous ne trouvons la page.");
      $page =1;
       $depart = ($page-1) * $Article_max_afficher;
       $PAGE_NEXT_NEXT = $page+1;
      $PAGE_PREV_PREV = $page-1;
      return faireArray($PAGE_PREV_PREV,$page, $PAGE_NEXT_NEXT);    
  }
}



$var = verifier_GET();
$p_Prev =$var[0];
$depart = $var[1];
$p_Next =  $var[2];

$lien_PHP = "afficher_statut.php";
$tb_interval = calcInterval();
$val_1 = $tb_interval[0]; //$interval;
$val_2 = $tb_interval[1]; //$val_1 *2;
$val_3 = $tb_interval[2]; // $pageTotales; ?>




                          