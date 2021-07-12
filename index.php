<!-- PHP CORE (BEGIN)-->
  <?php
    //IMPORT DBSTATIX (test connexion) 
    require('dbstatix_connect.php');

    //DEFINE all notif default value
    $notif = '';
    $notifClass = '';
  ?>

  <?php
    //INSERTION (notification test)
    if(isset($_POST['submit'])){ //ecouteur d'evenement (sur le boutton "SUBMIT")
      //recuperation de la valeur par $_POST
      $nom = $_POST['nom']; 
      $prenom = $_POST['prenom'];
      $activite = $_POST['activite'];
      $etablissement = $_POST['etablissement'];
      $filiere = $_POST['filiere'];
      $niveau = $_POST['niveau'];
      $freq = $_POST['freq'];
      
      //ajout de l'entrer au base de donnees
      $sql = "INSERT INTO statix_database(nom, prenom, activite, etablissement, filiere, niveau, freq) VALUES('$nom', '$prenom', '$activite', '$etablissement', '$filiere', '$niveau', '$freq')";

      //OUTPUT (result)
      $result = mysqli_query($statix_connexion, $sql); //retourne une valeur boolean
      if($result) { //si les donnees ont ete bien inserE dans la base de donnees
        $notif = "INSERTION avec success !"; //message
        $notifClass="alert-success"; //change class (HTML+CSS)
      }
      else { //si les donnees n'ont pas ete inserE dans la base de donnees
        $notif = "ERREUR d'insertion !"; //message
        $notifClass="alert-danger"; //change class (HTML+CSS)
      }
    }
  ?>

  <!-- <?php

    //bug

    //UPDATE (notification test)
    // if(isset($_GET['update_data'])){ //ecouteur d'evenement (sur le boutton "SUBMIT")
      //recuperation de la valeur par $_POST
      // $nom = $_POST['nom']; 
      // $prenom = $_POST['prenom'];
      // $activite = $_POST['activite'];
      // $etablissement = $_POST['etablissement'];
      // $filiere = $_POST['filiere'];
      // $niveau = $_POST['niveau'];
      // $freq = $_POST['freq'];
      
      //mise a jour de l'entrer au base de donnees
      // $sql = "UPDATE statix_database 
      // SET nom = $nom, prenom = $prenom, activite = $activite, etablissement = $etablissement, filiere = $filiere, niveau = $niveau, freq = $freq
      // WHERE id = $id;
      // ";

      //OUTPUT (result)
  //     $result = mysqli_query($statix_connexion, $sql); //retourne une valeur boolean
  //     if($result) { //si les donnees ont ete bien mis a jour dans la base de donnees
  //       $notif = "MISE A JOUR avec success !"; //message
  //       $notifClass="alert-success"; //change class (HTML+CSS)
  //     }
  //     else { //si les donnees n'ont pas ete mis a jour dans la base de donnees
  //       $notif = "ERREUR de mise a jour !"; //message
  //       $notifClass="alert-danger"; //change class (HTML+CSS)
  //     }
  //   }
  ?> -->
  
  <?php
    //DELETE (notification test)
      if (isset($_POST['del_data'])) {
        $query="DELETE FROM statix_database WHERE id=".$_POST['id'];

        //OUTPUT (result)
      	$result = mysqli_query($statix_connexion, $query); //retourne une valeur boolean
      	if($result){ //si les donnees ont ete bien supprimer de la base de donnees
              $notif= "SUPPRESSION avec success !";
              $notifClass="alert-success";
      	}
      	else { //si les donnees n'ont pas ete supprimer dans la base de donnees
              $notif= "ERREUR de suppression !";
              $notifClass="alert-danger";
        }
      }
  ?>
<!-- PHP CORE (END)-->

