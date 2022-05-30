<?php 
require("../PHPMailer-master/src/PHPMailer.php");
require("../PHPMailer-master/src/SMTP.php");
require("../../admin/includes/db_inc.php");
session_start();
$id = rand(10,1000);
date_default_timezone_set('Asia/Manila');
$date = date("mdy");
$date2 = date("m-d-y : h-m-s");
$guest_id = "BBFR-$date-$id";
$name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$kasama = $_SESSION['kasama'];
$check_in = $_SESSION['check_in'];
$check_out = $_SESSION['check_out'];
$pick_up = $_SESSION['pick_up'];
$message = $_SESSION['message'];
$amount = $_SESSION['amount'];
$room = $_SESSION['room'];
$amount - $_SESSION['amount'];
$children = $_SESSION['children'];
$rightamount = $_SESSION['rightamount'];
$invoice_id = uniqid();
$transaction_id = "PAYID-$invoice_id";
$status = 'Success';
$method = 'Gcash';
$fullname = "$name" . " $last_name";

    $sql = "INSERT into booking (date, guest_id, invoice_id, transaction_id, first_name, last_name, full_name, email, phone, kasama, children, method, room, status, check_in, check_out, pick_up, message, totalprice) 
                  VALUES ('$date2','$guest_id', '$invoice_id', '$transaction_id', '$name', '$last_name' ,'$fullname','$email', '$phone','$kasama','$children', '$method' , '$room', '$status', '$check_in', '$check_out', '$pick_up', '$message', '$amount')";
    $sample = mysqli_query($data, $sql);




$mailTo = $email;


$mail = new PHPMailer\PHPMailer\PHPMailer();


$mailTo = $email;


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



$mail->Subject = "Success booking";
ob_start();
include 'receipt.php';
$email_template = ob_get_clean();

$mail->Body = $email_template;


if(!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
<style>
    img{
  float: right;
  max-width: 150px;
  width: 100%;
  height: auto;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}
@media print {
  @page{
    size: A4;
    margin:0;
  }
  #noprint {
    visibility: hidden;
  }
}


td, th {
  font-size: 12px;
  text-align: left;
  padding: 2px;
}

.receipt-content .invoice-wrapper {
  background: #FFF;
  border: 1px solid #CDD3E2;
  box-shadow: 0px 0px 1px #CCC;
  padding: 40px 40px 60px;
  margin-top: 40px;
  border-radius: 4px; 
}

.receipt-content .invoice-wrapper .payment-details span {
  color: #A9B0BB;
  display: block; 
}
.receipt-content .invoice-wrapper .payment-details a {
  display: inline-block;
  margin-top: 5px; 
}

.receipt-content .invoice-wrapper .line-items .print a:hover {
  text-decoration: none;
  border-color: #333;
  color: #333; 
}

.receipt-content {
  background: #ECEEF4; 
}
@media (min-width: 1200px) {
  .receipt-content .container {width: 900px; } 
}

.receipt-content .logo {
  text-align: center;
  margin-top: 50px; 
}

.receipt-content .logo a {
  font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
  font-size: 36px;
  letter-spacing: .1px;
  color: #555;
  font-weight: 300;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear; 
}

.receipt-content .invoice-wrapper .intro {
  font-size: 12px;
  text-align: left;
  padding: 2px;
  border-left: solid 3px rgb(24, 24, 201);
}

.receipt-content .invoice-wrapper .payment-info {
  margin-top: 25px;
  padding-top: 15px; 
}

.receipt-content .invoice-wrapper .payment-info span {
  color: #A9B0BB; 
}

.receipt-content .invoice-wrapper .payment-info strong {
  display: block;
  color: #444;
  margin-top: 3px; 
}

@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .payment-info .text-right {
  text-align: left;
  margin-top: 20px; } 
}
.receipt-content .invoice-wrapper .payment-details {
  margin-top: 30px;
  padding-top: 20px;
  line-height: 22px; 
}
.receipt-content .invoice-wrapper .payment-details .print{
  margin:0 auto;
  display:block;
  float: right;
  border: 1px solid #9CB5D6;
  padding: 13px 13px;
  border-radius: 5px;
  color: #708DC0;
  font-size: 13px;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear; 
}


@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .payment-details .text-right {
  text-align: left;
  margin-top: 20px; } 
}
.receipt-content .invoice-wrapper .line-items {
  margin-top: 40px; 
}
.receipt-content .invoice-wrapper .line-items .headers {
  color: #A9B0BB;
  font-size: 13px;
  letter-spacing: .3px;
  border-bottom: 2px solid #EBECEE;
  padding-bottom: 4px; 
}
.receipt-content .invoice-wrapper .line-items .items {
  margin-top: 8px;
  border-bottom: 2px solid #EBECEE;
  padding-bottom: 8px; 
}
.receipt-content .invoice-wrapper .line-items .items .item {
  padding: 10px 0;
  color: #696969;
  font-size: 15px; 
}
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item {
  font-size: 13px; } 
}
.receipt-content .invoice-wrapper .line-items .items .item .amount {
  letter-spacing: 0.1px;
  color: #84868A;
  font-size: 16px;
 }
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item .amount {
  font-size: 13px; } 
}

