<?php
require "./database.php";
function get_partner($conn)
{
    $result = '';
    $sql = "SELECT * FROM PARTNER where RewardURL="."'".$_SERVER['SERVER_NAME']."'";
    // Currency,Reward_PrimaryColor,PartnerName,FavIconURL,LogoURL,API_Key,Social_Twitter,Social_Instagram,Social_Facebook,RewardURL,LoginButtonColor,ContactUsEmail,StripeAPIKey_Public,StripeAPIKey_Private,WhiteLabel_ShowJoinNow,WhiteLabelURL,WhiteLabelURLLabel,WhiteLabelURL2,WhiteLabelURLLabel2,MemberChargeBasic,MemberChargePremium,MemberChargePremiumPlus
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
       $result = $row;
    }

    sqlsrv_free_stmt( $stmt);
    return $result;

}

function get_price($conn , $currencyCode)
{
    $result = '';
   $sql = "SELECT CurrencyPrice FROM COUNTRY WHERE COUNTRY.CurrencyCode='$currencyCode'";

    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {  
       $result = $row;
    }

    sqlsrv_free_stmt( $stmt);
    return $result;

}

function get_price_currency($conn , $country_code)
{
    $result = '';
   $sql = "SELECT CurrencyPrice,CurrencySymbol,CurrencyCode FROM COUNTRY WHERE COUNTRY.Code='$country_code'";

    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {  
       $result = $row;
    }

    sqlsrv_free_stmt( $stmt);
    return $result;

}

function get_coupon_discount($conn , $couponCode)
{
    $result= '';
    $sql = "SELECT CouponDiscountPercent FROM MEMBERCOUPON m WHERE m.Status='Active' and CouponCode='$couponCode'";
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {  
       $result = $row;
    }

    sqlsrv_free_stmt( $stmt);
    return $result;

}


?>