<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- META DEFINITION -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1. 0">
    <meta name="project" content="statix">
    <meta name="description" content="intranet web application">
    <meta name="keywords" content="stat,web,app,statistique,centre,multimedia,chart,graph">
    <meta name="author" content="Raja RAKOTONIRINA,Kanto RAMANANDRAIBE"> 

  <!-- CDN IMPORT -->
    <!-- datatables CDN & Jquery CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.4/css/scroller.jqueryui.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.4/css/scroller.dataTables.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- font awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- modalcss CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  
  <!-- CSS LINK -->
    <link rel="stylesheet" href="./css/style.css" />
  
  <!-- TITLE -->
  <title>STATIX APP</title>
  
  <!-- HORLOGE -->
  <script type="text/javascript"> 
         function refresh(){
             var t = 1000; // rafraîchissement en millisecondes
             setTimeout('showDate()',t)
         }
         
         function showDate() {
             var date = new Date()
             var h = date.getHours();
             var m = date.getMinutes();
             var s = date.getSeconds();
             if( h < 10 ){ h = '0' + h; }
             if( m < 10 ){ m = '0' + m; }
             if( s < 10 ){ s = '0' + s; }
             var time = h + 'h : ' + m + 'mn : ' + s + 's'
             document.getElementById('horloge').innerHTML = time;
             refresh();
          }
  </script>

</head>