.receipt-content .invoice-wrapper .line-items .total {
  margin-top: 30px; 
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes {
  float: left;
  width: 40%;
  text-align: left;
  font-size: 13px;
  color: #7A7A7A;
  line-height: 20px; 
}

@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .total .extra-notes {
  width: 100%;
  margin-bottom: 30px;
  float: none; } 
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
  display: block;
  margin-bottom: 5px;
  color: #454545; 
}

.receipt-content .invoice-wrapper .line-items .total .field {
  margin-bottom: 7px;
  font-size: 14px;
  color: #555; 
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total {
  margin-top: 10px;
  font-size: 16px;
  font-weight: 500; 
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
  color: #20A720;
  font-size: 16px; 
}

.receipt-content .invoice-wrapper .line-items .total .field span {
  display: inline-block;
  margin-left: 20px;
  min-width: 85px;
  color: #84868A;
  font-size: 15px; 
}

.receipt-content .invoice-wrapper .line-items .print a i {
  margin-right: 3px;
  font-size: 14px; 
}

.receipt-content .footer {
  margin-top: 40px;
  margin-bottom: 110px;
  text-align: center;
  font-size: 12px;
  color: #969CAD; 
}                    
</style>
</head>


<body>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
<style>
  html{
  background-image: url('https://www.linkpicture.com/q/intro4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  }
    img{
  float: right;
  max-width: 150px;
  width: 100%;
  height: auto;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}
@media print {
  @page{
    size: A4;
    margin:0;
  }
  #noprint {
    visibility: hidden;
  }
}


td, th {
  font-size: 12px;
  text-align: left;
  padding: 2px;
}
.receipt-content{
  background: black;
}

.receipt-content .invoice-wrapper {
  background: #FFF;
  border: 1px solid #CDD3E2;
  box-shadow: 0px 0px 1px #CCC;
  padding: 40px 40px 60px;
  margin-top: 40px;
  border-radius: 4px; 
}

.receipt-content .invoice-wrapper .payment-details span {
  color: #A9B0BB;
  display: block; 
}
.receipt-content .invoice-wrapper .payment-details a {
  display: inline-block;
  margin-top: 5px; 
}

.receipt-content .invoice-wrapper .line-items .print a:hover {
  text-decoration: none;
  border-color: #333;
  color: #333; 
}

.receipt-content {
  background: #ECEEF4; 
}
@media (min-width: 1200px) {
  .receipt-content .container {width: 900px; } 
}

.receipt-content .logo {
  text-align: center;
  margin-top: 50px; 
}

.receipt-content .logo a {
  font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
  font-size: 36px;
  letter-spacing: .1px;
  color: #555;
  font-weight: 300;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear; 
}

.receipt-content .invoice-wrapper .intro {
  font-size: 12px;
  text-align: left;
  padding: 2px;
  border-left: solid 3px rgb(24, 24, 201);
}

.receipt-content .invoice-wrapper .payment-info {
  margin-top: 25px;
  padding-top: 15px; 
}

.receipt-content .invoice-wrapper .payment-info span {
  color: #A9B0BB; 
}

.receipt-content .invoice-wrapper .payment-info strong {
  display: block;
  color: #444;
  margin-top: 3px; 
}

@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .payment-info .text-right {
  text-align: left;
  margin-top: 20px; } 
}
.receipt-content .invoice-wrapper .payment-details {
  margin-top: 30px;
  padding-top: 20px;
  line-height: 22px; 
}
.receipt-content .invoice-wrapper .payment-details .print{
  margin:0 auto;
  display:block;
  float: right;
  border: 1px solid #9CB5D6;
  padding: 13px 13px;
  border-radius: 5px;
  color: #708DC0;
  font-size: 13px;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear; 
}


@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .payment-details .text-right {
  text-align: left;
  margin-top: 20px; } 
}
.receipt-content .invoice-wrapper .line-items {
  margin-top: 40px; 
}
.receipt-content .invoice-wrapper .line-items .headers {
  color: #A9B0BB;
  font-size: 13px;
  letter-spacing: .3px;
  border-bottom: 2px solid #EBECEE;
  padding-bottom: 4px; 
}
.receipt-content .invoice-wrapper .line-items .items {
  margin-top: 8px;
  border-bottom: 2px solid #EBECEE;
  padding-bottom: 8px; 
}
.receipt-content .invoice-wrapper .line-items .items .item {
  padding: 10px 0;
  color: #696969;
  font-size: 15px; 
}
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item {
  font-size: 13px; } 
}
.receipt-content .invoice-wrapper .line-items .items .item .amount {
  letter-spacing: 0.1px;
  color: #84868A;
  font-size: 16px;
 }
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item .amount {
  font-size: 13px; } 
}

.receipt-content .invoice-wrapper .line-items .total {
  margin-top: 30px; 
}



@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .total .extra-notes {
  width: 100%;
  margin-bottom: 30px;
  float: none; } 
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
  display: block;
  margin-bottom: 5px;
  color: #454545; 
}

