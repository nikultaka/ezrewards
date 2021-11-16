<?php
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
ob_start();
session_start();
$host ="209.50.53.52"; 
$username ="sa_myezreward";
$password ="BigCat1818!@#";
$database ="EzRewards";


//Product detail

$itemName = "Premium Membership"; 

// Stripe API configuration   
define('STRIPE_API_KEY', $_SESSION["StripeAPIKey_Private"]); 
define('STRIPE_PUBLISHABLE_KEY', $_SESSION["StripeAPIKey_Public"]); 
?>