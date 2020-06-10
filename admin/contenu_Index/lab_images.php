
<?php 
  //require('../includes/function.php');
    function connexiondb_(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=crsdi', "root", null);
            return $db;
        }
        catch(PDOException $e){
            print("Erreur !: ".$e->getMessage()."<br/>");
            die();
        }
    }

$PAGE_NEXT_NEXT;
$PAGE_PREV_PREV;
$Article_max_afficher=2;


function compterImages(){ 
  $artsCellule = [];
   $db = connexiondb_(); 

   $sql = ("SELECT  COUNT(*) AS nbclient FROM labo");

   $sq1 = $db->prepare($sql);
   $sq1->execute();
   $nbArticles = $sq1->fetch();
   return $nbArticles[0];
}

// Calcul des INTERVALLES
$ArtTOT_db = compterImages(); // Nombre d articles totales dans la base de donne
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

 function getAticles_voir_plus($nom_table, $debut, $maxArt){ // cette fonction returne les articles bien limités selon le debut et 
  $db = connexiondb_();                                        // et le nombre d'article a selectionner <<< LIMIT 0,5
  $laboImg = [];                                          // Arg1 = nom de la table, Arg2 = debut, Arg1 = Nombre max a selectionne 
  $tab_art = ("SELECT  
            id,
            title,
            description,
            image,
            DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
   FROM labo 
   ORDER BY id DESC LIMIT ".$debut.",".$maxArt);
        $req = $db->prepare($tab_art);
        $req->execute();
        $laboImg = $req->fetchAll();

  return $laboImg;
 }

$var = verifier_GET();
$p_Prev =$var[0];
$depart = $var[1];
$p_Next =  $var[2];

$lien_PHP = "lab_images.php";
$tb_interval = calcInterval();
$val_1 = $tb_interval[0]; //$interval;
$val_2 = $tb_interval[1]; //$val_1 *2;
$val_3 = $tb_interval[2]; // $pageTotales; ?>



<?php
$laboImg =[];
$laboImg = getAticles_voir_plus('labo',$depart, $Article_max_afficher); // ".$Article_max_afficher    

$laboImg['p_Prev'] =$p_Prev;
$laboImg['p_Next'] = $p_Next;
$laboImg['p_tot'] = $pageTotales;

//$nbArticles['nombre'] = 5;
     //$nbArticles['valeur'] = "cool";
    
   echo json_encode($laboImg);


   ?>
                          



    
                   