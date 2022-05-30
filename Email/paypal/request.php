<?php
session_start();
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\ItemList;

require 'config.php';

if (empty($_POST['item_number'])) {
    throw new Exception('This script should not be called directly, expected post data');
}

$payer = new Payer();
$payer->setPaymentMethod('paypal');

// Set some example data for the payment.
$currency = 'PHP';
$item_qty = 1;
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
$_SESSION['rightamount'] = $_POST['rightamount'];
$total = $_SESSION['amount'] * $_SESSION['calculated'];
$quantity = $_SESSION['quantity'] * 500;
$totalprice = $total + $quantity;  
$_SESSION['totalprice'] = $totalprice;
$room = $_SESSION['room'];
$pax = $_SESSION['pax'];
$amountPayable = $_POST['amount'];
$product_name = $_POST['item_name'];
$item_code = $_POST['item_number'];
$description = 'Paypal transaction';
$invoiceNumber = uniqid();
$my_items = array(
	array('name'=> $product_name, 'quantity'=> $item_qty, 'price'=> $amountPayable, 'sku'=> $item_code, 'currency'=> $currency)
);
	
$amount = new Amount();
$amount->setCurrency($currency)
    ->setTotal($amountPayable);

$items = new ItemList();
$items->setItems($my_items);
	
$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setDescription($description)
    ->setInvoiceNumber($invoiceNumber)
	->setItemList($items);

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl($paypalConfig['return_url'])
    ->setCancelUrl($paypalConfig['cancel_url']);

$payment = new Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions([$transaction])
    ->setRedirectUrls($redirectUrls);

try {
    $payment->create($apiContext);
} catch (Exception $e) {
    throw new Exception('Unable to create link for payment');
}

header('location:' . $payment->getApprovalLink());
exit(1);