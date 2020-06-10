<?php 
session_start();

if (isset($_SESSION['username'])|| isset($_SESSION['id'])) {

	require('control/application.php');
	
}

else{

	//header('Location:control/login.php');
	//echo "Bojour >>>>>>>>> else";
	require('control/application.php');
}