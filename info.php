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
    .elementor-kit-12 {
    --e-global-color-primary: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;
    --e-global-color-secondary: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;
    --e-global-color-text: #FFFFFF;
    --e-global-color-accent: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;
    --e-global-color-5c4c48d: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;
	}
	.elementor-2333 .elementor-element .elementor-flip-box__back {
    background-color: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;
}
.elementor-2333 .elementor-element.elementor-element-4580311 .elementor-button:hover, .elementor-2333 .elementor-element.elementor-element-4580311 .elementor-button:focus {
    color: <?= $_SESSION['Reward_PrimaryColor'] ?> !important;
    background-color: #ffffff !important;
}
.elementor-2333 .elementor-element.elementor-element-25e33f0 > .elementor-background-overlay {
      background-image: linear-gradient(0deg,#FFFFFF00 0%,<?= $_SESSION['Reward_PrimaryColor'] ?> 0%)!important;
 }
</style>   
 <div class="container-login100">        



<head>
	<meta charset="UTF-8">
	
	<style>
	img.wp-smiley,
	img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 .07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
	</style>
	<link rel='stylesheet' id='formidable-css' href='./css/formidable-css-formidableforms.css' media='all' />
	<link rel='stylesheet' id='astra-theme-css-css' href='./css/astra-assets-css-minified-frontend.min.css' media='all' />

	
	

	<link rel='stylesheet' id='wcz-frontend-css' href='./css/woocustomizer-assets-css-frontend.css' media='all' />
	<link rel='stylesheet' id='megamenu-css' href='./css/maxmegamenu-style.css' media='all' />
	<link rel='stylesheet' id='dashicons-css' href='./css/0rt-dashicons.min.css' media='all' />
	<link rel='stylesheet' id='megamenu-genericons-css' href='./css/megamenu-pro-icons-genericons-genericons-genericons.css' media='all' />
	<link rel='stylesheet' id='megamenu-fontawesome-css' href='./css/megamenu-pro-icons-fontawesome-css-font-awesome.min.css' media='all' />
	<link rel='stylesheet' id='megamenu-fontawesome5-css' href='./css/megamenu-pro-icons-fontawesome5-css-all.min.css' media='all' />
	<link rel='stylesheet' id='mightypro-grid-css' href='./css/mighty-addons-pro-assets-css-mt-grid.css' media='all' />
	<link rel='stylesheet' id='mightypro-main-css' href='./css/mighty-addons-pro-assets-css-main.css' media='all' />
	<link rel='stylesheet' id='mt-common-css' href='./css/mighty-addons-assets-css-common.css' media='all' />
	<link rel='stylesheet' id='elementor-icons-css' href='./css/elementor-assets-lib-eicons-css-elementor-icons.min.css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='./css/elementor-assets-css-frontend.min.css' media='all' />
	<style id='elementor-frontend-inline-css'>
	@font-face {
		font-family: eicons;
		src: url(./fonts/eicons.eot);
		src: url(./fonts/eicons.eot#iefix) format("embedded-opentype"), url(./fonts/eicons.woff2) format("woff2"), url(./fonts/eicons.woff) format("woff"), url(./fonts/eicons.ttf) format("truetype"), url(https://www.endurancezonerewards.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
		font-weight: 400;
		font-style: normal
	}
	</style>
	<link rel='stylesheet' id='elementor-post-12-css' href='./css/elementor-css-post-12.css' media='all' />
	<link rel='stylesheet' id='elementor-pro-css' href='./css/elementor-pro-assets-css-frontend.min.css' media='all' />
	<link rel='stylesheet' id='elementor-global-css' href='./css/elementor-css-global.css' media='all' />
	<link rel='stylesheet' id='elementor-post-2333-css' href='./css/elementor-css-post-2333.css' media='all' />
	<link rel='stylesheet' id='slick-css' href='./css/woocommerce-builder-elementor-assets-vendor-slick-slick.min.css' media='1' />
	<link rel='stylesheet' id='venobox-css' href='./css/woocommerce-builder-elementor-assets-vendor-venobox-venobox.css' media='all' />
	<link rel='stylesheet' id='dtwcbe-css' href='./css/woocommerce-builder-elementor-assets-css-style.css' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.8.1' media='all' />
	
	<script src='./js/jquery-jquery.min.js' id='jquery-core-js'></script>
	<script src='./js/jquery-jquery-migrate.min.js' id='jquery-migrate-js'></script>
	<!--[if IE]> <script src='https://www.endurancezonerewards.com/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=3.7.3' id='astra-flexibility-js'></script> <script id='astra-flexibility-js-after'>
flexibility(document.documentElement);
</script> <![endif]-->
	<link rel="https://api.w.org/" href="https://www.endurancezonerewards.com/wp-json/" />
	<link rel="alternate" type="application/json" href="https://www.endurancezonerewards.com/wp-json/wp/v2/pages/2333" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.endurancezonerewards.com/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.endurancezonerewards.com/wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 5.8.1" />
	<meta name="generator" content="WooCommerce 5.4.2" />
	<link rel="canonical" href="https://www.endurancezonerewards.com/home-static/" />
	<link rel='shortlink' href='https://www.endurancezonerewards.com/?p=2333' />
	<link rel="alternate" type="application/json+oembed" href="https://www.endurancezonerewards.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.endurancezonerewards.com%2Fhome-static%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://www.endurancezonerewards.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.endurancezonerewards.com%2Fhome-static%2F&#038;format=xml" />
	<style type="text/css">
	@font-face {
		font-family: "Bilo-Light";
		font-display: auto;
		font-fallback: Arial;
		font-weight: 100;
		src: url(./fonts/Bilo-ExtraLight.otf) format('OpenType');
	}
	
	@font-face {
		font-family: "Bilo-Medium";
		font-display: auto;
		font-fallback: Arial;
		font-weight: 500;
		src: url(./fonts/Bilo-Medium.otf) format('OpenType');
	}
	
	@font-face {
		font-family: "VTF Redzone";
		font-display: auto;
		font-fallback: Arial;
		font-weight: 100;
		src: url(http://www.endurancezonerewards.com/wp-content/uploads/2021/04/VTFRedzone-Classic.otf) format('TrueType'), url(http://www.endurancezonerewards.com/wp-content/uploads/2021/04/VTFRedzone-Classic.otf) format('OpenType');
	}
	</style>
	
	
	<noscript>
		<style>
		.woocommerce-product-gallery {
			opacity: 1 !important;
		}
		</style>
	</noscript>
	<style>
	.recentcomments a {
		display: inline !important;
		padding: 0 !important;
		margin: 0 !important;
	}
	</style>
	<style id="wp-custom-css">
	body .woocs-style-3-du-dialog-starter {
		border-radius: 4px;
		background-position: 75% 4px !important;
		font-family: Bilo-Medium;
		font-size: 18px !important;
		background-size: 35px 35px !important;
		width: 130px !important;
		height: 44px;
		background-color: #333333;
	}
	</style>
	
	<style type="text/css">
	/** Mega Menu CSS: fs **/
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
</head>

<body class="page-template page-template-elementor_canvas page page-id-2333 wp-custom-logo theme-astra woocommerce-no-js wcz-woocommerce mega-menu-primary ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.3 woocommerce-builder-elementor elementor-default elementor-template-canvas elementor-kit-12 elementor-page elementor-page-2333 currency-usd">
	<div data-elementor-type="wp-page" data-elementor-id="2333" class="elementor elementor-2333" data-elementor-settings="[]">
		<div class="elementor-section-wrap">
			<section class="elementor-section elementor-top-section elementor-element elementor-element-679dc4fc elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="679dc4fc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2fb4544" data-id="2fb4544" data-element_type="column">
						<div class="elementor-widget-wrap"> </div>
					</div>
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a4a684b elementor-hidden-phone elementor-hidden-tablet" data-id="a4a684b" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-5e9bd940 elementor-widget elementor-widget-spacer" data-id="5e9bd940" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-578deb30" data-id="578deb30" data-element_type="column">
						<div class="elementor-widget-wrap"> </div>
					</div>
				</div>
			</section>
			
												
			<section class="elementor-section elementor-top-section elementor-element elementor-element-15e55f4a elementor-section-full_width elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle elementor-section-height-default" data-id="15e55f4a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5784db91" data-id="5784db91" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-background-overlay"></div>
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-4fc62704 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="4fc62704" data-element_type="section">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-324e4072" data-id="324e4072" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-8d3d4c2 elementor-widget elementor-widget-heading" data-id="8d3d4c2" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Exclusive rewards from sports brands you love</h2> </div>
											</div>
											<div class="elementor-element elementor-element-8391c98 elementor-hidden-phone elementor-widget elementor-widget-text-editor" data-id="8391c98" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<p style="color:white">Join our sports reward platform in the world and get instant rewards on a huge range of awesome brands.</p>
												</div>
											</div>
											<div class="elementor-element elementor-element-d28c94c elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-text-editor" data-id="d28c94c" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<p>Join our sports
														<br />reward platform in the world.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-581996b" data-id="581996b" data-element_type="column">
										<div class="elementor-widget-wrap"> </div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-bb1cb1f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bb1cb1f" data-element_type="section">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a1dc2fd" data-id="a1dc2fd" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-e20a43c elementor-align-left elementor-widget elementor-widget-button" data-id="e20a43c" data-element_type="widget" data-widget_type="button.default">
												<div class="elementor-widget-container">
													<div class="elementor-button-wrapper">
														<a href="signup_membership.php" class="elementor-button-link elementor-button elementor-size-md" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Join now</span> </span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f73c11d" data-id="f73c11d" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-f662587 elementor-align-left elementor-widget elementor-widget-button" data-id="f662587" data-element_type="widget" data-widget_type="button.default">
												
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section class="elementor-section elementor-top-section elementor-element elementor-element-b8059e0 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="b8059e0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-276dcaa" data-id="276dcaa" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-01ee8cc elementor-widget elementor-widget-image" data-id="01ee8cc" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container"> <img width="1024" height="96" src="./images/Partner-Banner-Bar-1024x96.jpg" class="attachment-large size-large" alt="Sports Rewards" loading="lazy" /> </div>
							</div>
							<div class="elementor-element elementor-element-6bdb11b elementor-widget elementor-widget-heading" data-id="6bdb11b" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Explore our rewards</h2> </div>
							</div>
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-5286afd5 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5286afd5" data-element_type="section" id="discount" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2b1a87f1" data-id="2b1a87f1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-e59155e elementor-flip-box--effect-zoom-in elementor-widget elementor-widget-flip-box" data-id="e59155e" data-element_type="widget" data-widget_type="flip-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-flip-box">
														<div class="elementor-flip-box__layer elementor-flip-box__front">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<div class="elementor-flip-box__image"> <img width="150" height="150" src="./images/apple-256-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="./images/apple-256-150x150.png 150w, ./images/apple-256-100x100.png 100w, ./images/apple-256.png 256w" sizes="(max-width: 150px) 100vw, 150px" /> </div>
																	<h3 class="elementor-flip-box__layer__title"> 8% OFF </h3>
																	<div class="elementor-flip-box__layer__description"> APPLE
																		<br> </div>
																</div>
															</div>
														</div>
														<div class="elementor-flip-box__layer elementor-flip-box__back">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<h3 class="elementor-flip-box__layer__title"> </h3>
																	<div class="elementor-flip-box__layer__description"> </div> <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="signup_membership.php"> JOIN TODAY </a> </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6f2d3e0" data-id="6f2d3e0" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-9bb805b elementor-flip-box--effect-zoom-in elementor-widget elementor-widget-flip-box" data-id="9bb805b" data-element_type="widget" data-widget_type="flip-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-flip-box">
														<div class="elementor-flip-box__layer elementor-flip-box__front">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<div class="elementor-flip-box__image"> <img src="./images/54-542261_adidas-white-logo-png-adidas-white-logo-vector.png" title="54-542261_adidas-white-logo-png-adidas-white-logo-vector" alt="54-542261_adidas-white-logo-png-adidas-white-logo-vector" /> </div>
																	<h3 class="elementor-flip-box__layer__title"> 20% OFF </h3>
																	<div class="elementor-flip-box__layer__description"> ADIDAS </div>
																</div>
															</div>
														</div>
														<div class="elementor-flip-box__layer elementor-flip-box__back">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<h3 class="elementor-flip-box__layer__title"> </h3>
																	<div class="elementor-flip-box__layer__description"> </div> <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="signup_membership.php"> JOIN TODAY </a> </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7d003fd" data-id="7d003fd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-4bb4a0a elementor-flip-box--effect-zoom-in elementor-widget elementor-widget-flip-box" data-id="4bb4a0a" data-element_type="widget" data-widget_type="flip-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-flip-box">
														<div class="elementor-flip-box__layer elementor-flip-box__front">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<div class="elementor-flip-box__image"> <img width="438" height="66" src="./images/Xterra-logo.png" class="attachment-full size-full" alt="" loading="lazy" srcset="./images/Xterra-logo.png 438w, ./images/Xterra-logo-300x45.png 300w" sizes="(max-width: 438px) 100vw, 438px" /> </div>
																	<h3 class="elementor-flip-box__layer__title"> 75% OFF </h3>
																	<div class="elementor-flip-box__layer__description"> XTERRA </div>
																</div>
															</div>
														</div>
														<div class="elementor-flip-box__layer elementor-flip-box__back">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<h3 class="elementor-flip-box__layer__title"> </h3>
																	<div class="elementor-flip-box__layer__description"> </div> <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="signup_membership.php"> JOIN TODAY </a> </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-2825b59 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2825b59" data-element_type="section">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f11c5a3" data-id="f11c5a3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-0b43d5f elementor-flip-box--effect-zoom-in elementor-widget elementor-widget-flip-box" data-id="0b43d5f" data-element_type="widget" data-widget_type="flip-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-flip-box">
														<div class="elementor-flip-box__layer elementor-flip-box__front">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<div class="elementor-flip-box__image"> <img src="./images/343-3430314_logo-audible-logo-white-transparent.png" title="343-3430314_logo-audible-logo-white-transparent" alt="343-3430314_logo-audible-logo-white-transparent" /> </div>
																	<h3 class="elementor-flip-box__layer__title"> 50% OFF </h3>
																	<div class="elementor-flip-box__layer__description"> AUDIBLE </div>
																</div>
															</div>
														</div>
														<div class="elementor-flip-box__layer elementor-flip-box__back">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<h3 class="elementor-flip-box__layer__title"> </h3>
																	<div class="elementor-flip-box__layer__description"> </div> <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="signup_membership.php"> JOIN TODAY </a> </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-edb8f03" data-id="edb8f03" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-06bba0e elementor-flip-box--effect-zoom-in elementor-widget elementor-widget-flip-box" data-id="06bba0e" data-element_type="widget" data-widget_type="flip-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-flip-box">
														<div class="elementor-flip-box__layer elementor-flip-box__front">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<div class="elementor-flip-box__image"> <img width="500" height="192" src="./images/Finis-logo.png" class="attachment-full size-full" alt="" loading="lazy" srcset="./images/Finis-logo.png 500w, ./images/Finis-logo-300x115.png 300w" sizes="(max-width: 500px) 100vw, 500px" /> </div>
																	<h3 class="elementor-flip-box__layer__title"> 20% OFF </h3>
																	<div class="elementor-flip-box__layer__description"> FINIS
																		<br> </div>
																</div>
															</div>
														</div>
														<div class="elementor-flip-box__layer elementor-flip-box__back">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<h3 class="elementor-flip-box__layer__title"> </h3>
																	<div class="elementor-flip-box__layer__description"> </div> <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="signup_membership.php"> JOIN TODAY </a> </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-86e898b" data-id="86e898b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-dd40cd8 elementor-flip-box--effect-zoom-in elementor-widget elementor-widget-flip-box" data-id="dd40cd8" data-element_type="widget" data-widget_type="flip-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-flip-box">
														<div class="elementor-flip-box__layer elementor-flip-box__front">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<div class="elementor-flip-box__image"> <img width="500" height="191" src="./images/Oakley-logo.png" class="attachment-full size-full" alt="Oakley" loading="lazy" srcset="./images/Oakley-logo.png 500w, ./images/Oakley-logo-300x115.png 300w" sizes="(max-width: 500px) 100vw, 500px" /> </div>
																	<h3 class="elementor-flip-box__layer__title"> 20% OFF </h3>
																	<div class="elementor-flip-box__layer__description"> OAKLEY
																		<br> </div>
																</div>
															</div>
														</div>
														<div class="elementor-flip-box__layer elementor-flip-box__back">
															<div class="elementor-flip-box__layer__overlay">
																<div class="elementor-flip-box__layer__inner">
																	<h3 class="elementor-flip-box__layer__title"> </h3>
																	<div class="elementor-flip-box__layer__description"> </div> <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="signup_membership.php"> JOIN TODAY </a> </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section class="elementor-section elementor-top-section elementor-element elementor-element-1e25cea elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1e25cea" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-36a26ab" data-id="36a26ab" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-c7ca8ad elementor-widget elementor-widget-spacer" data-id="c7ca8ad" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-db06e8c elementor-widget elementor-widget-heading" data-id="db06e8c" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Why join?</h2> </div>
							</div>
							<div class="elementor-element elementor-element-58c02ff elementor-widget elementor-widget-text-editor" data-id="58c02ff" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<h4 style="color: white; font-size: 22pt; font-family: bilo-medium;"><strong>GET REWARDED</strong></h4>
									<p style="color: white;">all year round on the biggest sports brands</p>
									<h4 style="color: white; font-family: bilo-medium; font-size: 22pt;"><strong>INSTANT ACCESS</strong></h4>
									<p style="color: white;">to your rewards online</p>
									<h4 style="color: white; font-family: bilo-medium; font-size: 22pt;"><strong>NEW REWARDS</strong></h4>
									<p style="color: white;">frequently added</p>
								</div>
							</div>
							<div class="elementor-element elementor-element-4580311 elementor-align-left elementor-widget elementor-widget-button" data-id="4580311" data-element_type="widget" data-widget_type="button.default">
								<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
										<a href="signup_membership.php" class="elementor-button-link elementor-button elementor-size-md" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">JOIN NOW</span> </span>
										</a>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-6f8b6a7 elementor-widget elementor-widget-text-editor" data-id="6f8b6a7" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<a name="howitwork"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-894fbd4" data-id="894fbd4" data-element_type="column">
						<div class="elementor-widget-wrap"> </div>
					</div>
				</div>
			</section>
			<section class="elementor-section elementor-top-section elementor-element elementor-element-25e33f0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="25e33f0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a2404ac" data-id="a2404ac" data-element_type="column">
						<div class="elementor-widget-wrap"> </div>
					</div>
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-776955e" data-id="776955e" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-15c8578 elementor-widget elementor-widget-spacer" data-id="15c8578" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-cdcd755 elementor-widget elementor-widget-heading" data-id="cdcd755" data-element_type="widget" data-widget_type="heading.default" style="height:60px;">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">How does it work?</h2> </div>
							</div>
							<div class="elementor-element elementor-element-017b3fb elementor-widget elementor-widget-text-editor" data-id="017b3fb" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<h3 style="color: white;"><span style="font-family: bilo-medium;"><strong>1. JOIN TODAY! </strong></span></h3> It takes less than 30 seconds to join.
									<h3 style="color: white;"><span style="font-family: bilo-medium;">2. BROWSE YOUR REWARDS</span></h3> Your Membership Area contains all your rewards in one place. Easy to use, whatever your device.
									<h3 style="color: white;"><span style="font-family: bilo-medium;">3. SAVE MONEY</span></h3> <b></b>Use your rewards on the brands and products you love </div>
							</div>
							<div class="elementor-element elementor-element-1a1b11a elementor-widget elementor-widget-spacer" data-id="1a1b11a" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d01e279" data-id="d01e279" data-element_type="column">
						<div class="elementor-widget-wrap"> </div>
					</div>
				</div>
			</section>
			<section class="elementor-section elementor-top-section elementor-element elementor-element-762d39a3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="762d39a3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-781ec819" data-id="781ec819" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-7a0009f elementor-widget elementor-widget-spacer" data-id="7a0009f" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	
	<!--googleoff: all-->
	<script src='./js/woocommerce-assets-js-frontend-cart-fragments.min.js' id='wc-cart-fragments-js'></script>
	<script src='./js/mighty-addons-assets-js-rpb.js' id='mt-rpbjs-js'></script>
	<script src='./js/ghy-hoverIntent.min.js' id='hoverIntent-js'></script>
	<script id='megamenu-js-extra'>
	var megamenu = {
		"timeout": "300",
		"interval": "100"
	};
	</script>
	<script src='./js/megamenu-js-maxmegamenu.js' id='megamenu-js'></script>
	<script src='./js/megamenu-pro-assets-public.js' id='megamenu-pro-js'></script>
	<script src='./js/woocommerce-builder-elementor-assets-vendor-slick-slick.min.js' id='slick-js'></script>
	<script src='./js/woocommerce-builder-elementor-assets-vendor-venobox-venobox.min.js' id='venobox-js'></script>
	<script src='./js/woocommerce-builder-elementor-assets-js-script.min.js' id='dtwcbe-js'></script>
	<script src='./js/k0j-wp-embed.min.js' id='wp-embed-js'></script>
	<script src='./js/jquery-ui-core.min.js' id='jquery-ui-core-js'></script>
	<script src='./js/jquery-ui-mouse.min.js' id='jquery-ui-mouse-js'></script>
	<script src='./js/jquery-ui-slider.min.js' id='jquery-ui-slider-js'></script>
	<script src='./js/woocommerce-assets-js-jquery-ui-touch-punch-jquery-ui-touch-punch.min.js' id='wc-jquery-ui-touchpunch-js'></script>
	<script src='./js/woocommerce-currency-switcher-js-price-slider_33.js' id='wc-price-slider_33-js'></script>
	<script src='./js/woocommerce-currency-switcher-js-front.js' id='woocommerce-currency-switcher-js'></script>
	<script src='./js/elementor-pro-assets-lib-smartmenus-jquery.smartmenus.min.js' id='smartmenus-js'></script>
	<script src='./js/woocommerce-currency-switcher-views-shortcodes-styles-style-3-actions.js' id='woocs-style-3-js'></script>
	<script src='./js/elementor-pro-assets-js-webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script>
	<script src='./js/elementor-assets-js-webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script>
	<script src='./js/elementor-assets-js-frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
	<script id='elementor-pro-frontend-js-before'>
	var ElementorProFrontendConfig = {
		"ajaxurl": "https:\/\/www.endurancezonerewards.com\/wp-admin\/admin-ajax.php",
		"nonce": "f5017f8bcd",
		"urls": {
			"assets": "https:\/\/www.endurancezonerewards.com\/wp-content\/plugins\/elementor-pro\/assets\/"
		},
		"i18n": {
			"toc_no_headings_found": "No headings were found on this page."
		},
		"shareButtonsNetworks": {
			"facebook": {
				"title": "Facebook",
				"has_counter": true
			},
			"twitter": {
				"title": "Twitter"
			},
			"google": {
				"title": "Google+",
				"has_counter": true
			},
			"linkedin": {
				"title": "LinkedIn",
				"has_counter": true
			},
			"pinterest": {
				"title": "Pinterest",
				"has_counter": true
			},
			"reddit": {
				"title": "Reddit",
				"has_counter": true
			},
			"vk": {
				"title": "VK",
				"has_counter": true
			},
			"odnoklassniki": {
				"title": "OK",
				"has_counter": true
			},
			"tumblr": {
				"title": "Tumblr"
			},
			"digg": {
				"title": "Digg"
			},
			"skype": {
				"title": "Skype"
			},
			"stumbleupon": {
				"title": "StumbleUpon",
				"has_counter": true
			},
			"mix": {
				"title": "Mix"
			},
			"telegram": {
				"title": "Telegram"
			},
			"pocket": {
				"title": "Pocket",
				"has_counter": true
			},
			"xing": {
				"title": "XING",
				"has_counter": true
			},
			"whatsapp": {
				"title": "WhatsApp"
			},
			"email": {
				"title": "Email"
			},
			"print": {
				"title": "Print"
			}
		},
		"menu_cart": {
			"cart_page_url": "https:\/\/www.endurancezonerewards.com\/ez-cart\/",
			"checkout_page_url": "https:\/\/www.endurancezonerewards.com\/ez-checkout\/"
		},
		"facebook_sdk": {
			"lang": "en_US",
			"app_id": ""
		},
		"lottie": {
			"defaultAnimationUrl": "https:\/\/www.endurancezonerewards.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
		}
	};
	</script>
	<script src='./js/elementor-pro-assets-js-frontend.min.js' id='elementor-pro-frontend-js'></script>
	<script src='./js/elementor-assets-lib-waypoints-waypoints.min.js' id='elementor-waypoints-js'></script>
	<script src='./js/elementor-assets-lib-swiper-swiper.min.js' id='swiper-js'></script>
	<script src='./js/elementor-assets-lib-share-link-share-link.min.js' id='share-link-js'></script>
	<script src='./js/elementor-assets-lib-dialog-dialog.min.js' id='elementor-dialog-js'></script>
	<script id='elementor-frontend-js-before'>
	var elementorFrontendConfig = {
		"environmentMode": {
			"edit": false,
			"wpPreview": false,
			"isScriptDebug": false
		},
		"i18n": {
			"shareOnFacebook": "Share on Facebook",
			"shareOnTwitter": "Share on Twitter",
			"pinIt": "Pin it",
			"download": "Download",
			"downloadImage": "Download image",
			"fullscreen": "Fullscreen",
			"zoom": "Zoom",
			"share": "Share",
			"playVideo": "Play Video",
			"previous": "Previous",
			"next": "Next",
			"close": "Close"
		},
		"is_rtl": false,
		"breakpoints": {
			"xs": 0,
			"sm": 480,
			"md": 768,
			"lg": 1025,
			"xl": 1440,
			"xxl": 1600
		},
		"responsive": {
			"breakpoints": {
				"mobile": {
					"label": "Mobile",
					"value": 767,
					"default_value": 767,
					"direction": "max",
					"is_enabled": true
				},
				"mobile_extra": {
					"label": "Mobile Extra",
					"value": 880,
					"default_value": 880,
					"direction": "max",
					"is_enabled": false
				},
				"tablet": {
					"label": "Tablet",
					"value": 1024,
					"default_value": 1024,
					"direction": "max",
					"is_enabled": true
				},
				"tablet_extra": {
					"label": "Tablet Extra",
					"value": 1200,
					"default_value": 1200,
					"direction": "max",
					"is_enabled": false
				},
				"laptop": {
					"label": "Laptop",
					"value": 1366,
					"default_value": 1366,
					"direction": "max",
					"is_enabled": false
				},
				"widescreen": {
					"label": "Widescreen",
					"value": 2400,
					"default_value": 2400,
					"direction": "min",
					"is_enabled": false
				}
			}
		},
		"version": "3.4.0",
		"is_static": false,
		"experimentalFeatures": {
			"e_dom_optimization": true,
			"a11y_improvements": true,
			"e_import_export": true,
			"landing-pages": true,
			"elements-color-picker": true,
			"admin-top-bar": true,
			"form-submissions": true,
			"video-playlist": true
		},
		"urls": {
			"assets": "https:\/\/www.endurancezonerewards.com\/wp-content\/plugins\/elementor\/assets\/"
		},
		"settings": {
			"page": [],
			"editorPreferences": []
		},
		"kit": {
			"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
			"global_image_lightbox": "yes",
			"lightbox_enable_counter": "yes",
			"lightbox_enable_fullscreen": "yes",
			"lightbox_enable_zoom": "yes",
			"lightbox_enable_share": "yes",
			"lightbox_title_src": "title",
			"lightbox_description_src": "description"
		},
		"post": {
			"id": 2333,
			"title": "Home%20%E2%80%93%20Static%20%E2%80%93%20Endurance%20Zone%20Rewards",
			"excerpt": "",
			"featuredImage": false
		}
	};
	</script>
	<script src='./js/elementor-assets-js-frontend.min.js' id='elementor-frontend-js'></script>
	<script src='./js/elementor-pro-assets-js-preloaded-elements-handlers.min.js' id='pro-preloaded-elements-handlers-js'></script>
	<script src='./js/elementor-assets-js-preloaded-modules.min.js' id='preloaded-modules-js'></script>
	<script src='./js/elementor-pro-assets-lib-sticky-jquery.sticky.min.js' id='e-sticky-js'></script>
	<script id='mightypro-main-js-extra'>
	var MightyAddonsPro = {
		"ajaxUrl": "https:\/\/www.endurancezonerewards.com\/wp-admin\/admin-ajax.php",
		"baseUrl": "https:\/\/www.endurancezonerewards.com\/wp-content\/plugins\/mighty-addons-pro\/",
		"instaPagingAction": "get_insta_paging_media"
	};
	</script>
	<script src='./js/mighty-addons-pro-assets-js-main.js' id='mightypro-main-js'></script>
	<script>
	/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
		var t, e = location.hash.substring(1);
		/^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
	}, !1);
	</script>
</div>
<?php 
require "footer_info.php";
?> 
    </body>
</html>