.receipt-content .invoice-wrapper .line-items .total .field {
  margin-bottom: 7px;
  font-size: 14px;
  color: #555; 
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total {
  margin-top: 10px;
  font-size: 16px;
  font-weight: 500; 
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
  color: #20A720;
  font-size: 16px; 
}

.receipt-content .invoice-wrapper .line-items .total .field span {
  display: inline-block;
  margin-left: 20px;
  min-width: 85px;
  color: #84868A;
  font-size: 15px; 
}

.receipt-content .invoice-wrapper .line-items .print a i {
  margin-right: 3px;
  font-size: 14px; 
}

.receipt-content .footer {
  margin-top: 40px;
  margin-bottom: 110px;
  text-align: center;
  font-size: 12px;
  color: #969CAD; 
}   
.woody{
  display:flex;
  justify-content:center;
}

</style>
</head>


<body>
<div class="woody">
    <div class="receipt-content">
        <div class="container bootstrap snippets bootdey">
            <div class="row">
                <div class="col-md-10">
                    <div class="invoice-wrapper">
                        <div class="intro">
                        <a style ="  float: right; max-width: 150px; width: 100%; height: auto;"href="https://www.linkpicture.com/view.php?img=LPic6271d9594d2581346118498"><img src="https://www.linkpicture.com/q/maybe.png" type="image"></a>
                            <strong>RECEIPT</strong>, 
                            <br>
                            Guest_ID: <?php echo $guest_id; ?>
                            <br>
                            Date: <?php echo $date2; ?>
                        </div>
    
                        <div class="customer-info">
                            <br><br>
                            <table style="width: 100%;">
                                <tbody>
                                <tr>
                                <th style="width: 140px;" class="head">CUSTOMER DETAILS</th>
                                <th style="width: 150px;">&nbsp;</th>
                                <th style="width: 120px;" class="head">PAYMENT DETAILS</th>
                                </tr>
                                <tr>
                                <td style="width: 130px;">Name</td>
                                <td style="width: 150px;">:&ensp;<?php echo $name; ?></td>
                                <td style="width: 120px;">P.O NUMBER</td>
                                <td style="width: 100px;">:&ensp;<?php echo $invoice_id; ?></td>
                                <td style="width: 120px;">TOTAL AMOUNT</td>
                                <td style="width: 70px;">: ₱&ensp;<?php echo $rightamount; ?></td>
                                </tr>
                                <tr>
                                <td style="width: 140px;">Email</td>
                                <td style="width: 150px;">:&ensp;<?php echo $email;?></td>
                                <td style="width: 120px;">METHOD</td>
                                <td style="width: 100px;">:&ensp;GCASH</td>
                                <td style="width: 120px;">DEPOSIT</td>
                                <td style="width: 70px;">: ₱&ensp;<?php echo $rightamount;?></td>
                                </tr>
                                <tr>
                                <td style="width: 140px;">Contact Number</td>
                                <td style="width: 150px;">:&ensp;<?php echo $phone;?></td>
                                <td style="width: 120px;">STATUS</td>
                                <td style="width: 100px;">:&ensp;SUCCESS</td>
                                <td style="width: 120px;">BALANCE</td>
                                <td style="width: 70px;">: ₱&ensp;<?php echo $rightamount;?></td>
                                </tr>
                                </tbody>
                                </table>
                        </div>
    
                        <div class="payment-details">
                                <div class="col-sm-6">
                                    <strong>GUEST</strong>
                                    <br>
                                    <strong><?php echo $name; ?></strong>
                                    <br><br>
                                    <strong>BOOKING DETAILS</strong>
                                    <table>
                                        <tr>
                                            <td style="width: 100px;">Check In Date</td>
                                            <td style="width: 200px">:&emsp; <?php echo $check_in;?></td>
                                            <td style="width: 50px;">Room</td>
                                            <td style="width: 200px;">:&emsp; <?php echo $room;?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">Check Out Date</td>
                                            <td style="width: 200px;">:&emsp;<?php echo $check_out;?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">Pick up</td>
                                            <td style="width: 200px;">:&emsp;<?php echo $pick_up;?></td>
                                        </tr>
                                    </table>
                                    <p style="text-align:justify;">
                                        <h3>RESORT AND ENTRANCE POLICY</h3>
                                        <ol>
                                        <li>Please wear proper swimming attire. Only rashguards, board shorts, swimsuits, swimming trunks, and white cotton shirt are allowed. A penalty of PHP 50 will be charged to guests not in proper attire.</li>
                                        <li>No eating and drinking in and around the pool area.</li>
                                        <li>Please refrain from using the pool if you have any skin conditions for your safety and the also the safety of other guests.</li>
                                        <li>Dogs are allowed but must be left leashed near the dog pool area.</li>
                                        <li>Food and drinks are available in the resort but bringing your own is allowed.</li>
                                        <li><strong>NO SHOW</strong> is non-refundable and non-rebookable</li>
                                        </ol>
                                    </p>
                                    </div>
                                    <button class="print" id="noprint" onclick="window.print()">Print this page</button>

                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
  </div>                          
</body>
</html>