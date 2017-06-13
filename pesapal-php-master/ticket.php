<?php
require_once('tcpdf/examples/lang/eng.php');
require_once('tcpdf/tcpdf.php');
include'db.php';
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

$pdf->Write(0, 'Movie Ticket','',0,'C',true,0,false,false,0);

$pdf->SetFont('helvetica', '', 8);

$pdf->SetCreator(PDF_CREATOR);

$sel = mysqli_query($con,"select address,movies.name as mname,price,ticket_no,firstname,lastname,cinemas.name as cname,movie_periods.id as id,movie_periods.date as date from movie_periods left join movies on movie_periods.movie_id=movies.id left join cinemas on movie_periods.cinema_id=cinemas.id left join booking on movie_periods.movie_id=booking.movie_id where ticket_no='".$_REQUEST['tno']."'");

$row = mysqli_fetch_array($sel,MYSQLI_ASSOC);

$html = '<html>
<head>
<style>
table {
   border-collapse: collapse;
   border-spacing: 0;
   width:500px;
}
tr {
   padding: 1px 0;
}


td,th {
   font-size: 10px;
   color: #000;
}
</style>
</head>
<body>
<br>
<table border="0" cellspacing="0" cellpadding="4">
<tr><th width="70"><strong>Ticket No.</strong></th>
<th>#'.$row['ticket_no'].'</th></tr>
<tr>
<td><strong>Name</strong>: </td>
<td>'.$row['firstname'].' '.$row['lastname'].'</td>
</tr>
<tr>
<td><strong>Movie</strong>: </td>
<td>'.$row['mname'].'</td>
</tr>
<tr>
<td><strong>Cinema Hall</strong>: </td>
<td>'.$row['cname'].'</td>
</tr>
<tr>
<td><strong>Location</strong>: </td>
<td>'.$row['address'].'</td>
</tr>
<tr>
<td><strong>Amount</strong>: </td>
<td>kshs. '.number_format($row['price'],2).'</td>
</tr>
<tr>
<td colspan="2" style="font-size:16px;"><strong>Paid</strong></td>

</tr>
</table>
</body>
</html>';

$pdf->writeHTML($html, true, 0, true, 0);
$pdf->lastPage();
//$pdf->Output('ticket.pdf', 'I');
$pdf->Output('D:/xampp/htdocs/onlinecinemabooking/pesapal-php-master/temp/'.$row['firstname'].'_'.$row['lastname'].'_ticket.pdf', 'F');
?>