<?php require "header.php"; ?>
        <div>
            <div class="container-login100" style= "background-color: white !important; margin-top:0 !important; min-height: 88vh !important;">
                <div style="width:100%">
                    <span class="accountCreate100-form-title p-b-37">
                        <b>CREATE YOUR ACCOUNT</b>           
                    </span>
                </div>
                <div class="wrap-accountCreate100 p-l-55 p-r-55 p-t-80 p-b-30" style="height: 100%; border-color: #2cc4b5;">
                    
                    <form id="createPremiumMember" action="payment.php" method="post" name="submitForm" id="submitForm" class="login100-form validate-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="user_name_div" class="wrap-inputFirstName100 validate-input m-b-30 base-input base-input--with-margin">
                                    <input name="FirstName" type="text" id="FirstName" class="accountCreateinput100 base-input__input"  tabindex="1" name="identifier" value="" placeholder="FirstName*" required>
                                    <span class="focus-accountCreateinput100"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="user_name_div" class="wrap-inputLastName100 validate-input m-b-30 base-input base-input--with-margin">
                                    <input name="LastName" type="text" id="LastName" class="accountCreateLastNameinput100 base-input__input" tabindex="1" name="identifier" value="" placeholder="LastName*" required>
                                    <span class="focus-accountCreateLastNameinput100"></span>
                                </div>
                            </div>
                        </div>

                        <div id="user_name_div" class="wrap-inputAccountCreate100 validate-input m-b-30 base-input base-input--with-margin">
                            <input name="email" type="email" id="email" class="accountCreateEmailinput100 base-input__input" tabindex="1" name="identifier" value="" placeholder="EMAIL ADDRESS*" required>
                            <span class="focus-accountCreateEmailinput100"></span>
                        </div> 
                        <div id="user_name_div" class="validate-input m-b-30 base-input base-input--with-margin">
                            <select id="country" name="country" class="country-select" disabled="true">
                                <!-- <option value=""disabled selected>COUNTRY/REGION*</option> -->
                                <?php if($_SESSION["currency"] == "CAD"){ ?>
                                <option value="Canada">Canada</option>
                                <?php } if($_SESSION["currency"] == "GBP"){ ?>
                                <option value="UK">United Kingdom</option>
                                <?php } if($_SESSION["currency"] == "USD"){ ?>
                                <option value="USA">United States</option>
                                <?php } ?>
                            </select>
                            <?php if($_SESSION["currency"] == "CAD"){ ?>
                                <input type="hidden" name="country" value="Canada"/>
                                <?php } if($_SESSION["currency"] == "GBP"){ ?>
                                    <input type="hidden" name="country" value="UK"/>
                                <?php } if($_SESSION["currency"] == "USD"){ ?>
                                    <input type="hidden" name="country" value="USA"/>
                                <?php } ?>
                        </div>
                        
                        <?php if($_SESSION["Member"] == "DirectMember"){ ?>
                            <div id="user_name_div" class="wrap-inputAccountCreate100 validate-input m-b-30 base-input base-input--with-margin">
                                <input name="coupon_discount" type="text" id="coupon_discount" class="accountCreateEmailinput100 base-input__input" tabindex="1" name="identifier" value="" placeholder="COUPON/DISCOUNT CODE">
                                <span class="focus-accountCreateEmailinput100"></span>
                            </div>
                            <!-- <div id="user_name_div" class="wrap-inputAccountCreate100 validate-input m-b-30 base-input base-input--with-margin">
                                <input name="afiliate_code" type="text" id="afiliate_code" class="accountCreateEmailinput100 base-input__input" tabindex="1" name="identifier" value="<?= $_SESSION['AffID'] ?>" placeholder="AFFILIATE CODE" readonly> 
                                <span class="focus-accountCreateEmailinput100"></span>
                            </div> -->
                        <?php } ?>
                        <p style="margin-left: 30px; float:right">Step 1/2</p>
                        <div style="clear:both"></div>

                        <button class="PremiumsecondBTN" style="float: right !important;">
                            <div class="primary__children" style="font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;font-size:16px;">JOIN NOW</div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <?php require "footer.php"; ?>
    </body>
</html>