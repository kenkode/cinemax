<?php
require_once('tcpdf/examples/lang/eng.php');
require_once('tcpdf/tcpdf.php');
include'db.php';
$sel = mysqli_query($con,"select * from cinemas where id='".$_REQUEST['id']."'");

$row = mysqli_fetch_array($sel,MYSQLI_ASSOC);
$pdf=new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setHeaderFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

//set monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setHeaderMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some Language-dependent strings
$pdf->setLanguageArray($l);

//set document information
//set font
$pdf->SetFont('helvetica', '8', 16);

//add a page
$pdf->AddPage('P','A5');

$pdf->Write(0, 'Cinema '.$row['name'].' Hall','',0,'L',true,0,false,false,0);

$pdf->SetFont('helvetica', '', 8);

$pdf->SetCreator(PDF_CREATOR);

$html = '<html>
<head>
<style>
table {
   border-collapse: collapse;
   border-spacing: 0;
   width:600px;
}
tr {
   padding: 1px 0;
}


td,th {
   font-size: 14px;
   color: #000;
}
</style>
</head>
<body>
<br>
<table border="0" cellspacing="0" cellpadding="6">

<tr>
<td width="140"><strong>Name</strong>: </td>
<td>'.$row['name'].'</td>
</tr>
<tr>
<td><strong>Number of seats</strong>: </td>
<td>'.$row['number_of_seats'].'</td>
</tr>
<tr>
<td><strong>Physical Address</strong>: </td>
<td>'.$row['address'].'</td>
</tr>
</table>
</body>
</html>';

$pdf->writeHTML($html, true, 0, true, 0);
$pdf->lastPage();
$pdf->Output($row['name'].' report.pdf', 'I');
?>