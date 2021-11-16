<?php
 require "header.php";
 if(isset($_POST['create_free_member'])){
     ?>
     <style>
            body{
                background-color:white !important;
            }
        </style>   
    <?php
    if($_SESSION["Member"] == "DirectMember"){
        
        if(empty($_POST['promotions'])){
            $promotions = 0;
        }
        else{
            $promotions = $_POST['promotions'];
        }
        $Membership = array('Membership' => 'Free','C2' => $promotions);
        
    }
    else{
        $Membership = array('MemberLevel' => 'Basic');
    }
    require "EZ-API/MemberAPI.php";
    $data1 = array('API_Key' => $_SESSION['API_Key'],
                  'FirstName' => $_POST['FirstName'],
                  'LastName' => $_POST['LastName'],
                  'EmailAddress' => $_POST['email'],
                  'Country' => $_POST['country'],
                  'Type' => 'New',
                  'C1' => '1');
    $data = array_merge($data1,$Membership);

     $result = addNewMember($data);

    if($result->Result == '200-OK'){
        header('Location: welcomeFreeMember.php');
        exit;
    }
    else{
        $statusMsg = $result->Result.", Detail: ".$result->ResultDetails;
        header('Location: '.$_SERVER['PHP_SELF'].'?statusMsg='.$statusMsg);
        exit;
    }

  } 

  ?>   
        <div>
            <div class="container-login100" style= "background-color: white; !important">
                <div style="width:100%">
                    <span class="accountCreate100-form-title p-b-37">
                    <?php if(isset($_GET['statusMsg'])){?>
                    <div class="alert alert--error"><?php echo $_GET['statusMsg']; ?></div>
                    <?php } ?>
                        <b>CREATE YOUR FREE ACCOUNT</b>           
                    </span>
                </div>
                <div class="wrap-accountCreate100 p-l-55 p-r-55 p-t-80 p-b-30" style="height: 630px;">    
                    <form id="createFreeMember" method="post" name="submitForm" id="submitForm" class="login100-form validate-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="user_name_div" class="wrap-inputFirstName100 validate-input m-b-30 base-input base-input--with-margin">
                                    <input name="FirstName" type="text" id="FirstName" class="accountCreateinput100 base-input__input"  tabindex="1" name="identifier" value="" placeholder="FirstName*" required />
                                    <span class="focus-accountCreateinput100"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="user_name_div" class="wrap-inputLastName100 validate-input m-b-30 base-input base-input--with-margin">
                                    <input name="LastName" type="text" id="LastName" class="accountCreateLastNameinput100 base-input__input" tabindex="1" name="identifier" value="" placeholder="LastName*" required />
                                    <span class="focus-accountCreateLastNameinput100"></span>
                                </div>
                            </div>
                        </div>

                        <div id="user_name_div" class="wrap-inputAccountCreate100 validate-input m-b-30 base-input base-input--with-margin">
                            <input name="email" type="email" id="email" class="accountCreateEmailinput100 base-input__input" tabindex="1" name="identifier" value="" placeholder="EMAIL ADDRESS*" required />
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
                        
                        <p style="margin-left: 30px;">I AGREE TO <?= $_SESSION['PartnerName'] ?> <u><a href="https://www.endurancezonerewards.com/terms-of-service/" target="_blank">TERM AND CONDITION</a></u> AND <u><a href="https://www.endurancezonerewards.com/privacy-policy/" target="_blank">PRIVACY POLICY</a></u> <input type="checkbox" id="term" style="float:right" name="term" value="1"></p></br>
                        <?php if($_SESSION["Member"] == "DirectMember"){ ?>
                        <p style="margin-left: 30px;">I WOULD LIKE TO HEAR ABOUT NEW REWARDS AND PROMOTIONS <input type="checkbox" id="promotions" style="float:right" name="promotions" value="0"></p>
                            <?php } ?>
                        <button type="submit" name="create_free_member" class="FreesecondBTN" style="float: right !important;">
                            <div class="primary__children" style="font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;font-size:16px;">JOIN NOW</div>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <?php require "footer.php"; ?>
        <script>
            $('#createFreeMember').submit(function(e) { 
                if (! $('#term')[0].checked){
                    alert('Please accept TERM AND CONDITION!');
                    return false;
                }
                if ($("#promotions").is(":checked") == true) {
                    $('#promotions').val('1');
                } else {
                    $('#promotions').val('0');
                }
            }); 





        </script>

    </body>
</html>