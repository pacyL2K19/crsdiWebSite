  <?php

   try{
        $db = new PDO('mysql:host=localhost; dbname=crsdi', 'root', '');
    }

    catch(Exception $e)
		{
		  die('Erreur :'.$e->getMessage());
	}