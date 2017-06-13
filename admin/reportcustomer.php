<?php
require_once('tcpdf/examples/lang/eng.php');
require_once('tcpdf/tcpdf.php');
include'db.php';
$sel = mysqli_query($con,"select * from booking where id='".$_REQUEST['id']."'");

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
$pdf->AddPage('P','A6');

$pdf->Write(0, 'Customer '.$row['firstname'].' '.$row['lastname'],'',0,'C',true,0,false,false,0);

$pdf->SetFont('helvetica', '', 8);

$pdf->SetCreator(PDF_CREATOR);

$html = '<html>
<head>
<style>
table {
   border-collapse: collapse;
   border-spacing: 0;
   width:400px;
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
<table border="0" cellspacing="0" cellpadding="4">

<tr>
<td width="130"><strong>Name</strong>: </td>
<td>'.$row['firstname'].' '.$row['lastname'].'</td>
</tr>
<tr>
<td><strong>Email Address</strong>: </td>
<td>'.$row['email'].'</td>
</tr>
<tr>
<td><strong>Phone Number</strong>: </td>
<td>'.$row['phone'].'</td>
</tr>
<tr>
<td><strong>Age</strong>: </td>
<td>'.$row['age'].'</td>
</tr>
<tr>
<td><strong>Identity Number</strong>: </td>
<td>'.$row['id_number'].'</td>
</tr>
</table>
</body>
</html>';

$pdf->writeHTML($html, true, 0, true, 0);
$pdf->lastPage();
$pdf->Output($row['firstname'].'_'.$row['lastname'].'_report.pdf', 'I');
?>