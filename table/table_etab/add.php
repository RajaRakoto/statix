<?php
	session_start();
	include_once('connection.php'); //test connexion au BD

	if(isset($_POST['add'])){ //ecouteur d'evenement
		$etabName = $_POST['etabName'];
		$etabFreq = $_POST['etabFreq'];
		//SQL request
		$sql = "INSERT INTO etab (etabName, etabFreq) VALUES ('$etabName', '$etabFreq')"; //AJOUT au BD

		//use for MySQLi OOP
		if($conn->query($sql)){ //SUCCESS request
			$_SESSION['success'] = "Etablissement enregistrE !";
		}
		
		else{
			$_SESSION['error'] = "Erreur d'enregistrement !"; //FAIL request
		}
	}
	else{
		$_SESSION['error'] = "Erreur d'enregistrement !";
	}

	header('location: index.php');
?>