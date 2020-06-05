<?php
	function connexiondb(){
		try{
			$db = new PDO('mysql:host=localhost;dbname=crsdi', "root", null);
			return $db;
		}
		catch(PDOException $e){
			print("Erreur !: ".$e->getMessage()."<br/>");
			die();
		}
	}

	function saveArticle($title, $autor, $cellule, $article, $new_name){
		$db = connexiondb();

		$sql = "INSERT INTO articles(title, autor, categorie, contenue, cover, date_post) VALUES(:title, :autor, :categorie, :contenue, :cover, NOW())";
		
		$req = $db->prepare($sql);
		$req->bindValue(':title', $title);
		$req->bindValue(':autor', $autor);
		$req->bindValue(':categorie', $cellule);
		$req->bindValue(':contenue', $article);
		$req->bindValue(':cover', $new_name);
		$req->execute();
		return;
	}

	function updateArticle($title, $autor, $cellule, $article, $new_name, $id){
		$db = connexiondb();

		$sql = "UPDATE
					articles
				SET
					title = :title,
					autor = :autor,
					categorie = :categorie,
					contenue = :contenue,
					cover = :cover
				WHERE
					id = :id";
		$req = $db->prepare($sql);
		$req->bindValue(':title', $title);
		$req->bindValue(':autor', $autor);
		$req->bindValue(':categorie', $cellule);
		$req->bindValue(':contenue', $article);
		$req->bindValue(':cover', $new_name);
		$req->bindValue(':id', $id);
		$req->execute();
		return;
	}

	function deleteArticle($id){
		$db = connexiondb();
		$sql = "DELETE FROM
						articles
				WHERE
						id = :id";
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		$req->execute();
		return;
	}

	function getArticles(){

		$db = connexiondb();
		$articles = [];
		$sql = "SELECT
					id,
					title,
					autor,
					categorie,
					SUBSTRING(contenue, 1, 50) as contenue,
					cover,
				    DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
				FROM
					articles
				ORDER BY
					id
				DESC
				LIMIT 
					0, 4";

		
		$req = $db->prepare($sql);
		$req->execute();
		$articles = $req->fetchAll();
		return $articles;
	}

	function getArticlesAdmin(){

		$db = connexiondb();
		$articlesAdmin = [];
		$sql = "SELECT
					id,
					title,
					autor,
					categorie,
					SUBSTRING(contenue, 1, 50) as contenue,
					cover,
				    DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
				FROM
					articles
				ORDER BY
					id
				DESC ";
		
		$req = $db->prepare($sql);
		$req->execute();
		$articlesAdmin = $req->fetchAll();
		return $articlesAdmin;
	}

function getArticle($id){
	$db = connexiondb();

	$sql = "SELECT
				id,
				title,
				autor,
				categorie,
				contenue,
				cover,
				date_post
			FROM
				articles
			WHERE
				id = :id";
	$req = $db->prepare($sql);
	$req->bindValue(':id', $id);
	$req->execute();
	$article = $req->fetch();

	return $article;
}

function getArticlesByCells($cellule){
	
	$db = connexiondb();
	$artsCellule = [];
	$sql = "SELECT
				id,
				title,
				autor,
				categorie,
				cover,
				DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
			FROM 
				articles
			WHERE
				categorie = :cellule
			ORDER BY
				id
			DESC
			LIMIT 
				0, 4";
	$req = $db->prepare($sql);
	$req->bindValue(':cellule', $cellule);
	$req->execute();
	$artsCellule = $req->fetchAll();
	return $artsCellule;
}

function getFirstArticleCellule($cellule){
	$db = connexiondb();
	$firstArt = [];
	$sql = "SELECT
				id,
				title,
				autor,
				categorie,
				



				cover,
				DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
			FROM 
				articles
			WHERE
				categorie = :cellule
			ORDER BY
				id
			DESC
			LIMIT 
				0, 1";
	$req = $db->prepare($sql);
	$req->bindValue(':cellule', $cellule);
	$req->execute();
	$firstArt = $req->fetchAll();
	return $firstArt;
}

function uploadImg($description, $new_name){
	$db = connexiondb();
	$sql = "INSERT INTO 
					dayimg(
							img_description,
							image,
							date_upload
						  ) 
			VALUES  (
							:description, 
							:new_name,
							NOW()
					)";
		
		$req = $db->prepare($sql);
		$req->bindValue(':description', $description);
		$req->bindValue(':new_name', $new_name);
		$req->execute();
		return;
}

