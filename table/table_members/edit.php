<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){ //ecouteur d'evenement (meme principe que add.php)
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$etabEtu = $_POST['etabEtu'];
		$filiereEtu = $_POST['filiereEtu'];
		$levelEtu = $_POST['levelEtu'];
		$freqEtu = $_POST['freqEtu'];

		//SQL request
		$sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address', contact = '$contact', etabEtu = '$etabEtu', filiereEtu = '$filiereEtu', levelEtu = '$levelEtu', freqEtu = '$freqEtu' WHERE id = '$id'";

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