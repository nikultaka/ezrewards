<?php
 require "config.php";
  ?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title><?= $_SESSION['PartnerName'] ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $_SESSION['FavIconURL'] ?>" />
    <link rel="icon" type="image/png" href="./DSN.png" />
    <link rel="stylesheet" type="text/css" href="./DSN/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./DSN/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./DSN/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="./DSN/animate.css">
    <link rel="stylesheet" type="text/css" href="./DSN/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="./DSN/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="./DSN/select2.min.css">
    <link rel="stylesheet" type="text/css" href="./DSN/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="./util.css">
    <link rel="stylesheet" type="text/css" href="./main.css">
	<link rel="stylesheet" type="text/css" href="./SARV.css">
    <link rel="stylesheet" type="text/css" href="./css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" /> -->


    <style>
	#content-desktop {display: block;}
#content-mobile {display: none;}

@media screen and (max-width: 800px) {

#content-desktop {display: none;}
#content-mobile {display: block;}

}
        @font-face {
        font-family: Bilo-Regular;
        src: url(Bilo-Regular.otf)
        }
        .footclr{background-color: #333333;}
        .fntclr{color:white !important;font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;font-size:14px;padding-left:20px;}
        .f1{font-size: 14px;color: white;font-family: 'Anton Bold', 'Anton Regular', 'Anton', sans-serif;}
        .icn {font-size: 14px;padding-right: 16px;padding-top: 4px;}
        .nav-item{margin-top:9px;}
        .header_menuitem {
            font-family: "Bilo-Regular", Sans-serif !important;
            font-size: 16px !important;
            font-weight: bolder;
            text-transform: uppercase !important;
            color:white;
            margin-right:15px;
            padding-top:16px;
        }
        /* Style the header with a grey background and some padding */
        .header {
            
            background-color: <?= $_SESSION['Reward_PrimaryColor'] ?>;
            height:100px;
        }

        /* Style the header links */
        .header a {
            float: left;
            color: white;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
            font-family: "Bilo-Regular", Sans-serif !important;
            font-size: 16px !important;
            font-weight: bolder;
            text-transform: uppercase !important;
            color:white;
            padding-top:0px;
        }
        /* Float the link section to the right */
        .header-right {
            float: left;
            margin-top:37px;
        }
        .wrap-input100 {
    
            border-color: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;			
        }
		.wrap-accountCreate100 {
    
            border-color: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;			
        }
		
		
		
		.PremiumsecondBTN {
    
            border-color: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;
			background-color: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;
        }
		
		

		.wrap-premium100 {
    
            border-color: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;			
        }
		.wrap-free100 {
    
            border-color: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;			
        }
        .secondBTN {
            border-color: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;
        }
        .login100-form-btn {
            background-color: <?= $_SESSION['LoginButtonColor'] ?> !important;
        }

        .container-fluid {
           
            padding-right: 0px !important;
            padding-left: 0px !important;
        }
.logo{
	line-height:100px !important;
	max-height:100px;
}
.ezbuts {
	float:left;
}
        /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
        @media screen and (max-width: 800px) {
            .header a {
                float: left;
                display: block;
                text-align: left;
				color:#333333;
				
            }
            .header-right {
                float: none;
				display: block;
                text-align: left;
				width:200px;
				position: relative;
				top: 10px;
            }
		.TopLogin {
			background-color: white;
    width: 140px;
    height: 40px;
    border-width: 0px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    font-family: "Bilo-Regular", Sans-serif !important;
    font-size: 16px !important;
    font-weight: bolder;
    text-transform: uppercase !important;
    color: #333333;
    margin-right: 16px;
    position: relative;
    bottom: 7px;
    border-radius: 0px;
	text-align: left;
	margin-left:-76px;
		}
		.TopBTN {
			text-align: left;
		}
		.TopLogin:hover{
	color: #fff;
    background-color: #333333;
    border-color: white;
		}
		.ezbut {
			background-color: white;
			width:200px;
    height: 40px;
    border-width: 0px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    font-family: "Bilo-Regular", Sans-serif !important;
    font-size: 16px !important;
    font-weight: bolder;
    text-transform: uppercase !important;
    color: #333333;
    margin-right: 16px;
    position: relative;
    bottom: 7px;
    border-radius: 0px;
	text-align: left;
	margin-left:10px;
		}
		.ezbut:hover{
	color: #fff;
    background-color: #333333;
    border-color: white;
		}
	.ezbuts{
		margin-top:15px;

	}

.container-login100 {
    min-height: 63vh;
        }
		.header{
		margin-top: -36px;	
		}
		}
    </style>
</head>

<body style="font-family: Renogare-Regular;background-color:#333333;">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="header" >
        <div style="max-width:1300px;margin:auto;">
            <div class="header-menubar">
            <a class="logo" href="./">
            <?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                <img src="./EnduranceZoneLogo_Landscape.png" alt="" style="margin-right:40px;position: relative;top: -12px;">
                <?php } else{ ?>
                    <img src="<?= $_SESSION['LogoURL']; ?>" alt=""  style="margin-right:40px;position: relative;top: -3px;height: inherit;max-height:100px;">
                <?php } ?>    
        </a>
        <a href="#" class="nav-toggle-mobile" data-toggle="collapse" data-target="#navbarSupportedContent"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>

            <div class="header-right collapse navbar-collapse" id="navbarSupportedContent">          
		   <?php
            if(!empty($_SESSION['domain'])){ ?>
				<div  id="content-desktop" class="ezbuts">
                <a  href="https://app.myezrewards.com/" target="_blank" class="ezbut">View Rewards </a>
                <a  href="https://www.endurancezonerewards.com/#howitwork" target="_blank" class="ezbut">How It Works</a>
	            <a  href="https://www.endurancezonerewards.com/partner-with-us" target="_blank" class="ezbut">Partner With Us</a>
                <a  href="https://www.endurancezonerewards.com/about-us" target="_blank" class="ezbut">About Us</a>
</div>
            <?php } ?>
			<?php
            if(!empty($_SESSION['domain'])){ ?>
				<div  id="content-mobile" class="ezbuts">
                <a  href="https://app.myezrewards.com/" target="_blank" class="ezbut">View Rewards </a><br>
                <a  href="https://www.endurancezonerewards.com/#howitwork" target="_blank" class="ezbut">How It Works</a><br>
	            <a  href="https://www.endurancezonerewards.com/partner-with-us" target="_blank" class="ezbut">Partner With Us</a><br>
                <a  href="https://www.endurancezonerewards.com/about-us" target="_blank" class="ezbut">About Us</a>
</div>
            <?php } ?>
	            <a  class="nav-link" href="index.php" style="margin-left:75px;">
                    <button type="button" class="btn btn-primary TopLogin">Login</button>
                </a>
			    
				
				<?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                &nbsp;
                <?php } else if($_SESSION["Member"] != "DirectMember" and $_SESSION["WhiteLabel_ShowJoinNow"] == 1){ ?>
                    <a class="nav-link" href="signup_membership.php" >
                    <button type="button" class="btn btn-primary TopBTN">Join Now</button>
                </a>
                <?php } ?> 
				
				<?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                &nbsp;
                <?php } else if($_SESSION["Member"] != "DirectMember" and $_SESSION["WhiteLabel_ShowJoinNow"] == 1){ ?>
                    <a class="nav-link" href="info.php" >
                    <button type="button" class="btn btn-primary TopBTN">More Info</button>
                </a>
                <?php } ?>
				<?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                <a class="nav-link" href="signup_membership.php" >
                    <button type="button" class="btn btn-primary TopBTN">Join Now</button>
                </a>
                <?php } else if($_SESSION["Member"] != "DirectMember" and isset($_SESSION["WhiteLabelURLLabel"])){ ?>
                    <a class="nav-link" href="<?= $_SESSION["WhiteLabelURL"] ?>" target="_blank" >
                    <button type="button" class="btn btn-primary TopBTN"><?= $_SESSION["WhiteLabelURLLabel"] ?></button>
                </a>
                <?php } ?> 
				<?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                &nbsp;
                <?php } else if($_SESSION["Member"] != "DirectMember" and isset($_SESSION["WhiteLabelURLLabel"])){ ?>
                    <a class="nav-link" href="<?= $_SESSION["WhiteLabelURL2"] ?>" target="_blank" >
                    <button type="button" class="btn btn-primary TopBTN"><?= $_SESSION["WhiteLabelURLLabel2"] ?></button>
                </a>
                <?php } ?> 
				
				
			</div>
        </div>
    </div>


    
