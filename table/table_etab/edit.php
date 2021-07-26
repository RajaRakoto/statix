<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){ //ecouteur d'evenement (meme principe que add.php)
		$id = $_POST['id'];
		$etabName = $_POST['etabName'];
		$etabFreq = $_POST['etabFreq'];
		//SQL request
		$sql = "UPDATE etab SET etabName = '$etabName', etabFreq = '$etabFreq' WHERE id = '$id'";

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