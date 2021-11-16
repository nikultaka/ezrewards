<footer>
    <div class="container-fluid" style="max-width:100%;margin:auto;">
        <div class="footclr">
            <div class="col-md-12" style="display:flex;">
                
			  <div class="col-md-6">
                    <ul>
                        <li class="f1">© 2020-2021 All rights reserved <?=$_SESSION["PartnerName"] ?>™&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        if(!empty($_SESSION["ContactUsEmail"])){ ?>
                        <span><a class="fntclr" href="mailto: <?= $_SESSION["ContactUsEmail"] ?>" target="_blank">Contact Us</a></span></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-6">

                  
                 <ul style="display: flex;justify-content: flex-end; align-items:center;">
                        <li class="fntclr"><a style="color:white !important;" href="<?= $_SESSION["Social_Facebook"] ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="fntclr"><a style="color:white !important;" href="<?= $_SESSION["Social_Instagram"] ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li class="fntclr"><a style="color:white !important;" href="<?= $_SESSION["Social_Twitter"] ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>

                    </ul>               
                </div>	            
            </div>
        </div>
    </div>
</footer>