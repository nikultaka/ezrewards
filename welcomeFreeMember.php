<?php require "header.php"; ?>
        <style>
            body{
                background-color:white !important;
            }
        </style> 
        <div class="welcomeFree" >
            <div style="justify-content:center; display: flex;">
                <div class="col-md-6" >
                    <div class="Welcome100-form-title" style="text-transform: uppercase;"><b>WELCOME TO <?= $_SESSION["PartnerName"] ?></b></div>
                    <h3>Please check your emails for a verification link.</h3>
                    <p>Once verified you can access your rewards straigh away!<p>
                </div>
            </div>
        </div>
        <?php require "footer.php"; ?> 
    </body>
</html>