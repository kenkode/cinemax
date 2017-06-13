<?php
error_reporting(0);
include'db.php';
session_start();

             $ad = mysqli_query($con,"select * from admin");

             $admin = mysqli_fetch_array($ad,MYSQLI_ASSOC);

$sel = mysqli_query($con,"select movies.name as mname,cinemas.name as cname,movie_periods.id as id,movie_periods.date as date from movie_periods left join movies on movie_periods.movie_id=movies.id left join cinemas on movie_periods.cinema_id=cinemas.id where movie_id='".$_REQUEST['id']."'");

$array = mysqli_fetch_array($sel,MYSQLI_ASSOC);

echo 'Thank for Booking '.$array['mname'].' movie! Please check your email for your ticket...<br/>
You will be required to give the the ticket upon arrival at the cinema hall....<a href="../index.php">Go back</a>
';

$path = 
$db=mysqli_query($con,"UPDATE booking SET status = 1 WHERE ticket_no ='".$_REQUEST['tno']."'") or die(mysqli_error($con));
   if($db){
     $sql = mysqli_query($con,"select * from booking where ticket_no='".$_REQUEST['tno']."'");

     $user = mysqli_fetch_array($sql,MYSQLI_ASSOC);
   
      include 'ticket.php';
	  require 'PHPMailer-master/PHPMailerAutoload.php';

$to=$user['email'];
$subject="Cinemax Movie Booking Confirmation";
$body='Hello '.$user['firstname'].' '.$user['lastname'].' , <br/> <br/> This is to confirm that you have successfully booked <strong><u>'.$array['mname'].'</u></strong>. The following are the details:<br><br><table><tr><td> 1. <strong>Ticket number</strong> : </td><td>#'.$user['ticket_no'].' </td></tr><tr><td>2. <strong>Movie</strong> : </td><td>'.$array['mname'].'</td></tr><tr><td>3. <strong>Cinema Hall</strong> </td><td>'.$array['cname'].'</td></tr><tr><td>4. <strong>Amount</strong> </td><td>Kshs. '.number_format($_REQUEST['amount'],2).'</td></tr></table><br/>Please remember that you will be required to present the attached ticket once you arrive at the cinema hall...<br/><br/><br/><br/> Thank you for visiting our site and booking a movie... For more information visit our site on <a href="http://localhost/onlinecinemabooking/index.php">cinemax.com</a>.<br/> <br/>';
	  
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
//$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "kevin.muchiri@aiesec.net";

//Password to use for SMTP authentication
$mail->Password = "muchirimaina1992";

//Set who the message is to be sent from
$mail->setFrom('info@cinemax.com', 'CINEMAX');

//Set an alternative reply-to address
$mail->addReplyTo($admin['email'], $admin['username']);

//Set who the message is to be sent to
$mail->addAddress($to, $user['firstname'].' '.$user['lastname']);

//Set the subject line
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($body);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('D:/xampp/htdocs/onlinecinemabooking/pesapal-php-master/temp/'.$user['firstname'].'_'.$user['lastname'].'_ticket.pdf');
$mail->send();
//send the message, check for errors
/*if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}*/
	

unlink('D:/xampp/htdocs/onlinecinemabooking/pesapal-php-master/temp/'.$user['firstname'].'_'.$user['lastname'].'_ticket.pdf');		  
 }
?>