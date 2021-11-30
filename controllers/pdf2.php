<?php


    
try {

	$dbh = new PDO('mysql:host=localhost;dbname=web2', 'root', '',
				array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

	$sql = "SELECT * FROM szerelo";     
	$sth = $dbh->query($sql);
	$rows = $sth->fetchAll(PDO::FETCH_ASSOC);
	
}
	catch (PDOException $e) {
	echo "Hiba: ".$e->getMessage();
}


// Include the main TCPDF library
require_once('tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Seres Tamás, Teréki Zalán');
$pdf->SetTitle('Szerelők');
$pdf->SetSubject('Pdf to PCDF');
$pdf->SetKeywords('TCPDF, PDF, ');

// set default header data
$pdf->SetHeaderData("", 25, "Szerelők listája", "Web-programozás II\n3. Beadandó feladat\n".date('Y.m.d',time()));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 11);

// add a page
$pdf->AddPage();

// create the HTML content
$html  = '
<html>
	<head>
		<style>
			table {border-collapse: collapse;}
			th {font-weight: border: 1px solid red; text-align: center;}
			td {border: 1px solid gray;}
		</style>
	</head>
	<body>
		<h1 style="text-align: center; color: black;">Szerelok</h1>
		<table>
			<tr style="background-color: gray; color: white;">
		
			<th style="width: 33%;">&nbsp;<br>Azonosító</th>
			<th style="width: 33%;">&nbsp;<br>NÉV</th>
			<th style="width: 33%;">&nbsp;<br>Kezdés éve</th>
			
			</tr>
';
			$i=1;
foreach($rows as $row) {
	if($i)
		$html .= '
			<tr style="background-color: rgb(255, 255, 255); color: gray;">
		';
	else					
		$html .= '
			<tr style="background-color: gray; color: rgb(255, 255, 255);">
		';
	$j=0;
	foreach($row as $cell) {
		if($j==0)
			$html .= '
				<td style="text-align: center; width: 33%;">
			';
		else if($j < 3)
			$html .= '
				<td style="text-align: center; width: 33%;">
			';
		else if($j == 3)
			$html .= '
				<td style="text-align: center; width: 33%;">
			';
		$html .= $cell;
		$html .= '
				</td>
		';
		$j++;
	}
	$html .= '
			</tr>
	';
	$i = !$i;
}
$html .= '
		</table>
	<body>
</html>';

$pdf->writeHTML($html, true, false, true, false, '');


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('labor3-1.pdf', 'D');



?>
