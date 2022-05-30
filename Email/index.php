<?php
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
session_start();
if($_SESSION['Success']){
    $mailTo = "lucagbomichael92@gmail.com   ";
    $body = "Success bookin";

    $mail = new PHPMailer\PHPMailer\PHPMailer();


    $mail->isSMTP();

    $mail->Host = "mail.smtp2go.com";

    $mail->SMTPAuth = true;

    $mail->Username = "teambarats";
    $mail->Password = "teambarats";

    $mail->SMTPSecure = "tls";
    $mail->Port = "2525";

    $mail->From = "admin@kaelgumapac.me";
    $mail->FromName = "24/7 Balikbayan Fun Resort";

    $mail->addAddress($mailTo, "Lucas");

    $mail->isHTML(true);

    $mail->Subject = "Test lang po lods";
    $mail->Body = $body;

    if(!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }

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
    
</body>
</html>