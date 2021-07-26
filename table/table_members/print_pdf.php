<?php
	function generateRow(){
		$contents = '';
		include_once('connection.php');
		$sql = "SELECT * FROM members"; //recuperation de tout les attibuts de la table "members"

		//use for MySQLi OOP
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['id']."</td>
				<td>".$row['firstname']."</td>
				<td>".$row['lastname']."</td>
				<td>".$row['address']."</td>
				<td>".$row['contact']."</td>
				<td>".$row['etabEtu']."</td>
				<td>".$row['filiereEtu']."</td>
				<td>".$row['levelEtu']."</td>
				<td>".$row['freqEtu']."</td>
				<td>".$row['date']."</td>
			</tr>
			";
		}
		
		return $contents;
	}

	require_once('../../lib/tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("ETUDIANT PDF");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 8);  
    $pdf->AddPage();  
    $content = '';  
    $content = '
      	<h2 align="center">ETUDIANTS</h2>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
        <th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="5%">ID</th>
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="14%">Nom</th>
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="10%">Prenom</th>
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="10%">Address</th> 
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="20%">Contact</th> 
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="12%">Etab</th> 
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="12%">Filiere</th> 
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="4%">Niveau</th> 
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="4%">Freq<br>(total)</th> 
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="10%">Date<br>(d.v)</th> 
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('ETUDIANTS_TABLE.pdf', 'I');
	

?>