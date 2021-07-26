<?php
	session_start();
	include_once('connection.php'); //test connexion au BD

	if(isset($_POST['add'])){ //ecouteur d'evenement
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$etabEtu = $_POST['etabEtu'];
		$filiereEtu = $_POST['filiereEtu'];
		$levelEtu = $_POST['levelEtu'];
		$freqEtu = $_POST['freqEtu'];
		//SQL request
		$sql = "INSERT INTO members (firstname, lastname, address, contact, etabEtu, filiereEtu, levelEtu, freqEtu) VALUES ('$firstname', '$lastname', '$address', '$contact', '$etabEtu', '$filiereEtu', '$levelEtu', '$freqEtu')"; //AJOUT au BD

		//use for MySQLi OOP
		if($conn->query($sql)){ //SUCCESS request
			$_SESSION['success'] = "Etudiant enregistrE !";
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