<div class="hader-wrapper">
    <div class="new-header">
        <div class="logo-col">
        <a class="logo" href="./">
            <?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                <img src="./EnduranceZoneLogo_Landscape.png" alt="" style="margin-right:40px;position: relative;top: -12px;">
                <?php } else{ ?>
                    <img src="<?= $_SESSION['LogoURL']; ?>" alt=""  style="margin-right:40px;position: relative;top: -3px;height: inherit;max-height:100px;">
                <?php } ?>    
        </a>
        <a href="#" class="nav-toggle-mobile" data-toggle="collapse" data-target="#mobile-toggle-class"><i class="fa fa-bars" aria-hidden="true"></i></a>
      </div>
        <!-- <div class="nav-menu"> -->
         <div class="mobile-toggle collapse navbar-collapse" id="mobile-toggle-class">   
        
				<div  id="content-desktop" class="ezbuts">
                    <?php if(!empty($_SESSION['domain'])){ ?>
                        <a  href="https://app.myezrewards.com/" target="_blank" class="ezbut">View Rewards </a>
                        <a  href="https://www.endurancezonerewards.com/#howitwork" target="_blank" class="ezbut">How It Works</a>
                        <a  href="https://www.endurancezonerewards.com/partner-with-us" target="_blank" class="ezbut">Partner With Us</a>
                        <a  href="https://www.endurancezonerewards.com/about-us" target="_blank" class="ezbut">About Us</a>
                    <?php } ?>    
                <div class="user-btn">
                <a  class="nav-link" href="index.php" style="margin-left:75px;">
                    <button type="button" class="btn btn-primary TopLogin">Login</button>
                </a>
				<?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                &nbsp;
                <?php } else if($_SESSION["Member"] != "DirectMember" && $_SESSION["WhiteLabel_ShowJoinNow"] == 1){ ?>
                    <a class="nav-link" href="signup_membership.php" >
                    <button type="button" class="btn btn-primary TopBTN">Join Now</button>
                </a>
                <?php } ?> 
				
				<?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                &nbsp;
                <?php } else if($_SESSION["Member"] != "DirectMember" && $_SESSION["WhiteLabel_ShowJoinNow"] == 1){ ?>
                    <a class="nav-link" href="info.php" >
                    <button type="button" class="btn btn-primary TopBTN">More Info</button>
                </a>
                <?php } ?>
				<?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                <a class="nav-link" href="signup_membership.php" >
                    <button type="button" class="btn btn-primary TopBTN">Join Now</button>
                </a>
                <?php } else if($_SESSION["Member"] != "DirectMember" && isset($_SESSION["WhiteLabelURLLabel"])){ ?>
                    <a class="nav-link" href="<?= $_SESSION["WhiteLabelURL"] ?>" target="_blank" >
                    <button type="button" class="btn btn-primary TopBTN"><?= $_SESSION["WhiteLabelURLLabel"] ?></button>
                </a>
                <?php } ?> 
				<?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                &nbsp;
                <?php } else if($_SESSION["Member"] != "DirectMember" && isset($_SESSION["WhiteLabelURLLabel"])){ ?>
                    <a class="nav-link" href="<?= $_SESSION["WhiteLabelURL2"] ?>" target="_blank" >
                    <button type="button" class="btn btn-primary TopBTN"><?= $_SESSION["WhiteLabelURLLabel2"] ?></button>
                </a>
                <?php } ?> 
                </div>
                </div>
         </div>
        <!-- </div> -->
    <!-- <div class="user-btn"> -->
       
        <!-- </div> -->
    </div>