function echoImg(){
	$db = connexiondb();
	$dayImg = [];
	$sql = "SELECT
				id,
				img_description,
				image,
				DATE_FORMAT(date_upload, '%d-%m-%Y à %T') AS date_upload
			FROM 
				dayimg
			ORDER BY
				id
			DESC
			LIMIT 
				0, 1";
	$req = $db->prepare($sql);
	$req->execute();
	$dayImg = $req->fetchAll();
	return $dayImg;
}
function echoTroisImage(){ //pas encore de table cree sous cet nom
	$db = connexiondb();
	$departImg = [];
	$sql = "SELECT
				id,
				titre_departement
				desc_departement,
				img_departement,
				DATE_FORMAT(date_upload, '%d-%m-%Y à %T') AS date_upload
			FROM 
				departementsPhotos
			ORDER BY
				id
			DESC
			LIMIT 
				0, 3";
	$req = $db->prepare($sql);
	$req->execute();
	$departImg = $req->fetchAll();
	return $departImg;
}
function newTopic($cellule,$unite, $description, $new_name){
	$db = connexiondb();
	$sql = "INSERT INTO 
					topicrecherche(
							img_topic,
							cellule,
							unite,
							description_topic,
							date_post
						  ) 
			VALUES  (
							:new_name, 
							:cellule,
							:unite,
							:description,
							NOW()
					)";
		
		$req = $db->prepare($sql);
		$req->bindValue(':new_name', $new_name);
		$req->bindValue(':cellule', $cellule);
		$req->bindValue(':unite', $unite);
		$req->bindValue(':description', $description);
		$req->execute();
		return;
}

function getTopics(){
	$db = connexiondb();
	$topics = [];
	$sql = "SELECT
					id_topic,
					img_topic,
					cellule,
					unite,
					description_topic,
				    DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
				FROM
					topicrecherche
				ORDER BY
					id_topic
				DESC
				LIMIT 
					0, 4";
		$req = $db->prepare($sql);
		$req->execute();
		$topics = $req->fetchAll();
		return $topics;
}

function newProject($title, $description,  $new_name,  $cellule,$unite){
	$db = connexiondb();
	$sql = "INSERT INTO 
					projets(
							project_title,
							project_desc,
							project_img,
							project_cellule,
							project_unite,
							date_post
						  ) 
			VALUES  (		
							:title,
							:description,
							:new_name, 
							:cellule,
							:unite,
							NOW()
					)";
		
		$req = $db->prepare($sql);
		$req->bindValue(':title', $title);
		$req->bindValue(':description', $description);
		$req->bindValue(':new_name', $new_name);
		$req->bindValue(':cellule', $cellule);
		$req->bindValue(':unite', $unite);
		$req->execute();
		return;
}

function getProjects($x1, $x2){
	$db = connexiondb();
	$projects = [];
	$sql = "SELECT
					id_project,
					SUBSTRING(project_title,1, 55) as project_title,
					SUBSTRING(project_desc,1, 250) as project_desc,
					project_img,
					project_cellule,
					project_unite,
					stade_realisation,
				    DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
				FROM
					projets
				ORDER BY
					id_project
				DESC
				LIMIT 
					".$x1.",".$x2."";
		$req = $db->prepare($sql);
		$req->execute();
		$projects = $req->fetchAll();
		return $projects;
}
function getOneProject($id){
	$db = connexiondb();
	$project = [];
	$sql = "SELECT
					id_project,
					project_title,
					project_desc,
					project_img,
					project_cellule,
					project_unite,
					stade_realisation,
				    DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
				FROM
					projets
				WHERE id_project = :id_project";
		$req = $db->prepare($sql);
		$req->bindValue(':id_project', $id);
		$req->execute();
		$project = $req->fetchAll();
		return $project;

	}

	function getimagProject($id,$x1,$x2){
	$db = connexiondb();
	$ImagProject = [];
	$sql = "SELECT
					id,
					img_projet,
					desc_img,
					id_projet				    
				FROM
					imageprojets
				WHERE id_projet = :id_projet
				ORDER BY
					id
				DESC
				LIMIT 
					".$x1.",".$x2."";
		$req = $db->prepare($sql);
		$req->bindValue(':id_projet', $id);
		$req->execute();
		$ImagProject = $req->fetchAll();
		return $ImagProject;
	}
	 // $tab = getimagProject(1);
	 // foreach ($tab as $tab) {
	 // 	echo($tab['img_projet'].'<br />');
	 // }
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
function getProjectsByCell($x1, $x2, $cellule){
	$db = connexiondb();
	$projectsCell = [];
	$sql = "SELECT
					id_project,
					project_title,
					project_desc,
					project_img,
					project_cellule,
					project_unite,
					stade_realisation,
				    DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
				FROM
					projets
				WHERE
					project_cellule = :cellule
				ORDER BY
					id_project
				DESC
				LIMIT 
					".$x1.",".$x2."";
		$req = $db->prepare($sql);
		$req->bindValue(':cellule', $cellule);
		$req->execute();
		$projectsCell = $req->fetchAll();
		return $projectsCell;
}

