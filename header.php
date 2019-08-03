<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="google-site-verification" content="IEKkazzX_SWH-rq27o9t8T42skPVDWHtRVHamJpw8yE" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145095733-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-145095733-1');
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-T5SKKLB');
	</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5SKKLB" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="page" class="site">

		<header id="" class="pisti-header">
			<div class="quick-contact">
				<div class="container d-none d-lg-block">
					<div class="row">
						<div class="col-12">
							<ul class="pl-0 mb-0 d-flex">
								<li>
									<div class="quick-call d-flex align-items-center">
										<img width="16pt"
											src="https://pistiprints.com/wp-content/uploads/asset/icon/pistiprints-icon-baseline-call-24px.svg"
											class="img-fluid ls-cache-exclude" alt="pisti-phone" />
										<span><a class="quick-panel" target="_blank" href="tel:+6566358358">+65 6635
												8358</a></span>
									</div>
								</li>

								<li>
									<div class="quick-email d-flex align-items-center">
										<img width="16pt"
											src="https://pistiprints.com/wp-content/uploads/asset/icon/pistiprints-icon-baseline-email-24px.svg"
											class="img-fluid ls-cache-exclude" alt="pisti-email" />
										<span><a class="quick-panel" target="_blank"
												href="mailto:sales@pistiprints.com?subject=Enquiries&body=Dear%20Pisti%20Prints,">sales@pistiprints.com</a></span>
									</div>
								</li>

								<li>
									<div class="quick-location d-flex align-items-center">
										<img width="16pt"
											src="https://pistiprints.com/wp-content/uploads/asset/icon/pistiprints-icon-baseline-location_on-24px.svg"
											class="img-fluid ls-cache-exclude" alt="pisti-location" />
										<span><a class="quick-panel" target="_blank"
												href="https://goo.gl/maps/nRipPCEktwfsKd8N8">ARK@Gambas, Sembawang
												(#05-18)</a></span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="container-fluid d-block d-lg-none w-100">
					<div class="row">
						<div class="col-12 d-block d-lg-none mobile-quick-contact pisti-col">
							<ul class="d-flex align-items-center">
								<li class="ml-auto">
									<div class="d-flex align-items-center">
										<a target="_blank" href="tel:+6566358358">
											<img width="24pt"
												src="https://pistiprints.com/wp-content/uploads/asset/icon/pistiprints-icon-baseline-call-24px.svg"
												class="img-fluid ls-cache-exclude" alt="pisti-phone" />
										</a>
									</div>
								</li>
								<li>
									<div class="d-flex align-items-center">
										<a target="_blank" href="mailto:sales@pistiprints.com">
											<img width="24pt"
												src="https://pistiprints.com/wp-content/uploads/asset/icon/pistiprints-icon-baseline-email-24px.svg"
												class="img-fluid ls-cache-exclude" alt="pisti-email" />
										</a>
									</div>
								</li>
								<li class="mr-0">
									<div class="d-flex align-items-center">
										<a target="_blank" href="https://goo.gl/maps/nRipPCEktwfsKd8N8">
											<img width="24pt"
												src="https://pistiprints.com/wp-content/uploads/asset/icon/pistiprints-icon-baseline-location_on-24px.svg"
												class="img-fluid ls-cache-exclude" alt="pisti-location" />
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="pisti-menu">
				<div class="container">
					<div class="row">
						<div class="col-12 p-0">
							<nav class="navbar navbar-expand-lg d-sm-flex justify-content-between">
								<a class="ml-15px pl-15px pl-m-0" href="/">
									<img width="200pt"
										src="https://pistiprints.com/wp-content/uploads/asset/icon/pistiprints-logo-desktop.svg"
										class="main-logo img-fluid d-none d-lg-block ls-cache-exclude"
										alt="pisti-logo-desktop" />
									<img width="50pt"
										src="https://pistiprints.com/wp-content/uploads/asset/icon/pistiprints-logo-mobile.svg"
										class="main-logo img-fluid d-block d-lg-none ls-cache-exclude"
										alt="pisti-logo-mobile" />
								</a>

								<p class="mb-0 d-block d-lg-none wecloming">Welcome</p>

								<button class="navbar-toggler mr-15px" type="button" data-toggle="collapse"
									data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
									aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<div class="pr-15px pl-30px pl-m-0 pisti-menu-desktop d-none d-lg-block navbar-collapse"
										id="pisti-nav-link">
										<ul class="navbar-nav mr-auto navbar-nav-desktop">
											<li class="nav-item pisti-nav-item">
												<a class="nav-link pisti-link pisti-a-unactive nav-pisti"
													href="/">Home</a>
											</li>
											<li class="nav-item pisti-nav-item">
												<a class="nav-link pisti-link pisti-a-unactive nav-products"
													href="/products/">Products</a>
											</li>
											<li class="nav-item pisti-nav-item">
												<a class="nav-link pisti-link pisti-a-unactive nav-faq"
													href="/faq/">F.A.Q</a>
											</li>
											<li class="nav-item pisti-nav-item">
												<a class="nav-link pisti-link pisti-a-unactive nav-contact-us"
													href="/contact/">Contact us</a>
											</li>
										</ul>

										<a href="#" class="request-for-quotes">Request for quotes</a>
									</div>

									<div class="pisti-spacing d-block d-lg-none"></div>

									<div class="pisti-menu-mobile d-block d-lg-none">
										<ul class="navbar-nav mr-auto">
											<li class="nav-item">
												<a class="nav-link pisti-link pisti-mobile-link" href="/">Home</a>
											</li>
											<li class="nav-item">
												<a class="nav-link pisti-link pisti-mobile-link"
													href="/products/">Products</a>
											</li>
											<li class="nav-item">
												<a class="nav-link pisti-link pisti-mobile-link" href="/faq/">F.A.Q</a>
											</li>
											<li class="nav-item">
												<a class="nav-link pisti-link pisti-mobile-link"
													href="/contact-us/">Contact us</a>
											</li>
											<li class="nav-item">
												<a class="accordion nav-link pisti-link pisti-mobile-link">Best
													seller</a>
												<div class="panel">
													<a href="#">Booklet</a>
													<a href="#">Brochure</a>
													<a href="#">Business card</a>
													<a href="#">Flyer</a>
													<a href="#">Foam board</a>
													<a href="#">Leaflet</a>
													<a href="#">Poster</a>
													<a href="#">Sticker</a>
													<a href="#">Shirt customization</a>
												</div>
											</li>
											<li class="nav-item">
												<a class="accordion nav-link pisti-link pisti-mobile-link">Business
													essentials</a>
												<div class="panel">
													<a href="#">Bill book</a>
													<a href="#">Booklet</a>
													<a href="#">Brochure</a>
													<a href="#">Company stamp</a>
													<a href="#">Corporate uniform</a>
													<a href="#">Corporate gift</a>
													<a href="#">Corporate folder</a>
													<a href="#">Daries or planner</a>
													<a href="#">Design Services</a>
													<a href="#">Envelope</a>
													<a href="#">Flyer</a>
													<a href="#">Leaflet</a>
													<a href="#">Letterhead</a>
													<a href="#">Menus</a>
													<a href="#">Name card</a>
													<a href="#">Notepad</a>
													<a href="#">Postcard</a>
													<a href="#">Tag</a>
												</div>
											</li>
											<li class="nav-item">
												<a class="accordion nav-link pisti-link pisti-mobile-link">Event &
													occasions</a>
												<div class="panel">
													<a href="#">Banner</a>
													<a href="#">Birthday card</a>
													<a href="#">Calendar</a>
													<a href="#">Door gift</a>
													<a href="#">Draw string bag</a>
													<a href="#">Event notepad</a>
													<a href="#">Event shirt</a>
													<a href="#">Invitation card</a>
													<a href="#">Live printing</a>
													<a href="#">Money packet</a>
													<a href="#">Poster</a>
													<a href="#">Tent card</a>
													<a href="#">Ticket & voucher</a>
													<a href="#">Tote bag</a>
													<a href="#">Wedding card</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>

			<div class="pisti-alt-menu d-none d-lg-block">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="alt-menu-wrapper">
								<nav class="navbar navbar-expand-lg">
									<ul class="navbar-nav w-100">
										<li class="nav-item dropdown pisti-alt-nav-dropdown">
											<a class="nav-link pisti-alt-link dropdown-toggle pl-0" href="#"
												id="navbarDropdown" role="button" data-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">
												Best seller
											</a>
											<div class="dropdown-menu pisti-alt-nav-dropdown-menu"
												aria-labelledby="navbarDropdown">
												<div class="dropdown-menu-wrapper d-flex">
													<div class="dropdown-item-wrapper flex-grow-1">
														<p class="abc-sort">B</p>
														<a data-item-name="Booklet" data-pisti-product="1"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Booklet</a>
														<a data-item-name="Brochure" data-pisti-product="2"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Brochure</a>
														<a data-item-name="Business card" data-pisti-product="3"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Business card</a>
														<!--                                                     	<p class="abc-sort">&nbsp;</p> -->
														<p class="abc-sort">F</p>
														<a data-item-name="Flyer" data-pisti-product="5"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Flyer</a>
														<a data-item-name="Foam board" data-pisti-product="4"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Foam board</a>
														<!--                                                     	<p class="abc-sort">&nbsp;</p> -->
														<p class="abc-sort">L</p>
														<a data-item-name="Leaflet" data-pisti-product="5"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Leaflet</a>
														<!--                                                     	<p class="abc-sort">&nbsp;</p> -->
														<p class="abc-sort">P</p>
														<a data-item-name="Poster" data-pisti-product="6"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Poster</a>
														<!--                                                     	<p class="abc-sort">&nbsp;</p> -->
														<p class="abc-sort">S</p>
														<a data-item-name="Sticker" data-pisti-product="7"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Sticker</a>
														<a data-item-name="Shirt customization" data-pisti-product="8"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Shirt customization</a>
													</div>
													<div class="dropdown-display-wrapper">
														<!-- 														<div class="replacement"></div> -->
														<div class="display-img replacement">
															<img id="img-replacement"
																class="w-100 img-fluid img-replacement"
																src="https://pistiprints.com/wp-content/uploads/2019/05/test-2.jpg"
																alt="">
														</div>
														<p id="text-replacement"
															class="mb-0 w-100 pisti-title text-replacement"></p>
													</div>
												</div>
											</div>
										</li>
										<li class="nav-item dropdown pisti-alt-nav-dropdown">
											<a class="nav-link pisti-alt-link dropdown-toggle pl-0" href="#"
												id="navbarDropdown" role="button" data-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">
												Business essentials
											</a>
											<div class="dropdown-menu pisti-alt-nav-dropdown-menu"
												aria-labelledby="navbarDropdown">
												<div class="dropdown-menu-wrapper d-flex">
													<div class="dropdown-item-wrapper flex-grow-1">
														<p class="abc-sort">B</p>
														<a data-item-name="Bill book" data-pisti-product="9"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Bill book</a>
														<a data-item-name="Booklet" data-pisti-product="1"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Booklet</a>
														<a data-item-name="Brochure" data-pisti-product="2"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Brochure</a>
														<p class="abc-sort">C</p>
														<a data-item-name="Company stamp" data-pisti-product="10"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Company stamp</a>
														<a data-item-name="Corporate uniform" data-pisti-product="8"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Corporate uniform</a>
														<a data-item-name="Corporate gift" data-pisti-product="11"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Corporate gift</a>
														<a data-item-name="Corporate folder" data-pisti-product="12"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Corporate folder</a>
														<p class="abc-sort">D</p>
														<a data-item-name="Daries or planner" data-pisti-product="13"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Daries or planner</a>
														<a data-item-name="Design services" data-pisti-product="14"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Design services</a>
														<p class="abc-sort">E</p>
														<a data-item-name="Envelope" data-pisti-product="15"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Envelope</a>
														<p class="abc-sort">F</p>
														<a data-item-name="Flyer" data-pisti-product="16"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Flyer</a>
														<p class="abc-sort">L</p>
														<a data-item-name="Leaflet" data-pisti-product="5"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Leaflet</a>
														<a data-item-name="Letterhead" data-pisti-product="17"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Letterhead</a>
														<p class="abc-sort">M</p>
														<a data-item-name="Menus" data-pisti-product="18"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Menus</a>
														<p class="abc-sort">N</p>
														<a data-item-name="Name card" data-pisti-product="3"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Name card</a>
														<a data-item-name="Note book" data-pisti-product="19"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Note book</a>
														<a data-item-name="Notepad" data-pisti-product="20"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Notepad</a>
														<p class="abc-sort">P</p>
														<a data-item-name="Postcard" data-pisti-product="21"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Postcard</a>
														<p class="abc-sort">T</p>
														<a data-item-name="Tag" data-pisti-product="22"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Tag</a>
													</div>
													<div class="dropdown-display-wrapper">
														<!-- 														<div class="replacement"></div> -->
														<div class="display-img replacement">
															<img class="w-100 img-fluid img-replacement"
																src="https://pistiprints.com/wp-content/uploads/2019/05/test-2.jpg"
																alt="">
														</div>
														<p class="mb-0 w-100 pisti-title text-replacement"></p>
													</div>
												</div>
											</div>
										</li>
										<li class="nav-item dropdown pisti-alt-nav-dropdown">
											<a class="nav-link pisti-alt-link dropdown-toggle pl-0" href="#"
												id="navbarDropdown" role="button" data-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">
												Event & occasions
											</a>
											<div class="dropdown-menu pisti-alt-nav-dropdown-menu"
												aria-labelledby="navbarDropdown">
												<div class="dropdown-menu-wrapper d-flex">
													<div class="dropdown-item-wrapper flex-grow-1">
														<p class="abc-sort">B</p>
														<a data-item-name="Banner" data-pisti-product="23"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Banner</a>
														<a data-item-name="Birthday card" data-pisti-product="24"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Birthday card</a>
														<p class="abc-sort">C</p>
														<a data-item-name="Calendar" data-pisti-product="25"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Calendar</a>
														<p class="abc-sort">D</p>
														<a data-item-name="Door gift" data-pisti-product="11"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Door gift</a>
														<a data-item-name="Draw string bag" data-pisti-product="26"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Draw string bag</a>
														<p class="abc-sort">E</p>
														<a data-item-name="Event note pad" data-pisti-product="20"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Event notepad</a>
														<a data-item-name="Event shirt" data-pisti-product="8"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Event shirt</a>
														<p class="abc-sort">I</p>
														<a data-item-name="Invitation card" data-pisti-product="24"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Invitation card</a>
														<p class="abc-sort">L</p>
														<a data-item-name="Live printing" data-pisti-product="27"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Live printing</a>
														<p class="abc-sort">M</p>
														<a data-item-name="Money packet" data-pisti-product="28"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Money packet</a>
														<p class="abc-sort">P</p>
														<a data-item-name="Poster" data-pisti-product="6"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Poster</a>
														<p class="abc-sort">T</p>
														<a data-item-name="Tent card" data-pisti-product="29"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Tent card</a>
														<a data-item-name="Ticket & voucher" data-pisti-product="30"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Ticket & voucher</a>
														<a data-item-name="Tote bag" data-pisti-product="31"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Tote bag</a>
														<p class="abc-sort">W</p>
														<a data-item-name="Wedding card" data-pisti-product="24"
															data-return-name="&nbsp;" onmouseover="onHover(this)"
															onmouseout="onLeave(this)" class="pisti-products"
															href="#">Wedding card</a>
													</div>
													<div class="dropdown-display-wrapper">
														<!-- 														<div class="replacement"></div> -->
														<div class="display-img replacement">
															<img class="w-100 img-fluid img-replacement"
																src="https://pistiprints.com/wp-content/uploads/2019/05/test-2.jpg"
																alt="">
														</div>
														<p class="mb-0 w-100 pisti-title text-replacement"></p>
													</div>
												</div>
											</div>
										</li>
										<li class="nav-item dropdown pisti-alt-nav-dropdown ml-auto">
											<a class="pr-0 nav-link pisti-alt-link dropdown-toggle" href="#"
												id="navbarDropdown" role="button" data-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">
												All products
											</a>
											<div class="dropdown-menu pisti-alt-nav-dropdown-menu dropdown-menu-right"
												aria-labelledby="navbarDropdown">
												<div class="dropdown-menu-wrapper">
													<div class="dropdown-item-wrapper">
														<p class="abc-sort">A</p>
														<a class="" href="#">Acrylic</a>
														<p class="abc-sort">B</p>
														<a class="" href="#">Bookmark</a>
														<a class="" href="#">Badge</a>
														<a class="" href="#">Bill book</a>
														<a class="" href="#">Brochure</a>
														<a class="" href="#">Booklet</a>
														<a class="" href="#">Banner</a>
														<a class="" href="#">Birthday card</a>
														<p class="abc-sort">C</p>
														<a class="" href="#">Card</a>
														<a class="" href="#">Coporate folder</a>
														<a class="" href="#">Coporate uniform</a>
														<a class="" href="#">Coporate gift</a>
														<a class="" href="#">Company stamp</a>
														<p class="abc-sort">D</p>
														<a class="" href="#">Draw string</a>
														<a class="" href="#">Door gift</a>
														<a class="" href="#">Daries or planner</a>
														<a class="" href="#">Design service</a>
														<p class="abc-sort">E</p>
														<a class="" href="#">Event shirt</a>
														<a class="" href="#">Envelope</a>
														<a class="" href="#">Event notepad</a>
														<p class="abc-sort">F</p>
														<a class="" href="#">Flag or Fabric</a>
														<a class="" href="#">Flyer</a>
														<a class="" href="#">Foam board</a>
														<p class="abc-sort">I</p>
														<a class="" href="#">Invitation card</a>
														<p class="abc-sort">L</p>
														<a class="" href="#">Lightbox</a>
														<a class="" href="#">Lable tag</a>
														<a class="" href="#">Letterhead</a>
														<a class="" href="#">Leaflet</a>
														<p class="abc-sort">M</p>
														<a class="" href="#">Magnet</a>
														<a class="" href="#">Menus</a>
														<p class="abc-sort">N</p>
														<a class="" href="#">Notebook</a>
														<a class="" href="#">Notepad</a>
														<a class="" href="#">Name card</a>
														<p class="abc-sort">P</p>
														<a class="" href="#">Paper bag</a>
														<a class="" href="#">Packaging</a>
														<a class="" href="#">Postcard</a>
														<a class="" href="#">Poster</a>
														<p class="abc-sort">S</p>
														<a class="" href="#">Sinages</a>
														<a class="" href="#">Sticker</a>
														<a class="" href="#">Shirt customization</a>
														<p class="abc-sort">T</p>
														<a class="" href="#">Tent card</a>
														<a class="" href="#">Tote bag</a>
														<a class="" href="#">Ticket & voucher</a>
														<p class="abc-sort">W</p>
														<a class="" href="#">Wedding card</a>
														<a class="" href="#">Wall Sticker</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="content" class="site-content">