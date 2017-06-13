<?php
require_once('tcpdf/examples/lang/eng.php');
require_once('tcpdf/tcpdf.php');
include'db.php';
$sel=mysqli_query($con,"select movies.name as mname,cinemas.name as cname,movie_periods.id as id,movie_periods.date as date from movie_periods left join movies on movie_periods.movie_id=movies.id left join cinemas on movie_periods.cinema_id=cinemas.id where movie_periods.id='".$_REQUEST['id']."'") or die(mysqli_error($con));
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

$pdf->Write(0, 'Movie Scheduling for movie '.$row['mname'],'',0,'L',true,0,false,false,0);

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
<td width="130"><strong>Movie</strong>: </td>
<td>'.$row['mname'].'</td>
</tr>
<tr>
<td><strong>Cinema Hall</strong>: </td>
<td>'.$row['cname'].'</td>
</tr>
<tr>
<td><strong>Date</strong>: </td>
<td>'.$row['date'].'</td>
</tr>

</table>
</body>
</html>';

$pdf->writeHTML($html, true, 0, true, 0);
$pdf->lastPage();
$pdf->Output($row['mname'].' report.pdf', 'I');
?>