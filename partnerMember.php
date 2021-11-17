<?php
    if($partner ){
        $price = get_price($conn , $partner['Currency']);
        $_SESSION["Reward_PrimaryColor"] = $partner['Reward_PrimaryColor'];
        $_SESSION["PartnerName"] = $partner['PartnerName'];
        $_SESSION["FavIconURL"] = $partner['FavIconURL'];
        $_SESSION["LogoURL"] = $partner['LogoURL'];
        $_SESSION["currency"] = $partner['Currency'];
        $_SESSION["API_Key"] = $partner['API_Key'];
        $_SESSION["Social_Twitter"] = $partner['Social_Twitter'];
        $_SESSION["Social_Instagram"] = $partner['Social_Instagram'];
        $_SESSION["Social_Facebook"] = $partner['Social_Facebook'];
        $_SESSION["LoginButtonColor"] = $partner['LoginButtonColor'];
        $_SESSION["ContactUsEmail"] = $partner['ContactUsEmail'];
        $_SESSION["StripeAPIKey_Public"] = $partner['StripeAPIKey_Public'];
        $_SESSION["StripeAPIKey_Private"] = $partner['StripeAPIKey_Private'];
		$_SESSION["WhiteLabel_ShowJoinNow"] = $partner['WhiteLabel_ShowJoinNow'];		
		$_SESSION["WhiteLabelURL"] = $partner['WhiteLabelURL'];
		$_SESSION["WhiteLabelURLLabel"] = $partner['WhiteLabelURLLabel'];
		$_SESSION["WhiteLabelURL2"] = $partner['WhiteLabelURL2'];
		$_SESSION["WhiteLabelURLLabel2"] = $partner['WhiteLabelURLLabel2'];

        $_SESSION["WhiteLabel_HeaderColor"] = $partner['WhiteLabel_HeaderColor'];
        $_SESSION["CustomFontName"] = $partner['CustomFontName'];
        $_SESSION["CustomFontURL"] = $partner['CustomFontURL'];
        $_SESSION["Menu_ButtonBackground"] = $partner['Menu_ButtonBackground'];
        $_SESSION["Menu_TextColor"] = $partner['Menu_TextColor'];
        $_SESSION["Menu_FontSize"] = $partner['Menu_FontSize'];
        $_SESSION["WhiteLabel_PaymentMethod"] = $partner['WhiteLabel_PaymentMethod'];

        //echo '<pre>'; print_r($partner); exit;
 


        $_SESSION["currPrice"] = $partner['MemberChargePremium'];
        if($_SESSION["currency"] == 'USD'){
            $_SESSION['currency_sign'] = "&dollar;";
        }
        elseif($_SESSION["currency"] == 'GBP')
        {
            $_SESSION['currency_sign'] = "&pound;";
        }
        else{
            $_SESSION['currency_sign'] = "Can&dollar;";
        }
    }
    else{
        header('Location: ExclusiveRewards.php');
        exit;
    }
?>

 