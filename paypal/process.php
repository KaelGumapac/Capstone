<?php
session_start();
require_once('vendor/autoload.php');
$_SESSION['name'] = $_POST['item_name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone_number'];
$_SESSION['kasama'] = $_POST['item_number'];
$_SESSION['check_in'] = $_POST['check_in'];
$_SESSION['check_out'] = $_POST['check_out'];
$_SESSION['pick_up'] = $_POST['radio'];
$_SESSION['message'] = $_POST['message'];
$_SESSION['amount'] = $_POST['amount'];
$_SESSION['calculated'] = $_POST['calculated'];
$_SESSION['room'] = $_POST['location'];
$_SESSION['pax'] = $_POST['restaurentId'];
$_SESSION['quantity'] = $_POST['quantity'];
$total = $_SESSION['amount'] * $_SESSION['calculated'];
$_SESSION['rightamount'] = $_POST['rightamount'];
$quantity = $_SESSION['quantity'] * 500;
$totalprice = $total + $quantity;  
$_SESSION['totalprice'] = $totalprice;
$room = $_SESSION['room'];
$pax = $_SESSION['pax'];
$amount = $_POST["amount"];

echo $amount;
$amount = (int) $amount;

$client = new \GuzzleHttp\Client();
$response = $client->request('POST', 'https://api.paymongo.com/v1/sources', [
  'body' => '{"data":{"attributes":{"amount":'.$amount.',"redirect":{"success":"http://localhost/hotel/Email/paymongo/success.php","failed":"http://localhost/Project-247BFR/tests/paymongo/failed.php"},"type":"gcash","currency":"PHP"}}}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Basic cGtfdGVzdF9Ma1YyNVg3bTZuN3I4VFc0WDRQVUZ5bkU6c2tfdGVzdF9GY1o0RVE2S1M2elV4TENob0tpdlJVaTY=',
    'Content-Type' => 'application/json',
  ],
]);

$_SESSION['response'] = $response;
$data = json_decode($response->getBody() , true);
$redirect = $data['data']['attributes']['redirect']['checkout_url'];
header('location: '.$redirect);