function getFonctionalites($x1, $x2){
	$db = connexiondb();
	$fonctionalites = [];
	$sql = "SELECT
					id,
					cover,
					title,
					contenu,
					lien,
				    DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
				FROM
					fonctionalites
				ORDER BY
					id
				DESC
				LIMIT 
					".$x1.",".$x2."";
		$req = $db->prepare($sql);
		$req->execute();
		$fonctionalites = $req->fetchAll();
		return $fonctionalites;
}
// $tab = getFonctionalites(0, 4);
// 	 foreach ($tab as $tab) {
// 	 	echo ('ok <br />');
// 	 	echo($tab['cover'].'<br />');
// 	 }
// Fonctions des realisations 
// ==============================================================
function getRealisationsByDepart($departement,$x1, $x2){
	$db = connexiondb();
	$realisationsDEPART = [];
	$sql = "SELECT
					id_realisation,
					title_realisation,
					img_realisation,
					real_departement,
					realisation_unite,
				    DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
				FROM
					realisations
				WHERE
					real_departement = :departement
				ORDER BY
					id_realisation
				DESC
				LIMIT 
					".$x1.",".$x2."";
		$req = $db->prepare($sql);
		$req->bindValue(':departement', $departement);
		$req->execute();
		$realisationsDEPART = $req->fetchAll();
		return $realisationsDEPART;
}
function getRealisationsByDepartRecents($x1, $x2){
	$db = connexiondb();
	$realisationsDEPART = [];
	$sql = "SELECT
					id_realisation,
					title_realisation,
					img_realisation,
					real_departement,
					realisation_unite,
				    DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
				FROM
					realisations
				ORDER BY
					id_realisation
				DESC
				LIMIT 
					".$x1.",".$x2."";
		$req = $db->prepare($sql);
		$req->execute();
		$realisationsDEPART = $req->fetchAll();
		return $realisationsDEPART;
}


// $tab = getRealisationsByDepart('Data', 0, 1);
// 	 foreach ($tab as $tab) {
// 	 	echo ('ok <br />');
// 	 	echo($tab['title_realisation'].'<br />');
// 	 }

function newLaboImg($title, $description,  $new_name){
	$db = connexiondb();
	$sql = "INSERT INTO 
					labo(
							title,
							description,
							image,
							date_post
						  ) 
			VALUES  (		
							:title,
							:description,
							:new_name, 
							NOW()
					)";
		
		$req = $db->prepare($sql);
		$req->bindValue(':title', $title);
		$req->bindValue(':description', $description);
		$req->bindValue(':new_name', $new_name);
		$req->execute();
		return;
}

function getLaboImg(){
	$db = connexiondb();
	$laboImg = [];
	$sql = "SELECT
					id,
					title,
					description,
					image,
				    DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
				FROM
					labo
				ORDER BY
					id
				DESC
				LIMIT 
					0, 16";
		$req = $db->prepare($sql);
		$req->execute();
		$laboImg = $req->fetchAll();
		return $laboImg;
}

function newActivity($type_activity, $day, $month, $status, $description){
	$db = connexiondb();
	$sql = "INSERT INTO 
					activite(
							type_activity,
							day,
							month,
							description,
							status
						  ) 
			VALUES  (		
							:type_activity,
							:day,
							:month, 
							:description,
							:status
					)";
		
		$req = $db->prepare($sql);
		$req->bindValue(':type_activity', $type_activity);
		$req->bindValue(':day', $day);
		$req->bindValue(':month', $month);
		$req->bindValue(':description', $description);
		$req->bindValue(':status', $status);
		$req->execute();
		return;
}

function getActivity(){

		$db = connexiondb();
		$activites = [];
		$sql = "SELECT
					id,
					type_activity,
					day,
					month,
					SUBSTRING(description, 1, 50) as description,
					status
				FROM
					activite
				ORDER BY
					id
				DESC";
		
		$req = $db->prepare($sql);
		$req->execute();
		$activites = $req->fetchAll();
		return $activites;
	}

function deleteActivity($id){
		$db = connexiondb();
		$sql = "DELETE FROM
						activite
				WHERE
						id = :id";
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		$req->execute();
		return;
	}

