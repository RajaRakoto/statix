<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- META DEFINITION -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1. 0">
    <meta name="project" content="statix">
    <meta name="description" content="intranet application">
    <meta name="keywords" content="stat,web,app,statistique,centre, multimedia,chart,graph">
    <meta name="author" content="Raja RAKOTONIRINA,Kanto RAMANANDRAIBE"> 

  <!-- CDN IMPORT -->
    <!-- datatables CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/  css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.  10.25/js/jquery.dataTables.js"></script>

    <!-- font awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- -->
  
  <!-- CSS IMPORT -->
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

        <!-- MODEL0 (button) -->
          <button type="button" class="btn btn-info btn-sm mb-5" style="float:right" data-toggle="modal" data-target="#myModal">INPUT</button>

      <table id="table_id" class="display">
        <thead>
          <tr>
            <th>Column 1</th>
            <th>Column 2</th>
          </tr>
        </thead>
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