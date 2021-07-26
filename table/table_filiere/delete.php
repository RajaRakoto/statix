<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){ //recuperation des valeurs (attibuts) d'un table a partir de son ID (methode = GET)
		$sql = "DELETE FROM filiere WHERE id = '".$_GET['id']."'";

		//requete SQL
		if($conn->query($sql)){
			$_SESSION['success'] = "La filiere est supprimE !";
		}
		
		else{
			$_SESSION['error'] = 'Erreur de suppression !';
		}
	}
	else{
		$_SESSION['error'] = 'Erreur de suppression !';
	}

	header('location: index.php');
?>