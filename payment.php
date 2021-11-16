<style>
    /* Blue outline on focus */
    .StripeElement--focus {
            border-color: #80BDFF;
            outline:0;
            box-shadow: 0 0 0 .2rem rgba(0,123,255,.25);
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        /* Can't see what I type without this */
        #card_number.form-control,
        #card_cvc.form-control,
        #card_exp.form-control {
            display:inline-block;
        }
        body{
            font-family: "Segoe UI","Helvetica Neue", Arial, sans-serif !important;
        }

</style>
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header("location:javascript://history.go(-1)");
}
else{
    require_once 'config.php'; 
    require "Model/partner.php";
    if((isset($_POST['FirstName']) && !empty($_POST['FirstName'])) &&
     (isset($_POST['LastName']) && !empty($_POST['LastName'])) &&
     (isset($_POST['email']) && !empty($_POST['email'])) && 
     (isset($_POST['country']) && !empty($_POST['country'])))
     {
        $_SESSION["FirstName"] = $_POST['FirstName'];
        $_SESSION["LastName"] = $_POST['LastName'];
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["country"] = $_POST['country'];
        if($_SESSION["Member"] == "DirectMember"){
            $_SESSION["Coupon"] = $_POST['coupon_discount'];
        }
        $_SESSION["dis_price"] = "";
     }
    if(isset($_POST['coupon_discount']) && !empty($_POST['coupon_discount'])){
        $coupon_discount = get_coupon_discount($conn , $_POST['coupon_discount']);
        if($coupon_discount){
            $discount_price = ($_SESSION["currPrice"])* ($coupon_discount['CouponDiscountPercent']/100) ;
             $after_discount = $_SESSION["currPrice"] - $discount_price;
             $_SESSION["dis_price"] = number_format((float)$after_discount, 2, '.', '');
            $price = $_SESSION["dis_price"]; 
        }
        else{
            $price = $_SESSION["currPrice"];
        }
    }
    else{
            $price = $_SESSION["currPrice"];
            }
   
    $payment_id = $statusMsg = ''; 
    $ordStatus = 'error'; 
    
    // Check whether stripe token is not empty 
    if(!empty($_POST['stripeToken'])){ 
        if(isset($_SESSION["dis_price"]) && !empty($_SESSION["dis_price"])){
            $price = $_SESSION["dis_price"];
        }
        if(!empty($_SESSION["Coupon"])){
            $coupon = $_SESSION["Coupon"];
        }
        else{
                $coupon = '';
        }
        
        // Retrieve stripe token, card and user info from the submitted form data 
        $token  = $_POST['stripeToken']; 
        $name = $_POST['name']; 
        // Include Stripe PHP library 
        require_once 'stripe-php/init.php'; 
        
        // Set API key 
        \Stripe\Stripe::setApiKey(STRIPE_API_KEY); 
        
        // Add customer to stripe 
        try {  
            $customer = \Stripe\Customer::create(array( 
                'source'  => $token 
            )); 
        }catch(Exception $e) {  
            $api_error = $e->getMessage();  
        } 
        
        if(empty($api_error) && $customer){  
            
            // Convert price to cents/penny
            $itemPriceCents = ($price*100); 
            
            // Create a plan 
            try {  
                $plan = \Stripe\Plan::create(array( 
                    "product" => [ 
                        "name" => $itemName 
                    ],
                    "amount"   => $itemPriceCents, 
                    "currency" => $_SESSION["currency"],
                    "interval" => 'year',
                    "interval_count" => 1  
                )); 
            }catch(Exception $e) {  
                $api_error = $e->getMessage();  
            } 
            
            if(empty($api_error) && $plan){ 
            
                 // Creates a new subscription 
                 try { 
                    $subscription = \Stripe\Subscription::create(array( 
                        "customer" => $customer->id, 
                        "items" => array( 
                            array( 
                                "plan" => $plan->id, 
                            ), 
                        ), 
                    )); 
                }catch(Exception $e) { 
                    $api_error = $e->getMessage(); 
                } 
                if(empty($api_error) && $subscription){ 
                    // Retrieve subscription data 
                    $subsData = $subscription->jsonSerialize();           
                    $payment_status = $subsData['status'];            
                    // If the order is successful 
                    if($payment_status == 'active'){ 
                        $ordStatus = 'success'; 
                        $statusMsg = 'Your Payment has been Successful!';
                        if($_SESSION["Member"] == "DirectMember"){
                            require "EZ-API/MemberAPI.php";
                            $API_Key = $_SESSION['API_Key'];
                            if(empty($_POST['promotions'])){
                                $promotions = 0;
                            }
                            else{
                                $promotions = $_POST['promotions'];
                            }
                            if(isset($_SESSION['AffID']) && !empty($_SESSION['AffID'])){
                                $AffID = $_SESSION['AffID'];
                                $Membership = array('Coupon' => $coupon,'Membership' => 'Premium','C2' => $promotions,'AffID' => $AffID);
                            }
                            else{
                                $Membership = array('Coupon' => $coupon, 'Membership' => 'Premium','C2' => $promotions,'AffID' => '');
                            }
                            
                        }
                        else{

                            require "EZ-API/MemberAPI.php";
                            $API_Key = $_SESSION['API_Key'];
                            $Membership = array('MemberLevel' => 'Premium');
                        }
                        
                        $data1 = array('API_Key' => $API_Key,
                        'FirstName' => $_SESSION["FirstName"],
                        'LastName' => $_SESSION["LastName"],
                        'EmailAddress' => $_SESSION["email"],
                        'Country' => $_SESSION["country"],
                        'Type' => 'New',
                        'C1' => '1');
                        $data = array_merge($data1,$Membership);
                        $result = addNewMember($data);
                        if($result->Result == '200-OK'){
                            header('Location: welcomePremiumMember.php');
                            exit;
                        }
                        else{
                            $statusMsg = $result->Result.", Detail: ".$result->ResultDetails;
                            header('Location: '.$_SERVER['PHP_SELF'].'?statusMsg='.$statusMsg);
                        }
                    }else{ 
                        $statusMsg = "Your Payment has Failed!"; 
                    } 
                }else{ 
                    $statusMsg = "Transaction has been failed!"; 
                } 
            }else{ 
                $statusMsg = "Charge creation failed! $api_error";  
            } 
        }else{  
            $statusMsg = "Invalid card details! $api_error";  
        } 

        header('Location: '.$_SERVER['PHP_SELF'].'?statusMsg='.$statusMsg);
    }
    else{ 
    ?>
        <?php require "header.php"; ?>
        <script src="https://js.stripe.com/v3/"></script>
        <div>
            <div class="container-login100" style= "background-color: white !important; margin-top:0 !important; min-height: 88vh !important;">
                <div style="width:100%">
                    <span class="accountCreate100-form-title p-b-37">
                    <?php
                if(isset($_GET['statusMsg'])){?>
                    <div class="alert alert--error"><?php echo $_GET['statusMsg']; ?></div>
                    <?php } ?>
                        <b>CREATE YOUR ACCOUNT</b>
                    </span>
                </div>
                <div class="wrap-accountCreate100 p-l-55 p-r-55 p-b-30" style="height: 100%; border-color: #2cc4b5; padding-top: 25px; margin-bottom: 0px !important;">
                    <div style="height: 0px;" class="alert-wrap">
                        <div class="alert alert--error">
                            <span class="alert__content">
                                <div class="alert__icon"></div>
                            </span>
                        </div>
                    </div>
                   
                    
                    <form action="" method="POST" name="paymentFrm" id="paymentFrm">
                    
                        <span class="login100-form-title p-b-37" style= "font-size: 35px !important;">
                        <div id="paymentResponse"></div>
                            <b><?= $_SESSION['currency_sign'].$price ?> FOR THE YEAR</b>          
                        </span>
                        <span>YOUR PAYMENT WILL AUTO-RENEW AT <?= $_SESSION['currency_sign'].$price ?> EACH YEAR YOU'LL BE REMINDED BEFORE THIS HAPPENS AND YOU CAN CANCEL ANYTIME.</span>
                        <p style="font-size: 25px; margin-bottom: 35px;margin-top: 10px;">
                            <b>CARD DETAILS</b>
                            <img src="paymenticons/visa.png" alt="visa" style="width: 105px;height: 70px;">
                            <img src="paymenticons/maestro.png" alt="maestro" style="width: 105px;height: 70px;">
                            <img src="paymenticons/mastercard.png" alt="mastercard" style="width: 105px;height: 70px;">
                            <img src="paymenticons/westernunion.png" alt="westernunion" style="width: 105px;height: 70px;">
                            <img src="paymenticons/discover.png" alt="discover" style="width: 105px;height: 70px;">
                        </p>
                        <div class="wrap-inputAccountCreate100 validate-input m-b-30">
                            <input name="name" type="text" id="name" class="accountCreateEmailinput100" style="color:'#555'; !important" name="identifier" value="" placeholder="NAME ON CARD*" required>
                            <span class="focus-accountCreateEmailinput100"></span>
                        </div>
                        <div id="user_name_div" class="wrap-inputAccountCreate100 validate-input m-b-30 base-input base-input--with-margin">
                        <div id="card_number" class="form-control"></div>   
                    <!-- <input name="userName" type="text" id="username" class="accountCreateEmailinput100 base-input__input" tabindex="1" name="identifier" value="" placeholder="CARD NUMBER*" required>-->
                            
                            <span class="focus-accountCreateEmailinput100"></span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div id="user_name_div" class="wrap-inputFirstName100 validate-input m-b-30 base-input base-input--with-margin">
                                
                                <div id="card_expiry" class="form-control"></div>     
                            <!-- <input name="userName" type="text" id="username" class="accountCreateinput100 base-input__input"  tabindex="1" name="identifier" value="" placeholder="MM/YY*" required> -->
                                    <span class="focus-accountCreateinput100"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="user_name_div" class="wrap-inputLastName100 validate-input m-b-30 base-input base-input--with-margin">
                                <div id="card_cvc" class="form-control"></div>   
                            <!-- <input name="userName" type="text" id="username" class="accountCreateLastNameinput100 base-input__input" tabindex="1" name="identifier" value="" placeholder="CVC*" required>-->
                                    <span class="focus-accountCreateLastNameinput100"></span>
                                </div>
                            </div>
                        </div>
                        <p style="margin-left: 30px; font-size: 17px;">I AGREE TO <?= $_SESSION['PartnerName'] ?> <u><a style="font-size: 17px;" href="https://www.endurancezonerewards.com/terms-of-service/" target="_blank" >TERMS AND CONDITIONS</a></u> AND <u><a style="font-size: 17px;" href="https://www.endurancezonerewards.com/privacy-policy/" target="_blank">PRIVACY POLICY</a></u> <input type="checkbox" id="term" style="float:right; width:25px;height:25px;" name="term" value="0"></p></br>
                        <?php if($_SESSION["Member"] == "DirectMember"){ ?>
                            <p style="margin-left: 30px; font-size: 17px;">I WOULD LIKE TO HEAR ABOUT NEW REWARDS AND PROMOTIONS <input type="checkbox" id="promotions" style="float:right; width:25px;height:25px;" name="promotions" value="0"></p>
                        <?php } ?>
                        <p style="margin-left: 30px; float:right">Step 2/2</p>
                        <div style="clear:both"></div>

                    <button type="submit" class="PremiumsecondBTN" style="float: right !important;">
                        <div class="primary__children" style="font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;font-size:16px;">SUBMIT</div>
                    </button>
                    </form>
                </div>
            </div>
        </div>

        <?php require "footer.php"; ?>

        <script type="text/javascript">

        // Create an instance of the Stripe object
        // Set your publishable API key
        var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

        // Create an instance of elements
        var elements = stripe.elements();

        var style = {
            base: {
                fontWeight: 400,
                fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                fontSize: '16px',
                lineHeight: '1.4',
                color: '#555',
                backgroundColor: '#fff',
                '::placeholder': {
                    color: '#888',
                },
            },
            invalid: {
                color: '#eb1c26',
            }
        };

        var cardElement = elements.create('cardNumber', {
            style: style
        });
        cardElement.mount('#card_number');

        var exp = elements.create('cardExpiry', {
            'style': style
        });
        exp.mount('#card_expiry');

        var cvc = elements.create('cardCvc', {
            'style': style
        });
        cvc.mount('#card_cvc');

        // Validate input of the card elements
        var resultContainer = document.getElementById('paymentResponse');
        cardElement.addEventListener('change', function(event) {
            if (event.error) {
                resultContainer.innerHTML = '<p>'+event.error.message+'</p>';
            } else {
                resultContainer.innerHTML = '';
            }
        });

        // Get payment form element
        var form = document.getElementById('paymentFrm');

        // Create a token when the form is submitted.
        form.addEventListener('submit', function(e) {
                e.preventDefault();
                if (! $('#term')[0].checked){
                    alert('Please accept TERMS AND CONDITIONS!');
                    return false;
                }
                else{
                    if ($("#promotions").is(":checked") == true) {
                        $('#promotions').val('1');
                    } else {
                        $('#promotions').val('0');
                    }
                }
                createToken();
        });

        // Create single-use token to charge the user
        function createToken() {
            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error
                    resultContainer.innerHTML = '<p>'+result.error.message+'</p>';
                } else {
                    // Send the token to your server
                    stripeTokenHandler(result.token);
                }
            });
        }

    // Callback to handle the response from stripe
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            
            // Submit the form
            form.submit();
        }
        </script>
    </body>
</html>
<?php
 }
} 
?>
