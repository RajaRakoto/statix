<?php
	session_start();
	include_once('connection.php'); //test connexion au BD

	if(isset($_POST['add'])){ //ecouteur d'evenement
		$filiereName = $_POST['filiereName'];
		$filiereFreq = $_POST['filiereFreq'];
		//SQL request
		$sql = "INSERT INTO filiere (filiereName, filiereFreq) VALUES ('$filiereName', '$filiereFreq')"; //AJOUT au BD

		//use for MySQLi OOP
		if($conn->query($sql)){ //SUCCESS request
			$_SESSION['success'] = "Filiere enregistrE !";
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