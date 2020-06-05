 $(function(){

 	// Ceci concerne la page index 
 	// elle affiche Votre mot de pass incerrect  apres un temps 
 	$('.cash').hide();
 	$('#text_pwd_incorrect').hide();
 	$('#text_pwd_incorrect').slideDown(1000);
 	$('#input_connexion_nom').focus().val('');
 	$('#input_connexion_pwd').val('');
 			// inscription_view/sous_menu_inscription.php

 	// Ceci concerne le menu principal
 	$('#Inscription').click(function(){
 		afficherSousMenu('inscription_view/sous_menu_inscription.php');
 		/* 
 		var t = $('span').text();
 		alert(t);
 		$('.sous_menu').text('hh'); */

 	});
 	$('#Ajouter').click(function(){
 		afficherSousMenu('article_view/sous_menu_article_ajout.php');
 	});
 	$('#Voir').click(function(){
 		afficherSousMenu('article_view/sous_menu_article_voir.php');
 	});
 	//-----------------------------------------------------------
 	$('#Stock').click(function(){
 		afficherSousMenu('inscription_view/sous_menu_inscription.php');
 	});
 	$('#Vente').click(function(){
 		afficherSousMenu('inscription_view/sous_menu_inscription.php');
 	});
 	$('#Rapport').click(function(){
 		afficherSousMenu('inscription_view/sous_menu_inscription.php');
 	});
 	$('#Gestion').click(function(){
 		afficherSousMenu('inscription_view/sous_menu_inscription.php');
 	});
 	function afficherSousMenu(page_sous_menu){
 		$('.sous_menu').hide();
 		$('.sous_menu').load(page_sous_menu, function(){
 			$('.sous_menu').slideDown('slow');
 	    });
 	}


 	// Partie concernat le sous_menu INSCRIPTION

 	$('#menu_insc_personnel').click(function(){
 		afficherResultSousMenu('../c.php');
 	});
 	//$('#sous_menu').load(function(){});
 		$('#menu_insc_admin').click(function(){
 		afficherResultSousMenu('c.php');
 	
 	});	
 	$('#menu_insc_client').click(function(){
 		afficherResultSousMenu('c.php');
 	});
 	// Partie concernat le sous_menu ARTICLE

 	$('#menu_ajout_fam').click(function(){
 		afficherResultSousMenu('article_view/ajouter_une_famille_control.php');
 	});
 		$('#menu_ajout_cat').click(function(){
 		afficherResultSousMenu('article_view/ajouter_une_categorie_control.php');
 	
 	});	
 	$('#menu_insc_client').click(function(){
 		afficherResultSousMenu('c.php');
 	});
 	function afficherResultSousMenu(page_afficher){
 		$('#environnement_travail').fadeOut(500);
 		$('#environnement_travail').load(page_afficher, function(){
 			$('#environnement_travail').slideDown(800);
 			// alert($('#environnement_travail').text());
 	    });

 	}


 	// PARTIE CONCERNANT LA SELECTION ET LE MOTEUR AJAX
      
          $('#input_rech').hide();
          $('#b_click').click(function(){
            boutonRech();
          });
         $('select').change(function() { // A CHAQUE CHANGEMENT FAIT CA
          $('#input_rech').fadeOut(2000);
            afficher();
          });


      function boutonRech(){
           $('#input_rech').fadeOut(2000).fadeIn(2500);
            $('#input_rech').val('');
          $('#input_rech').focus();


         $('#input_rech').keyup(function() {
           // $('#input_rech').css('background-color', 'white');
             //$('#place_rech').html('');
             $('#place2').hide();
             var  q = $('#input_rech').val();
             if(q!=""){
                rechAjax(q, 'recherche_categorie1.php');
              }
              else{
                 $('#place_rech').slideUp(100);
              }
        });

      }
      function afficher(){
          var q = $('select').val();
          rechAjax(q, 'recherche_categorie1.php');      
      }
      // le parametre ' page_de_trait ' va recevoir et traiter les donnees
      function rechAjax(entre_saisi, page_de_trait){    // dEBUT AJAX $_POST['q']
        $.post(page_de_trait,{ 'q': entre_saisi},
                  function(data){
                      $('#place_rech').html(data);
                      $('#place_rech').slideDown(1000);
            });
         } 

         // CETTE PARTIE PERMET DE D AFFICHER DANS LE BALISE 
         // <div id='place2'> </div> :  le nom de la categorie
          $('#place_rech').click(function(){

            var id_cat = $('#id_cate').val();
            var nom = $('#bout_envoi_id_categ').val();

             $('select').val(nom);
            AfficherCategorie(id_cat, 'recherche_categorie2.php');
          });
            function AfficherCategorie(entre_saisi, page_de_trait){    // dEBUT AJAX $_POST['q']
              $.post(page_de_trait,{ 'q': entre_saisi},
                    function(data){
                      $('#input_rech').fadeOut(2000);
                      $('#place_rech').hide();

                      $('#place2').html(data);
                      $('#place2').fadeOut(200).fadeIn(300);
                    });
           }//----------------------------------------------------------------------------



  


/*



              
          $('#input_rech').keyup(function(){
           // $('#input_rech').css('background-color', 'white');
            
             //$('#place_rech').html('');
             
             var  q = $('#input_rech').val();

             if(q!=""){

                 $.post('partie_recherche.php',{ 'q': q},
                  function(data){
                   $('#place_rech').slideUp(100);
                   // $('#place_rech')
                   //$('#place_rech').fadeOut(2000);
                    $('#place_rech').html(data);
                    // $('#place_rech').fadeIn(500);
                    $('#place_rech').slideDown(500);
                 });
              }
              else{
                 $('#place_rech').slideUp(100);
              }
        });
        */
           });