<?php 
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
    
</style>   
         <?php
            if(empty($_SESSION['domain'])){ ?>
            <div class="container-login100" style= "min-height: 88vh !important;">
            <?php } else { ?>
            <div class="container" style= "min-height: 88vh !important;">
            <?php
            }
                if(!empty($_SESSION['domain'])){ ?>
                <div style="width:100%">
                    <span class="memership100-form-title p-b-37">
                        <b>CHOOSE YOUR MEMBERSHIP</b>           
                    </span>
                </div>
                <div id="maincontainer" class="flex-gap">
                    <div class="wrap-free100 p-l-55 p-r-55  p-b-30">
                        <span class="Free100-form-title p-b-37" style= "font-size: 60px !important;">
                            <b>FREE</b>             
                        </span>
                        <hr style= "border: 0.5px solid;"> 
                        <span class="login100-form-title p-b-37" style= "font-size: 42px !important;">
                            <b><?= $_SESSION['currency_sign']?>0</b>             
                        </span>
                        <span class="login100-form-title p-b-37" style= "font-size: 35px !important;">
                            <b>For those with an active lifestyle   </b>          
                        </span>
                        <ul style="font-size: 35px; !important; list-style-type: unset !important; margin-left: 35px !important;">
                            <li style="font-size: 35px; !important; list-style-type: unset !important; color:#484952" >10 rewards each month</li>
                            <li style="font-size: 35px; !important; list-style-type: unset !important; color:#484952">New rewards including each month</li>
                            <li style="font-size: 35px; !important; list-style-type: unset !important; color:#484952">Rewards upto 15% off</li>    
                        </ul>

                        <div style="text-align: center;">
                            <button onclick="parent.location='membershipFreeAccount.php'" tabindex="3" class="FreesecondBTN" >
                                <div class="primary__children" style="font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;font-size:16px;">JOIN NOW</div>
                            </button>
                        </div>
                    </div>	
                    <?php } ?>
                    <div class="wrap-premium100 p-l-55 p-r-55 p-b-30" >
                        <span class="Premium100-form-title p-b-37" style= "font-size: 60px !important;">
                            <b>PREMIUM</b>                
                        </span>
                        <hr style= "border: 0.5px solid;">
                        <span class="login100-form-title p-b-37" style= "font-size: 42px !important;">
                            <b><?= $_SESSION['currency_sign'].$_SESSION["currPrice"]?></b>             
                        </span>
                        <span class="login100-form-title p-b-37" style= "font-size: 35px !important;">
                            <b>For those dedicated to sports and fitness  </b>          
                        </span>
                        <ul style="font-size: 35px; !important; list-style-type: unset !important; margin-left: 20px !important;">
                            <li style="font-size: 35px; !important; list-style-type: unset !important; color:#484952">150+ rewards, available all year round</li>
                            <li style="font-size: 35px; !important; list-style-type: unset !important;color:#484952">New rewards added each month</li>
                            <li style="font-size: 35px; !important; list-style-type: unset !important;color:#484952">Rewards up to 70% off</li>
                            <?php
                            if(!empty($_SESSION['domain'])){ ?>
                            <li style="font-size: 35px; !important; list-style-type: unset !important;color:#484952">Laka insurance included</li>
                            <?php } ?>
                        </ul>
                        <?php if(!empty($_SESSION['domain'])){ ?>
                        <div style="text-align: center;">
                        <?php } else { ?>
                        <div style="text-align: center; margin-top: 50px;">
                        <?php } ?>
                            <button class="PremiumsecondBTN" tabindex="3" onclick="parent.location='membershipPremiumAccount.php'" value="Sign In" >
                                <div class="primary__children" style="font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;font-size:16px;">JOIN NOW</div>
                            </button>
                        </div>
                    </div>
                    <?php
                    if(!empty($_SESSION['domain'])){ ?>    
                </div>
                <?php } ?>
                <div style="clear:both"></div>
            </div>
<?php 
require "footer.php";
?> 
    </body>
</html>