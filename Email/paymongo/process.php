<?php
session_start();
require_once('vendor/autoload.php');
$_SESSION['first_name'] = $_POST['item_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone_number'];
$_SESSION['kasama'] = $_POST['item_number'];
$_SESSION['check_in'] = $_POST['check_in'];
$_SESSION['check_out'] = $_POST['check_out'];
$_SESSION['pick_up'] = $_POST['radio'];
$_SESSION['message'] = $_POST['message'];
$_SESSION['amount'] = $_POST['amount'];
$_SESSION['room'] = $_POST['room'];
$_SESSION['message'] = $_POST['message'];
$_SESSION['children'] = $_POST['children'];
$_SESSION['rightamount'] = $_POST['rightamount'];
$amount = $_POST['amount'];
$product_name = $_POST['item_name'];
$item_code = $_POST['item_number'];
$description = 'Paypal transaction';

echo $amount;
$amount = (int) $amount;

$client = new \GuzzleHttp\Client();
$response = $client->request('POST', 'https://api.paymongo.com/v1/sources', [
  'body' => '{"data":{"attributes":{"amount":'.$amount.',"redirect":{"success":"http://localhost/123/Email/paymongo/success.php","failed":"http://localhost/123/Email/failed.php"},"type":"gcash","currency":"PHP"}}}',
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