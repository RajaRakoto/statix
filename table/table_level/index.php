<?php
	session_start();
?>


<!DOCTYPE html>
<html>


<head>
	<!-- META -->
	<meta charset="utf-8">
	<?php include("../../import/meta.php") ?>
	<!-- PAGE TITLE -->
	<title>STATIX table - niveau</title>
	<!-- DATATABLE - import -->
	<link rel="stylesheet" type="text/css" href="../../lib/datatable/dataTable.bootstrap.min.css">
	<!-- BOOTSTRAP - import -->
	<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.min.css">
	<!-- CSS - import -->
	<link rel="stylesheet" href="../../styles/head_body_foot.css">
	<link rel="stylesheet" href="../../styles/button.css">
	<link rel="stylesheet" href="../../styles/others.css">
	<link rel="stylesheet" href="../../styles/table.css">
	<!-- HEADER - dep -->
	<link rel="stylesheet" href="../../lib-front/styles.css" media="screen">
  <link rel="stylesheet" href="../../styles/accueil.css" media="screen">
  <script class="u-script" type="text/javascript" src="../../lib-front/anim.js" defer=""></script>
	<!-- HORLOGE - import -->
	<script src="../../import/horloge.js"></script>
</head>


<body onload=showDate();>

		<!-- HEADER -->
		<?php include("../../import/header.php")?>

		<!-- SAVE -->
		<?php include("../../import/exp-imp.php")?>

		<div class="container-fluid" style="
	
	-moz-box-shadow:3px 7px 37px #333333;
	-webkit-box-shadow:3px 7px 37px #333333;
	box-shadow:3px 7px 37px #333333;
	margin: 30px;
	padding: 100px;
	border-radius: 20px;
	background-color: #f2f2f2;

	">

	<div class="container-fluid">
		<!-- TITLE -->
		<h2 class="page-header text-center">- NIVEAU -</h2>
		<!-- VERSION -->
		<?php include("../../import/version.php") ?>
		<!-- DATE+HORLOGE core -->
		<?php include("../../import/date+horloge.php") ?>
		<!-- NOTIFICATION -->
		<br><br> <h5>Notification:</h5>
		<div class="row">
			<div class="row">
			<?php
				include_once("../../import/notification.php")
			?>
		<br><br>
	</div>

	<!-- TABLE CORE -->
			
			<!-- BUTTON (ajouter/pdf) -->
			<?php include("../../import/add+pdf.php")?>
	
	<!-- TABLE CORE (begin) -->
			<div class="row">
			
				<table id="myTable" class="table table-bordered table-striped">

				<!-- table head -->
					<thead>

						<th>ID</th>
						<th>Niveau</th>
						<th>TOTAL</th>
						<th>Date</th>
						<th>Manipulation</th>

					</thead>
				
				<!-- table body -->
					<tbody>

						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM level";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td><span class='table-id'>".$row['id']."</span></td>
									<td><span class='table-name'>".$row['levelName']."</span></td>
									<td><span class='table-freq'>".$row['levelFreq']."</span></td>
									<td><i>".$row['date']."</i></td>
									<td>
										<a href='#edit_".$row['id']."' class='btn btn-warning btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Supprimer</a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}

						?>
					</tbody>

				</table>

			</div>
		</div>
	</div>
</div>

	<!-- IMPORT add modal -->
	<?php include('add_modal.php') ?>

	<!-- GRAPH button -->
	<div class="container" align="center">
<a href="../../chart/chart_level/index.html" target="_blank"><button class="button" style="vertical-align:middle; -moz-box-shadow:inset 2px 2px 25px #000000;
-webkit-box-shadow:inset 2px 2px 25px #000000;
box-shadow:inset 2px 2px 25px #000000;
"><span> GRAPH </span></button></a>
<br><br><br>
</div>

	<!-- FOOTER //@ -->
	<?php include('../../import/footer.php') ?>

	<!-- SWITCH-UP -->
	<?php include("../../import/switch-up.php") ?>

<!-- JAVASCRIPT CORE -->
<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../../lib/datatable/jquery.dataTables.min.js"></script>
<script src="../../lib/datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable -->
<script src="../../import/datatablecore.js"></script>
</body>
</html>