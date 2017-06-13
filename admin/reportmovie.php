<?php
require_once('tcpdf/examples/lang/eng.php');
require_once('tcpdf/tcpdf.php');
include'db.php';
$sel = mysqli_query($con,"select * from movies where id='".$_REQUEST['id']."'");

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

$pdf->Write(0, 'Movie '.$row['name'],'',0,'C',true,0,false,false,0);

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
<td width="130"><strong>Name</strong>: </td>
<td>'.$row['name'].'</td>
</tr>
<tr>
<td><strong>Description</strong>: </td>
<td>'.$row['description'].'</td>
</tr>
<tr>
<td><strong>Genre</strong>: </td>
<td>'.$row['genre'].'</td>
</tr>
<tr>
<td><strong>Rating</strong>: </td>
<td>'.$row['rating'].'</td>
</tr>
<tr>
<td><strong>Year</strong>: </td>
<td>'.$row['year'].'</td>
</tr>
<tr>
<td><strong>Age</strong>: </td>
<td>'.$row['age'].'</td>
</tr>
<tr>
<td><strong>Country</strong>: </td>
<td>'.$row['country'].'</td>
</tr>
<tr>
<td><strong>Price</strong>: </td>
<td>Kshs. '.number_format($row['price'],2).'</td>
</tr>

</table>
</body>
</html>';

$pdf->writeHTML($html, true, 0, true, 0);
$pdf->lastPage();
$pdf->Output($row['name'].' report.pdf', 'I');
?>