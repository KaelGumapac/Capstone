<?php 
require("../PHPMailer-master/src/PHPMailer.php");
require("../PHPMailer-master/src/SMTP.php");
session_start();
$name = $_SESSION['Name'];




$mailTo = $name;


$mail = new PHPMailer\PHPMailer\PHPMailer();


$mail->isSMTP();

$mail->Host = "mail.smtp2go.com";

$mail->SMTPAuth = true;

$mail->Username = "teambarats";
$mail->Password = "teambarats";

$mail->SMTPSecure = "tls";
$mail->Port = "2525";

$mail->From = "24/7balikbayanfunresort@kaelgumapac.me";
$mail->FromName = "24/7 Balikbayan Fun Resort";

$mail->addAddress($mailTo, "Lucas");

$mail->isHTML(true);

$email_template =  'echo $name;';  


$mail ->Body = 'Good Day! /n Welcome to 24/7 Balikbayan Fun Resort /n You have succesfully booked at 24/7 Balikbayan Fun Resort, Please coordinate with the receptionist upon arriving at the venus. Sir/Mam'.$name;
$mail->Subject = "Success booking";


if(!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $name; ?></h1>
</body>
</html>
