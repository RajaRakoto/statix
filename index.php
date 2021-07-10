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
      
      //ajout de l'entrer au base de donnees
      $sql = "INSERT INTO statix_database(nom, prenom, activite, etablissement, filiere, niveau) VALUES('$nom', '$prenom', '$activite', '$etablissement', '$filiere', '$niveau')";

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
    <!-- datatables CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css">

    <!-- font awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- modalcss CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  
  <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css" />
  
  <!-- TITLE -->
  <title>STATIX APP</title>
  
</head>

<body>
  <!-- HEADER -->
  <header>
    <h2 id="head"><span id="statix-text">STATIX</span> table</h2>
  </header>
  
  <!-- MAIN -->

    <div class="container">

        <!-- NOTIFICATION - insertion|suppression (generator) -->
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
          <button type="button" class="btn btn-info btn-sm mb-5" style="float:right" data-toggle="modal" data-target="#myModal">INPUT</button>

      <table id="statix_table" class="display responsive nowrap" cellspacing="0" width="100%">
        <!-- ENTETE DU TABLEAU - statique (html) -->
        <thead>
          <tr>
            <th>No#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Activite</th>
            <th>Etablissement</th>
            <th>Filiere</th>
            <th>Niveau</th>
            <th>Date</th>
            <th>MANIPULATION</th>
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
              $i = 0; // index (No#)
              while($row = $result->fetch_assoc()) {
                  $nom = $row["nom"];
                  $prenom = $row["prenom"];       
                  $activite = $row["activite"];        
                  $etablissement = $row["etablissement"];
                  $filiere = $row["filiere"];
                  $niveau = $row["niveau"];
                  $date = $row["date"];
            ?>
            <tr>
                <td><?php $i++; echo $i; ?></td> <!-- No# -->
                <td><?php echo $nom; ?></td>
                <td><?php echo $prenom; ?></td>
                <td><?php echo $activite; ?></td>
                <td><?php echo $etablissement; ?></td>
                <td><?php echo $filiere; ?></td>
                <td><?php echo $niveau; ?></td>
                <td><?php echo $date; ?></td>
                <!-- MANIPULATION ($row) -->
                <td>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <a href="index.php?id=<?php echo $id; ?>"><button class="btn btn-danger btn-sm" name="del_data"><i class="fas fa-trash"></i></button></a>
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
                <input type="text" name="activite" class="form-control" placeholder="Entrer Activite">
              </div>

              <div class="form-group">
                <input type="text" name="etablissement" class="form-control" placeholder="Entrer Etablissement">
              </div>

              <div class="form-group">
                <input type="text" name="filiere" class="form-control" placeholder="Entrer Filiere">
              </div>
              
              <div class="form-group">
                <input type="text" name="niveau" class="form-control" placeholder="Entrer Niveau">
              </div>

            <input type="submit" value="Ajouter au BD" name="submit" class="btn btn-success btn-sm">

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
    <button class = "btn btn-primary btn-sm"><a href = "graph.php" style = "text-decoration: none; color: #fff;"><i class="fas fa-chart-bar"></i> GRAPH </a></button>
  </div>

    <br>

  <!-- FOOTER -->
  <footer>
      <h5 id="foot">Raja RAKOTONIRINA <span id="etcom-blue">&</span> Kanto RAMANANDRAIBE<br><span id="copy-size">Copyright &copy;</span></h5>
  </footer>

  <!-- DATATABLES core //bug -->
  <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('#statix_table').DataTable();
    } );
  </script>
</body>

</html>