<?php
	function generateRow(){
		$contents = '';
		include_once('connection.php');
		$sql = "SELECT * FROM level"; //recuperation de tout les attibuts de la table "members"

		//use for MySQLi OOP
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['id']."</td>
				<td>".$row['levelName']."</td>
				<td>".$row['levelFreq']."</td>
				<td>".$row['date']."</td>
			</tr>
			";
		}
		
		return $contents;
	}

	require_once('../../lib/tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("NIVEAU PDF");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	<h2 align="center">NIVEAU</h2>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="5%">ID</th>
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="35%">Niveau</th>
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="30%">TOTAL</th>
				<th style="text-align:center;font-weight:bolder;background-color:#d6d6d6" width="28%">Date</th> 
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('NIVEAU.pdf', 'I');
	

?>