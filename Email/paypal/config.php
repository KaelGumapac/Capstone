<?php
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require './autoload.php';

// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = true;

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
    'client_id' => 'Ab0EDWIsRDjZMUB5UVi2WH72eIYrLOaRf-t-bqz04sgqjx3_csB42b3rzDBs8rVYsfpE8T41I6mht4vR',
    'client_secret' => 'EHXrcF_ob7WE3fSCoHQ1-MSsK4vaJw0I-aroMr7A9NAZjWxwaTeNHBaQ-KLvcKNc_Wv39-8KtJmoZYpL',
    'return_url' => 'http://localhost/123/paypal/response.php',
    'cancel_url' => 'http://localhost/123/paypal/payment-cancelled.html'
]; 

// Database settings. Change these for your database configuration.
$dbConfig = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'name' => 'hotel'
];

$apiContext = getApiContext($paypalConfig['client_id'], $paypalConfig['client_secret'], $enableSandbox);

/**
 * Set up a connection to the API
 *
 * @param string $clientId
 * @param string $clientSecret
 * @param bool   $enableSandbox Sandbox mode toggle, true for test payments
 * @return \PayPal\Rest\ApiContext
 */
function getApiContext($clientId, $clientSecret, $enableSandbox = false)
{
    $apiContext = new ApiContext(
        new OAuthTokenCredential($clientId, $clientSecret)
    );

    $apiContext->setConfig([
        'mode' => $enableSandbox ? 'sandbox' : 'live'
    ]);

    return $apiContext;
}