<body style="background-color:#a8a8a8" onload=showDate();>
  <!-- HEADER -->
  <header>
    <h1 id="head" style="font-size:70px"><span id="statix-text">STATIX</span> table</h1>
  </header>
  
  <!-- MAIN -->
  <main>
    <div class="container-sm" style="background-color:rgb(245, 245, 245)">
        
        <div id="statix-version" style="
          float:right; font-size:22px; border:dashed 6px #696969;
          -moz-border-radius-topleft: -4px;
          -moz-border-radius-topright:0px;
          -moz-border-radius-bottomleft:0px;
          -moz-border-radius-bottomright:0px;
          -webkit-border-top-left-radius:-4px;
          -webkit-border-top-right-radius:0px;
          -webkit-border-bottom-left-radius:0px;
          -webkit-border-bottom-right-radius:0px;
          border-top-left-radius:-4px;
          border-top-right-radius:0px;
          border-bottom-left-radius:0px;
          border-bottom-right-radius:0px;
          padding:12px
        "><strong>STATIX</strong> app<br> v0.0.1 beta</div>
       
        <!-- DATE -->
        <h2><u>Stat</u>: <span style="color:gray">Centre Multimedia</span> | <u>Date</u>: <span style="color:gray"><?php echo date("d/m/Y"); ?></span></h2>
        
        <span id='horloge' style="background-color:#1C1C1C;color:silver;font-size:27px;border-radius:7px;opacity:0.6;padding:7px"></span>


        <br><br>

        <!-- NOTIFICATION - insertion|suppression (generator) -->
        <h5>Notification: </h5>
        <?php
          if (isset($notif)) { ?>
          <div class="form-group">
            <!-- return: class "alert alert-success|alert-danger" -->
            <div class="alert <?php echo $notifClass; ?>"><?php echo $notif; ?>
          </div>
        </div>
        <?php
          }
        ?>

        <!-- MODEL0 (button) -->
          <button type="button" class="btn btn-info btn-sm mb-5" style="float:right; font-size:41px" data-toggle="modal" data-target="#myModal">AJOUTER</button>

      <table id="statix_table" class="display responsive nowrap" cellspacing="0" width="100%">
        <!-- ENTETE DU TABLEAU - statique (html) -->
        <thead>
          <tr>
            <th>Id#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Activite</th>
            <th>Etablissement</th>
            <th>Filiere</th>
            <th>Niveau</th>
            <th>Freq</th>
            <th>Date</th>
            <th>update</th>
            <th>delete</th>
          </tr>
        </thead>
        <!-- TABLEAU - dynamique (par html + php + mysql) -->
        <tbody>
          <?php
            require 'dbstatix_connect.php';
            $sql = "SELECT * FROM statix_database";
            $result = $statix_connexion->query($sql);

            if ($result->num_rows > 0) {
              // sortie des données de chaque ligne par $row
              $index = 0; // index (Id#)
              while($row = $result->fetch_assoc()) {
                  $nom = $row["nom"];
                  $prenom = $row["prenom"];       
                  $activite = $row["activite"];        
                  $etablissement = $row["etablissement"];
                  $filiere = $row["filiere"];
                  $niveau = $row["niveau"];
                  $freq = $row["freq"];
                  $date = $row["date"];
            ?>
            <tr>
              
                <td id="td-index" style="background-color: rgb(185, 185, 185); margin: 10px; border-radius: 100px"><?php $index++; echo "<div align='center'><span id='index' style='font-size:25px; color: #fff'>$index</span></div>"; ?></td> <!-- Id# -->
                <td><?php echo "<strong>$nom</strong>"; ?></td>
                <td><?php echo "<strong>$prenom</strong>"; ?></td>
                <td><?php echo "<span id='act' style='font-size:17px;color:purple'>$activite</span>"; ?></td>
                <td><?php echo "$etablissement"; ?></td>
                <td><?php echo $filiere; ?></td>
                <td><?php echo "<span id='act' style='color:brown'>$niveau</span>"; ?></td>
                <td><?php echo "<div align='center'><span id='freq' style='color:teal;font-size:20px;font-weight: bolder;'>$freq</span></div>"; ?></td>
                <td><?php echo "<i>$date</i>"; ?></td>
                <!-- MANIPULATION - update|delete ($row) -->
                <td>
                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <a href="index.php?id=<?php echo $indexd; ?>"><div align="center"><button class="btn btn-warning btn-sm" name="update_data"><i class="fas fa-edit"></i></div></button></a>
                  </form>
                </td>
                <td>
                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <a href="index.php?id=<?php echo $indexd; ?>"><div align="center"><button class="btn btn-danger btn-sm" name="del_data"><i class="fas fa-trash"></i></div></button></a>
                  </form>
                </td>
              <?php }  ?>
            </tr>
            <?php } ?>  
        </tbody>
      </table>

  <!-- INPUT (modal) -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Header (modal) -->
        <div class="modal-header">
          <h4 class="modal-title">INPUT</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- body (modal) -->
        <div class="modal-body">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            
              <div class="form-group">
                <input type="text" name="nom" class="form-control" placeholder="Entrer Nom">
              </div>
          
              <div class="form-group">
                <input type="text" name="prenom" class="form-control" placeholder="Entrer Prenom">
              </div>

              <div class="form-group">
                <select name="activite" id="activite" class="form-control">
					        <option value="Connexion">Connexion</option>
					        <option value="Etude">Etude</option>
					        <option value="Biblio">Biblio</option>
					        <option value="Biblio">Autres</option>
					      </select>
              </div>

              <div class="form-group">
                <input type="text" name="etablissement" class="form-control" placeholder="Entrer Etablissement">
              </div>

              <div class="form-group">
                <input type="text" name="filiere" class="form-control" placeholder="Entrer Filiere">
              </div>
              
              <div class="form-group">
                <select name="niveau" id="niveau" class="form-control">
					        <option value="Lycee">Primaire</option>
					        <option value="Lycee">College</option>
					        <option value="Lycee">Lycee</option>
					        <option value="L1">L1</option>
					        <option value="L2">L2</option>
					        <option value="L3">L3</option>
					        <option value="M1">M1</option>
					        <option value="M2">M2</option>
					      </select>
              </div>
              
              <div class="form-group">
                <input type="number" name="freq" class="form-control" placeholder="Entrer Frequentation">
              </div>

            <input type="submit" value="Ajouter au BD" name="submit" class="btn btn-success btn-sm" style="font-size:17px;">

           </form> 
        </div>
        
        <!-- footer (modal) -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Sortir</button>
        </div>
        
      </div>
    </div>
  </div>          

  </div>
  
  <!-- GRAPH BUTTON -->
  <div align="center">
    <button class = "btn btn-primary btn-sm" style="padding:11px;-moz-box-shadow:inset 1px 2px 20px #5e5e5e; -webkit-box-shadow:inset 1px 2px 20px #5e5e5e; box-shadow:inset 1px 2px 20px #5e5e5e;"><a href = "./chart/graph.php" style="text-decoration: none; color: #fff; font-size: 75px" target="_blank"><i class="fas fa-chart-bar"></i> GRAPH </a></button>
  </div>

    <br>
  </main>
  <!-- FOOTER -->
  <footer>
      <h5 id="foot">Raja RAKOTONIRINA <span id="etcom-blue">&</span> Kanto RAMANANDRAIBE<br><span id="copy-size">Copyright &copy;</span></h5>
  </footer>

  <!-- DATATABLES core -->
  <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#statix_table').DataTable( {
          deferRender: true,
          select: true,
          scrollY: 400, //remplir la fenetre (main box) | activer le defilement dans le tableau
          scroller: true,
          stateSave: true //garder l'etat de scroller (meme apres une rechargement de la page)
          }
        );
      } );
    </script>

</body>

</html>