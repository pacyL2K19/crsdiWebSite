<?php
	session_start();
	session_destroy();
	header('Location:../control/login.php');
?>