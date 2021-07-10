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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/  css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.  10.25/js/jquery.dataTables.js"></script>

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
  <title>STATIX APPS</title>
  
</head>

<body>
  <!-- HEADER -->
  <header>
    <h2 id="head"><span id="statix-text">STATIX</span> table</h2>
  </header>
  
  <!-- MAIN -->
  <main>

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
        <!-- ENTETE DU TABLEAU -->
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
        <!-- CORPS DU TABLEAU (generE auto par php&mysql)-->
        <tbody>
          <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
          </tr>
          <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
          </tr>
        </tbody>
      </table>

    </div>

  </main>
  
  <!-- FOOTER -->
  <footer>
    <h5 id="foot">Raja RAKOTONIRINA & Kanto RAMANANDRAIBE <br>Copyright &copy;</h5>
  </footer>

</body>

</html>