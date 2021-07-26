<?php
	session_start();
	include_once('connection.php'); //test connexion au BD

	if(isset($_POST['add'])){ //ecouteur d'evenement
		$activityName = $_POST['activityName'];
		$activityFreq = $_POST['activityFreq'];
		//SQL request
		$sql = "INSERT INTO activity (activityName, activityFreq) VALUES ('$activityName', '$activityFreq')"; //AJOUT au BD

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