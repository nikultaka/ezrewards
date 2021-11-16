<?php
session_start();
require "Model/partner.php";
$main_site1 = "endurancezonerewards.com";
$main_site2 = "rewards.endurancezone.com";
$main_site3 = "app.myezrewards.com";
$partner = get_partner($conn);
if(!isset($_SERVER['HTTP_REFERER'])){
    
    $check_partner = get_partner($conn);
    if(!$check_partner){
        if(strpos($_SERVER['HTTP_REFERER'], $main_site1) !== false ||
            strpos($_SERVER['HTTP_REFERER'], $main_site2) !== false ||
            strpos($_SERVER['HTTP_REFERER'], $main_site3) !== false)
        {
            require "config.php";
            if(!isset($_SESSION['domain'])){
                $_SESSION['domain'] = "";
            }
            if(!isset($_SESSION['AffID'])){
                $_SESSION['AffID'] = "";
            }
            $_SESSION["Member"] = "DirectMember";
            $_SESSION['domain'] = "ForDirectMember";

            if(isset($_GET['afid'])){
                $_SESSION['AffID']  = $_GET['afid'];
            }
            else{
                $_SESSION['AffID']  = "";
            }
            $ip = $_SERVER['REMOTE_ADDR'];
            $ch = curl_init('http://ipwhois.app/json/'.$ip);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($ch);
            curl_close($ch);
            $ipWhoIsResponse = json_decode($json, true);
            if(!empty($ipWhoIsResponse)){ 
                $price_currency = get_price_currency($conn , $ipWhoIsResponse['country_code']);
                if($price_currency){
                    $_SESSION["currency"] = $price_currency['CurrencyCode'];
                    $_SESSION['currency_sign'] = $price_currency['CurrencySymbol'];
                    $_SESSION["currPrice"] = $price_currency['CurrencyPrice']; 
                }
                else{
                    header('Location: ExclusiveRewards.php');
                    exit;
                }
            }
            else{
                header('Location: ExclusiveRewards.php');
                exit;
            }
            
            require "directMember.php";
        }
    }
    else{
        $_SESSION["Member"] = "";
        $_SESSION['AffID'] ="";
        $_SESSION['domain'] ="";
        $partner = get_partner($conn);
        require "partnerMember.php";
    }
}
else if((isset($_GET['afid'])) && !isset($_SERVER['HTTP_REFERER'])){

    require "config.php";
    $_SESSION["Member"] = "DirectMember";
    $_SESSION['domain'] = "ForDirectMember";
    $_SESSION['AffID']  = $_GET['afid'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $ch = curl_init('http://ipwhois.app/json/'.$ip);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);
    $ipWhoIsResponse = json_decode($json, true);
    if(!empty($ipWhoIsResponse)){ 
        $price_currency = get_price_currency($conn , $ipWhoIsResponse['country_code']);
        if($price_currency){
            $_SESSION["currency"] = $price_currency['CurrencyCode'];
            $_SESSION['currency_sign'] = $price_currency['CurrencySymbol'];
            $_SESSION["currPrice"] = $price_currency['CurrencyPrice']; 
        }
        else{
            header('Location: ExclusiveRewards.php');
            exit;
        }
    }
    else{
        header('Location: ExclusiveRewards.php');
        exit;
    }
    require "directMember.php";
}
else
{
    $_SESSION["Member"] = "";
    $_SESSION['AffID'] ="";
    $_SESSION['domain'] ="";
    $partner = get_partner($conn);
    require "partnerMember.php";
}
require "header.php";
?>
 <style>
    body{
            background-color:white !important;
        }
    #maincontainer {
        width:100%;
        height: 100%;
    }
    .flex-gap > div {
        margin: 20px; /* HERE WE ADD THE SPACE */
    }
    .container-login100 {
    height: 87vh;
        }
		 @media screen and (max-width: 800px) {
		.container-login100 {
    height: 69vh;
}	 
.wrap-login100{
position: relative;
    top: -30px;	
		 }
		 }
