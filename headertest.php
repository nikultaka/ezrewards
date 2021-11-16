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

@media screen and (max-width: 1300px) {

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
@media screen and (max-width: 1300px) {
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
		
		
.burgermenu .menu {
  clear: both;
  max-height: 0;
  transition: max-height .2s ease-out;
}





/* menu icon */

.header2 .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 28px 20px;
  position: relative;
  user-select: none;
}

.header2 .menu-icon .navicon {
  background: #333;
  display: block;
  height: 2px;
  position: relative;
  transition: background .2s ease-out;
  width: 18px;
  
}

.header2 .menu-icon .navicon:before,
.header2 .menu-icon .navicon:after {
  background: #333;
  content: '';
  display: block;
  height: 100%;
  position: absolute;
  transition: all .2s ease-out;
  width: 100%;
}

.header2 .menu-icon .navicon:before {
  top: 5px;
}

.header2 .menu-icon .navicon:after {
  top: -5px;
}

/* menu btn */

.header2 .menu-btn {
  display: none;
}

.header2 .menu-btn:checked ~ .menu {
  max-height: 240px;
}

.header2 .menu-btn:checked ~ .menu-icon .navicon {
  background: transparent;
}

.header2 .menu-btn:checked ~ .menu-icon .navicon:before {
  transform: rotate(-45deg);
}

.header2 .menu-btn:checked ~ .menu-icon .navicon:after {
  transform: rotate(45deg);
}

.header2 .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
.header2 .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
  top: 0;
}
.hamburgericon {
	top:46px;  
	position:relative;
	width:100%;
  }
@media (min-width: 1300px) {
  .header2 li {
    float: left;
  }
  .header2 li a {
    padding: 20px 30px;
  }
  .header2 .menu {
    clear: none;
    float: right;
    max-height: none;
  }
  .header2 .menu-icon {
    display: none;
  }
  
}
    </style>
</head>

<body style="font-family: Renogare-Regular;background-color:#333333;">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="header" >
        <div style="max-width:1300px;margin:auto;" class="header2">
            <a class="logo" href="./">
            <?php
            if($_SESSION["Member"] == "DirectMember"){ ?>
                <img src="./EnduranceZoneLogo_Landscape.png" alt="" style="margin-right:40px;position: relative;top: -12px;">
                <?php } else{ ?>
                    <img src="<?= $_SESSION['LogoURL']; ?>" alt=""  style="margin-right:40px;position: relative;top: -3px;height: inherit;max-height:100px;">
                <?php } ?>    
        </a>
<div class="hamburgericon">
				<input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon">
		</div>
		<div id="burgermenu" class="burgermenu">
            <div class="header-right">	
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
    </div>
