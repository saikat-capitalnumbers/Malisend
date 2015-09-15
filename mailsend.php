<?php 

$name = $_POST['username'];
$email = $_POST['useremail'];
$message = $_POST['msg'];
include('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->isSMTP();                                                    // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                                    // Specify main and backup server
$mail->SMTPAuth = true;                                           // Enable SMTP authentication
$mail->Username = 'saikatc@capitalnumbers.com';                // SMTP username
$mail->Password = 'saikatc@123';                               // SMTP password
$mail->SMTPSecure = 'tls';                                     // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                            //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('saikatc@capitalnumbers.com', 'Test alerts'); //Set who the message is to be sent from
$mail->addAddress($email);                    // Add a recipient


$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                 // Set email format to HTML
$mail->Subject = 'Test Email Alerts';
$mail->Body    = '<p>Name : '.$name.'</p>'.'<p>Email : '.$email.'</p>'.'<p>Message : '.$message.'</p>';
if(!$mail->Send())
{
   echo "Error sending: " . $mail->ErrorInfo;;
}
else
{
   echo "Mail sent";
}

?>