</style>   
<div >
    <div class="container-login100">
    
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
                    
                    <div style="height: 0px;" class="alert-wrap">
                        <div class="alert alert--error"><span class="alert__content">
                                <div class="alert__icon"></div>
                            </span></div>
                    </div>
            <form id="login" action="https://app.myezrewards.com/AwareIM/logonOp.aw" method="post" name="submitForm" id="submitForm" class="login100-form validate-form">
            
           
                <span class="login100-form-title p-b-37">
                <?= $_SESSION["PartnerName"] ?>           </span>



                

                <div id="user_name_div" class="wrap-input100 validate-input m-b-30 base-input base-input--with-margin">
                    <input name="userName" type="text" id="username" class="input100 base-input__input" tabindex="1" name="identifier" value="" placeholder="Email" required>
                    
                    <span class="focus-input100"></span>
                </div>


                <div id="password_div" class="wrap-input100 validate-input m-b-25 base-input__input-wrapper" data-validate="Enter password">
                    <input id="password" class="input100 base-input__input" type="password" tabindex="2" name="password" placeholder="Password" required>
                    <span class="focus-input100"></span>
                    <div class="eye" onclick="if(password.type=='text')password.type='password'; else password.type='text';">
                    <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye">
                </div>
                </div> 


                <div class="container-login100-form-btn submit">
                    <button class="login100-form-btn primary signin__submit-button base-button base-button--full-width" tabindex="3" type="submit" id="submit" value="Sign In">
                        <div class="primary__children" style="font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;font-size:16px;">Login</div>
                    </button>
                </div>
                <?php
                if(!empty($_SESSION["StripeAPIKey_Public"]) || !empty($_SESSION["StripeAPIKey_Private"])){ ?>
               
                
                <?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
			 <div  style="display: flex;justify-content: center;">
                <img id="u126_img" class="img " src="./u126.svg">   
                <div style="margin:0px 14px;">
                    <span style="    font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;">or</span>
                </div>
                <img id="u126_img" class="img " src="./u126.svg">
                </div>
              <div class="container-login100-form-btn submit secondBTN">
                    <a href="signup_membership.php" class="loginBtn primary signin__submit-button base-button base-button--full-width" tabindex="3"  value="Sign In">
                        <div class="primary__children" style="font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;font-size:16px;">Signup</div>
                    </a>
                </div>
                <?php } else if($_SESSION["Member"] != "DirectMember" and $_SESSION["WhiteLabel_ShowJoinNow"] == 1){ ?>
				 <div  style="display: flex;justify-content: center;">
                <img id="u126_img" class="img " src="./u126.svg">   
                <div style="margin:0px 14px;">
                    <span style="    font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;">or</span>
                </div>
                <img id="u126_img" class="img " src="./u126.svg">
                </div>
                   <div class="container-login100-form-btn submit secondBTN">
                    <a href="signup_membership.php" class="loginBtn primary signin__submit-button base-button base-button--full-width" tabindex="3"  value="Sign In">
                        <div class="primary__children" style="font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;font-size:16px;">Signup</div>
                    </a>
                </div>
                <?php } ?> 
                <?php } ?>
				
				<a href="https://app.myezrewards.com/AwareIM/logonFP.aw?domain=EzRewards" style="font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;">Forgot your password?</a>
			
                <input name="domain" id="domain" type="hidden" value="EzRewards">
				<input name="errorPage" id="errorPage" type="hidden" value="https://app.myezrewards.com/loginerror.html">

        

            </form>
        </div>
    </div>
</div>
</div>
<?php
require "footer.php";
?>
    <script>

        var errorDiv = document.getElementById("errorMsg");
    
        if (errorDiv) {
    
            var errorMsg = "";
    
            for (var i = 0; i < errorDiv.childNodes.length; ++i) {
                errorMsg += errorDiv.childNodes[i].nodeValue;
            }
    
            if (errorMsg.length > 0) {
                document.getElementById("username").style.borderColor = "#f00";
    
                document.getElementById("password").style.borderColor = "#f00";
    
    
                alert(errorMsg);
    
            }
    
        }
        
        function forgotten_pwd(link) {
            console.log(link);
            var f = document.getElementById('domain');
            if (f) {
                link.href = link.href + '?domain=' + f.value;
                return true;
            }
    
            return false;
        }
    
    
    </script>



</body>

</html>
