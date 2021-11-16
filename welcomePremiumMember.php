<?php require "header.php"; ?>
        <style>
            body{
                background-color:white !important;
                font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif !important;
            }
        </style>     
        <div class="welcome" >
            <div style="justify-content:center; display: flex;">
                <div class="col-md-6">
                    <div class="Welcome100-form-title" style="text-transform: uppercase;"><b>WELCOME TO <?= $_SESSION["PartnerName"] ?></b></div>

                    <span style="font-size: 14pt;">Check your email for your login instructions and details </span>
                </div>
            </div>
        </div>
        <div style="justify-content:center; display: flex;">
            <div class="col-md-4" style="text-align:center;">
                <h3> Don't forget to follow us on social media to see the latest rewards</h3>
                <div >
                    <a style= "font-size: 50px; padding-left: 30px;" href="<?= $_SESSION["Social_Facebook"] ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a style= "font-size: 50px; padding-left: 30px;" href="<?= $_SESSION["Social_Instagram"] ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a style= "font-size: 50px; padding-left: 30px;" href="<?= $_SESSION["Social_Twitter"] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <?php require "footer.php"; ?>
    </body>
</html>