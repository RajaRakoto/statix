<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){ //ecouteur d'evenement (meme principe que add.php)
		$id = $_POST['id'];
		$levelName = $_POST['levelName'];
		$levelFreq = $_POST['levelFreq'];
		//SQL request
		$sql = "UPDATE level SET levelName = '$levelName', levelFreq = '$levelFreq' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){ //SUCCESS request
			$_SESSION['success'] = 'Mise A Jour reussi !';
		}
		else{
			$_SESSION['error'] = 'Erreur de Mise A Jour !'; //FAIL request
		}
	}
	else{
		$_SESSION['error'] = 'Erreur de Mise A Jour !';
	}

	header('location: index.php');

?>