</div>
<style>
    .header{
        display: none;
    }
    .hader-wrapper {
        display: block;   
    }
    .hader-wrapper{
        background: <?= $_SESSION['Reward_PrimaryColor'] ?>;  
        /*#e03534;*/
    }
    .new-header{
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 15px;
    }
    .logo-col .logo img{
        position: unset !important;
        margin-right: 0 !important;
    }
    .new-header a {
    color: white;
    text-align: center;
    text-decoration: none;
    font-family: "Bilo-Regular", Sans-serif !important;
    font-size: clamp(14px, 1vw, 16px) !important;
    font-weight: bolder;
    text-transform: uppercase !important;
    color: white;
}
.new-header .nav-menu{
    /* flex: 0 0 44%; */
    padding: 0 15px;
}
.new-header #content-desktop{
    display: flex;
    justify-content: space-around;
    width: 100%;
}
.new-header .user-btn{
    display: flex;
}
.new-header #content-desktop .nav-link{
    margin: 0 !important;
    padding: 0;
}
.new-header .TopLogin{
    margin:0;
}
.new-header .logo-col{
    margin-right: 4%;
}
.new-header .TopBTN{
    margin: 0;
}
.new-header #content-desktop a {
    padding-right: 8px;
}
@media(min-width:993px){
    .new-header .nav-toggle-mobile{
        display: none;
    }
    .new-header .mobile-toggle{
        display: block;
    }
}
@media(max-width:992px){
    .new-header .logo-col{
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .new-header #content-desktop a{
        color: #333;
        padding: 20px 20px 10px 20px;
        text-align: left;
        padding-bottom: 20px;
    }
    .new-header .navbar-collapse{
        position: absolute !important;
        display: block !important;
        left: -100%;
        transition: all 0.3s ease-in-out;
    }
    .new-header .mobile-toggle.collapse.show{
        display: flex;
        flex-direction: column;
        width: 100%;
        top: 33px;
        left: 0;
    }
    .new-header #content-desktop{
    flex-direction: column;
    position: absolute;
    top: 67px;
    width: 100%;
    background: #fff;
    z-index: 2;
    }
    .new-header .user-btn {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    }
    .new-header #content-desktop{
        justify-content: flex-start;
    }
}
@media screen and (max-width: 800px){
    .container-login100 .wrap-login100 {
    position: unset;
  }
  .new-header .TopLogin, .new-header .TopBTN{
      text-align: center;
      border: 2px solid #333;
  }
  .new-header .user-btn {
    padding: 40px 0;
 }
 .ezbut:hover{
    background: unset;
    border: unset !important;
 }
}
</style>