function saveComment($name, $email, $comment, $id_art){
		$db = connexiondb();
		$sql = "INSERT INTO
						comments(
								name_autor,
								email_autor,
								comment,
								id_article,		
								date_comment)
					VALUES(
						:name,
						:email,
						:comment,
						:id_art,
						NOW())";

		$req = $db->prepare($sql);
		$req->bindValue(':name', $name);
		$req->bindValue(':email', $email);
		$req->bindValue(':comment', $comment);
		$req->bindValue(':id_art', $id_art);
		$req->execute();
		return;
	}

	function getComments($id){
	$db = connexiondb();
	$comments = [];
	$sql = "SELECT
				id,
				name_autor,
				email_autor,
				comment,
				date_comment
			FROM
				comments
			WHERE
				id_article = :id
			ORDER BY
				id
			DESC";
	$req = $db->prepare($sql);
	$req->bindValue(':id', $id);
	$req->execute();
	$comments = $req->fetchAll();
	return $comments;
}
//AJOUT DE FONCTION PAR MUHESI
function getCompetances(){

		$db = connexiondb(); // SUBSTRING(contenue, 1, 50) as contenue,
		$competances = [];
		$sql = "SELECT
					ID_competance,
					nom_chercheur,
					competance,
					objectif,
					cover,
				    DATE_FORMAT(date_poste, '%d-%m-%Y à %T') AS date_post
				FROM
					competances
				ORDER BY
					ID_competance
				DESC
				LIMIT 
					0, 4";
		$req = $db->prepare($sql);
		$req->execute();
		$compet = $req->fetchAll();
		return $compet;
	}
 function getcompetancesVoirPlus($debut, $maxArt){ // cette fonction returne les competances bien limités selon le debut et 
  //global $connexion;                           // et le nombre de competance a selectionner <<< 
 
 $db = connexiondb();          // Arg1 = nom de la table, Arg2 = debut, Arg1 = Nombre max a selectionne 
 
  $tab_art ="
    SELECT
          ID_competance,
          nom_chercheur,
          competance,
          objectif,
          cover,
          DATE_FORMAT(date_poste, '%d-%m-%Y à %T') AS date_post 
   FROM competances 
   ORDER BY ID_competance 
   DESC LIMIT ".$debut.",".$maxArt."";

  $req = $db->prepare($tab_art);
		$req->execute();
		$compet = $req->fetchAll();
		return $compet;
 }

function compterCompetances(){ 
  	$nbcomp = [];
    $db = connexiondb(); 
    $sql ="SELECT
     	COUNT(*) AS nbcompetance
     FROM competances";
    $req = $db->prepare($sql);
    $req->execute();
 	$nbcomp = $req->fetch();
    return $nbcomp[0];

}
function compterProjet(){ 
  	$nbcomp = [];
    $db = connexiondb(); 
    $sql ="SELECT
     	COUNT(*) AS nbprojet
     FROM projets";
    $req = $db->prepare($sql);
    $req->execute();
 	$nbcomp = $req->fetch();
    return $nbcomp[0];
}

function ShowCompetance($id){

		$db = connexiondb(); // SUBSTRING(contenue, 1, 50) as contenue,
		$competances = [];
		$sql = "SELECT
					ID_competance,
					nom_chercheur,
					competance,
					contenue,
					objectif,
					cover,
				    DATE_FORMAT(date_poste, '%d-%m-%Y à %T') AS date_post
				FROM
					competances
				WHERE
					ID_competance =$id";
		$req = $db->prepare($sql);
		$req->execute();
		$compet = $req->fetchAll();
		return $compet;
	}	


function getArticlesByCells_pagin($cellule){	 // <<<<<<<<<<<< pagination
	$db = connexiondb();
	$artsCellule = [];
	$sql = "SELECT
				id,
				title,
				autor,
				categorie,
				cover,
				DATE_FORMAT(date_post, '%d-%m-%Y à %T') AS date_post
			FROM 
				articles
			WHERE
				categorie = :cellule
			ORDER BY
				id
			DESC
			LIMIT 
				4, 4";
	
	$sq1 = $db->prepare($sql);
	$sq1->bindValue(':cellule', $cellule);
	$sq1->execute();
	$nbArticles = $sq1->fetchAll();
	return $articles;
}

function compterArticles($cellule){	
	$db = connexiondb();
	$artsCellule = [];
	$sql = "SELECT
				COUNT(*)
				AS nbArticles
			FROM 
				articles
			WHERE
				categorie = :cellule";
	
	$sq1 = $db->prepare($sql);
	$sq1->bindValue(':cellule', $cellule);
	$sq1->execute();
	$nbArticles = $sq1->fetch();
	return $nbArticles[0];
}

//$nb =compterArticles('Technologies');
//echo('nombre d article techno est ' .$nb);

?>