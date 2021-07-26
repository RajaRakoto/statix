<html>
<head>
<style>
	body {
	width:600px;
	text-align:center;
	}
	.sql-import-response {
		padding: 10px;
	}
	.success-response {
		background-color: #a8ebc4;
	    border-color: #1b7943;
	    color: #1b7943;
	}
	.error-response {
		border-color: #d96557;
    	background: #f0c4bf;
    	color: #d96557;
	}
</style>
</head>
<body>
 
<!-- MESSAGE -->
<?php
echo "<script>confirm(\"Veuillez renommer la base de donnees a importer par 'restore.sql' dans le dossier '/opt/lampp/htdocs/project/STATIX/db/statix_restore'... Sinon le processus de restauration ne marchera pas\")</script>";
?>

<?php

// DBNAME
$dbname = 'statix_db';

$conn =new mysqli('localhost', 'root', '' , $dbname);

$query = '';
$sqlScript = file('./statix_restore/restore.sql');
foreach ($sqlScript as $line)	{
	
	$startWith = substr(trim($line), 0 ,2);
	$endWith = substr(trim($line), -1 ,1);
	
	if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
		continue;
	}
		
	$query = $query . $line;
	if ($endWith == ';') {
		mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">ERREUR DE l\'IMPORTATION ! <b>' . $query. '</b></div>');
		$query= '';		
	}
}
echo '<div class="success-response sql-import-response">IMPORTATION AVEC SUCCESS !</div>';

?>
</body>
</html>
