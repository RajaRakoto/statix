<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHART result</title>
  <style type="text/css">
    #chart-container{
        width: 640px;
        height: auto;
    }
  </style>
  <!-- import css dep -->
  <link rel="stylesheet" href="../../lib/chartjs/Chart.min.css">
  <link rel="stylesheet" href="../../styles/chart.css">
	<!-- HEADER - dep -->
	<link rel="stylesheet" href="../../lib-front/styles.css" media="screen">
  <link rel="stylesheet" href="../../styles/accueil.css" media="screen">
	<script class="u-script" type="text/javascript" src="../../lib-front/jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../../lib-front/anim.js" defer=""></script>
</head>
<body>
  <!-- HEADER -->
  <?php include("../../import/header.php")?><br><br>
  <center>
    <div id="chart-container">
      <div class="chart-title">FREQUENTATION PAR ETUDIANT</div>
      <canvas id="mycanvas"></canvas>
    </div>
  
    <!-- import all js dep -->
    <script type="text/javascript" src="../../lib/chartjs/jquery.min.js"></script>
    <script type="text/javascript" src="../../lib/chartjs/Chart.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
  </center>
</body>
</html>