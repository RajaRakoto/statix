<?php
	session_start();
	include_once('connection.php'); //test connexion au BD

	if(isset($_POST['add'])){ //ecouteur d'evenement
		$levelName = $_POST['levelName'];
		$levelFreq = $_POST['levelFreq'];
		//SQL request
		$sql = "INSERT INTO level (levelName, levelFreq) VALUES ('$levelName', '$levelFreq')"; //AJOUT au BD

		//use for MySQLi OOP
		if($conn->query($sql)){ //SUCCESS request
			$_SESSION['success'] = "Activite enregistrE !";
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