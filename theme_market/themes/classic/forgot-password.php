<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_8/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Apr 2021 09:47:22 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Porto - Bootstrap eCommerce Template</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Bootstrap eCommerce Template">
	<meta name="author" content="SW-THEMES">
		
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">
	
	
	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700', 'Shadows+Into+Light:400' ] }
		};
		(function(d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>
	
	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>
<body>
	<div class="page-wrapper">
		<div class="top-notice text-white bg-secondary">
			<div class="container text-center">
				<h5 class="d-inline-block mb-0 mr-2">Get Up to <b>40% OFF</b> New-Season Styles</h5>
				<a href="category.html" class="category">MEN</a>
				<a href="category.html" class="category ml-2 mr-3">WOMEN</a>
				<small>* Limited time only</small>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			</div><!-- End .container -->
		</div><!-- End .top-notice -->

		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="header-left header-dropdowns">
						<div class="header-dropdown">
							<a href="#" class="pl-0"><img src="assets/images/flags/en.png" alt="England flag">ENG</a>
							<div class="header-menu">
								<ul>
									<li><a href="#"><img src="assets/images/flags/en.png" alt="England flag">ENG</a></li>
									<li><a href="#"><img src="assets/images/flags/fr.png" alt="France flag">FRA</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<div class="header-dropdown ml-4">
							<a href="#">USD</a>
							<div class="header-menu">
								<ul>
									<li><a href="#">EUR</a></li>
									<li><a href="#">USD</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->
					</div><!-- End .header-left -->

					<div class="header-right">
						<p class="top-message text-uppercase d-none d-sm-block">Free returns. Standard shipping orders $99+</p>

						<span class="separator"></span>

						<div class="header-dropdown dropdown-expanded mx-3 px-1">
							<a href="#">Links</a>
							<div class="header-menu">
								<ul>
									<li><a href="about.html">About </a></li>
									<li><a href="#">Our Stores</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="#" class="login-link">Log In</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="social-icons">
							<a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
							<a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							<a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-top -->

			<div class="header-middle">
				<div class="container">
					<div class="header-left col-lg-2 w-auto pl-0 mr-3">
						<button class="mobile-menu-toggler" type="button">
							<i class="icon-menu"></i>
						</button>
						<a href="index-2.html" class="logo">
							<img src="assets/images/logo.png" alt="Porto Logo">
						</a>
					</div><!-- End .header-left -->

					<div class="header-right w-lg-max">
						<div class="header-icon header-search header-search-inline header-search-category mr-lg-5 pr-lg-4 w-lg-max">
							<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
							<form action="#" method="get">
								<div class="header-search-wrapper">
									<input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
									<div class="select-custom">
										<select id="cat" name="cat">
											<option value="">All Categories</option>
											<option value="4">Fashion</option>
											<option value="12">- Women</option>
											<option value="13">- Men</option>
											<option value="66">- Jewellery</option>
											<option value="67">- Kids Fashion</option>
											<option value="5">Electronics</option>
											<option value="21">- Smart TVs</option>
											<option value="22">- Cameras</option>
											<option value="63">- Games</option>
											<option value="7">Home &amp; Garden</option>
											<option value="11">Motors</option>
											<option value="31">- Cars and Trucks</option>
											<option value="32">- Motorcycles &amp; Powersports</option>
											<option value="33">- Parts &amp; Accessories</option>
											<option value="34">- Boats</option>
											<option value="57">- Auto Tools &amp; Supplies</option>
										</select>
									</div><!-- End .select-custom -->
									<button class="btn icon-search-3" type="submit"></button>
								</div><!-- End .header-search-wrapper -->
							</form>
						</div><!-- End .header-search -->

						<div class="header-contact d-none d-lg-flex pl-1 mr-xl-5 pr-4">
							<img alt="phone" src="assets/images/phone.png" width="30" height="30" class="pb-1">
							<h6>Call us now<a href="tel:#" class="text-dark font1">+123 5678 890</a></h6>
						</div><!-- End .header-contact -->

						<a href="login.html" class="header-icon login-link pl-1"><i class="icon-user-2"></i></a>

						<a href="#" class="header-icon pl-1"><i class="icon-wishlist-2"></i></a>

						<div class="dropdown cart-dropdown">
							<a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
								<i class="icon-shopping-cart"></i>
								<span class="cart-count badge-circle">2</span>
							</a>

							<div class="dropdown-menu">
								<div class="dropdownmenu-wrapper">
									<div class="dropdown-cart-header">
										<span>2 Items</span>

										<a href="cart.html" class="float-right">View Cart</a>
									</div><!-- End .dropdown-cart-header -->

									<div class="dropdown-cart-products">
										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">Woman Ring</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													x $99.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/cart/product-1.jpg" alt="product" width="80" height="80">
												</a>
												<a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</div><!-- End .product -->

										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">Woman Necklace</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													x $35.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/cart/product-2.jpg" alt="product" width="80" height="80">
												</a>
												<a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</div><!-- End .product -->
									</div><!-- End .cart-product -->

									<div class="dropdown-cart-total">
										<span>Total</span>

										<span class="cart-total-price float-right">$134.00</span>
									</div><!-- End .dropdown-cart-total -->

									<div class="dropdown-cart-action">
										<a href="checkout-shipping.html" class="btn btn-dark btn-block">Checkout</a>
									</div><!-- End .dropdown-cart-total -->
								</div><!-- End .dropdownmenu-wrapper -->
							</div><!-- End .dropdown-menu -->
						</div><!-- End .dropdown -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-middle -->

			<div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{
				'move': [
					{
						'item': '.header-search',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.header-icon:not(.header-search)',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.cart-dropdown',
						'position': 'end',
						'clone': false
					}
				],
				'moveTo': '.container',
				'changes': [
					{
						'item': '.header-search',
						'removeClass': 'header-search-inline w-lg-max mr-lg-5 pr-lg-4',
						'addClass': 'header-search-popup ml-auto'
					},
					{
						'item': '.main-nav',
						'removeClass': 'w-100'
					},
					{
						'item': '.logo',
						'removeClass': 'd-none'
					},
					{
						'item': '.float-right',
						'addClass': 'd-none'
					}
				]
			}">
				<div class="container">
					<a href="index-2.html" class="logo logo-light d-none">
						<img src="assets/images/logo-light.png" alt="Porto Logo">
					</a>
					<nav class="main-nav w-100">
						<ul class="menu">
							<li class="active">
								<a href="index-2.html">Home</a>
							</li>
							<li>
								<a href="category.html">Categories</a>
								<div class="megamenu megamenu-fixed-width megamenu-3cols">
									<div class="row">
										<div class="col-lg-4">
											<a href="#" class="nolink">VARIATION 1</a>
											<ul class="submenu">
												<li><a href="category.html">Fullwidth Banner</a></li>
												<li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
												<li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
												<li><a href="category.html">Left Sidebar</a></li>
												<li><a href="category-sidebar-right.html">Right Sidebar</a></li>
												<li><a href="category-flex-grid.html">Product Flex Grid</a></li>
												<li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
												<li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
											</ul>
										</div>
										<div class="col-lg-4">
											<a href="#" class="nolink">VARIATION 2</a>
											<ul class="submenu">
												<li><a href="category-list.html">List Types</a></li>
												<li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
												<li><a href="category.html">3 Columns Products</a></li>
												<li><a href="category-4col.html">4 Columns Products</a></li>
												<li><a href="category-5col.html">5 Columns Products</a></li>
												<li><a href="category-6col.html">6 Columns Products</a></li>
												<li><a href="category-7col.html">7 Columns Products</a></li>
												<li><a href="category-8col.html">8 Columns Products</a></li>
											</ul>
										</div>
										<div class="col-lg-4 p-0" style="background: #f4f4f4 no-repeat center 82%/cover url('assets/images/menu-banner.jpg')"></div>
									</div>
								</div><!-- End .megamenu -->
							</li>
							<li>
								<a href="product.html">Products</a>
								<div class="megamenu megamenu-fixed-width">
									<div class="row">
										<div class="col-lg-3">
											<a href="#" class="nolink">Variations 1</a>
											<ul class="submenu">
												<li><a href="product.html">Horizontal Thumbs</a></li>
												<li><a href="product-full-width.html">Vertical Thumbnails</a></li>
												<li><a href="product.html">Inner Zoom</a></li>
												<li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
												<li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->
										<div class="col-lg-3">
											<a href="#" class="nolink">Variations 2</a>
											<ul class="submenu">
												<li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
												<li><a href="product-simple.html">Simple Product</a></li>
												<li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->
										<div class="col-lg-3">
											<a href="#" class="nolink">Product Layout Types</a>
											<ul class="submenu">
												<li><a href="product.html">Default Layout</a></li>
												<li><a href="product-extended-layout.html">Extended Layout</a></li>
												<li><a href="product-full-width.html">Full Width Layout</a></li>
												<li><a href="product-grid-layout.html">Grid Images Layout</a></li>
												<li><a href="product-sticky-both.html">Sticky Both Side Info</a></li>
												<li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->

										<div class="col-lg-3 p-0">
											<img src="assets/images/menu-bg.png" alt="Menu banner" class="product-promo">
										</div><!-- End .col-lg-4 -->
									</div><!-- End .row -->
								</div><!-- End .megamenu -->
							</li>
							<li>
								<a href="#">Pages</a>
								<ul>
									<li><a href="cart.html">Shopping Cart</a></li>
									<li><a href="#">Checkout</a>
										<ul>
											<li><a href="checkout-shipping.html">Checkout Shipping</a></li>
											<li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
											<li><a href="checkout-review.html">Checkout Review</a></li>
										</ul>
									</li>
									<li><a href="#">Dashboard</a>
										<ul>
											<li><a href="dashboard.html">Dashboard</a></li>
											<li><a href="my-account.html">My Account</a></li>
										</ul>
									</li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="single.html">Blog Post</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="#" class="login-link">Login</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li class="float-right bg-dark2"><a class="text-white" href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
							<li class="float-right"><a class="text-white" href="#">Special Offer!</a></li>
						</ul>
					</nav>
				</div><!-- End .container -->
			</div><!-- End .header-bottom -->
		</header><!-- End .header -->
		<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="heading mb-4">
					<h2 class="title">Reset Password</h2>
					<p>Please enter your email address below to receive a password reset link.</p>
				</div><!-- End .heading -->

				<form action="#">
					<div class="form-group required-field">
						<label for="reset-email">Email</label>
						<input type="email" class="form-control" id="reset-email" name="reset-email" required>
					</div><!-- End .form-group -->

					<div class="form-footer">
						<button type="submit" class="btn btn-primary">Reset My Password</button>
					</div><!-- End .form-footer -->
				</form>
			</div><!-- End .container -->

			<div class="mb-10"></div><!-- margin -->
		</main><!-- End .main -->

		<footer class="footer">
			<div class="footer-middle">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
							<div class="widget">
								<h4 class="widget-title">About Us</h4>
								<img src="assets/images/logo-footer.png" alt="Logo" class="m-b-3">
								<p class="m-b-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Duis nec vestibulum magna, et dapibus lacus.</p>
								<a href="#" class="read-more text-white">read more...</a>
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
							<div class="widget mb-2">
								<h4 class="widget-title mb-1 pb-1">Contact Info</h4>
								<ul class="contact-info m-b-4">
									<li>
										<span class="contact-info-label">Address:</span>123 Street Name, City, England
									</li>
									<li>
										<span class="contact-info-label">Phone:</span><a href="tel:">(123) 456-7890</a>
									</li>
									<li>
										<span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
									</li>
									<li>
										<span class="contact-info-label">Working Days/Hours:</span>
										Mon - Sun / 9:00 AM - 8:00 PM
									</li>
								</ul>
								<div class="social-icons">
									<a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
									<a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
									<a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
								</div><!-- End .social-icons -->
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
							<div class="widget">
								<h4 class="widget-title">Customer Service</h4>

								<ul class="links">
									<li><a href="#">Help &amp; FAQs</a></li>
									<li><a href="#">Order Tracking</a></li>
									<li><a href="#">Shipping &amp; Delivery</a></li>
									<li><a href="#">Orders History</a></li>
									<li><a href="#">Advanced Search</a></li>
									<li><a href="my-account.html">My Account</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="#">Corporate Sales</a></li>
									<li><a href="#">Privacy</a></li>
								</ul>
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
							<div class="widget">
								<h4 class="widget-title">Popular Tags</h4>

								<div class="tagcloud">
									<a href="#">Bag</a>
									<a href="#">Black</a>
									<a href="#">Blue</a>
									<a href="#">Clothes</a>
									<a href="#">Fashion</a>
									<a href="#">Hub</a>
									<a href="#">Jean</a>
									<a href="#">Shirt</a>
									<a href="#">Skirt</a>
									<a href="#">Sports</a>
									<a href="#">Sweater</a>
									<a href="#">Winter</a>
								</div>
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .footer-middle -->

			<div class="footer-bottom">
				<div class="container d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-copyright py-3 pr-4 mb-0">© Porto eCommerce. 2020. All Rights Reserved</p>

					<img src="assets/images/payments.png" alt="payment methods" class="footer-payments py-3">
				</div>
			</div><!-- End .container -->
		</footer>
	</div><!-- End .page-wrapper -->

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="icon-cancel"></i></span>
			<nav class="mobile-nav">
				<ul class="mobile-menu mb-3">
					<li class="active"><a href="index-2.html">Home</a></li>
					<li>
						<a href="category.html">Categories</a>
						<ul>
							<li><a href="category.html">Full Width Banner</a></li>
							<li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
							<li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
							<li><a href="category.html">Left Sidebar</a></li>
							<li><a href="category-sidebar-right.html">Right Sidebar</a></li>
							<li><a href="category-flex-grid.html">Product Flex Grid</a></li>
							<li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
							<li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
							<li><a href="#">List Types</a></li>
							<li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
							<li><a href="category.html">3 Columns Products</a></li>
							<li><a href="category-4col.html">4 Columns Products</a></li>
							<li><a href="category-5col.html">5 Columns Products</a></li>
							<li><a href="category-6col.html">6 Columns Products</a></li>
							<li><a href="category-7col.html">7 Columns Products</a></li>
							<li><a href="category-8col.html">8 Columns Products</a></li>
						</ul>
					</li>
					<li>
						<a href="product.html">Products</a>
						<ul>
							<li>
								<a href="#">Variations</a>
								<ul>
									<li><a href="product.html">Horizontal Thumbs</a></li>
									<li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
									<li><a href="product.html">Inner Zoom</a></li>
									<li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
									<li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Variations</a>
								<ul>
									<li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
									<li><a href="product-simple.html">Simple Product</a></li>
									<li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Product Layout Types</a>
								<ul>
									<li><a href="product.html">Default Layout</a></li>
									<li><a href="product-extended-layout.html">Extended Layout</a></li>
									<li><a href="product-full-width.html">Full Width Layout</a></li>
									<li><a href="product-grid-layout.html">Grid Images Layout</a></li>
									<li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
									<li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
						<ul>
							<li><a href="cart.html">Shopping Cart</a></li>
							<li>
								<a href="#">Checkout</a>
								<ul>
									<li><a href="checkout-shipping.html">Checkout Shipping</a></li>
									<li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
									<li><a href="checkout-review.html">Checkout Review</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="#" class="login-link">Login</a></li>
							<li><a href="forgot-password.html">Forgot Password</a></li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a>
						<ul>
							<li><a href="single.html">Blog Post</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
					<li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
				</ul>

				<ul class="mobile-menu">
					<li><a href="my-account.html">Track Order </a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="category.html">Our Stores</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="#">Help &amp; FAQs</a></li>
				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="social-icons">
				<a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
				<a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
				<a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
			</div><!-- End .social-icons -->
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

	<!-- Add Cart Modal -->
	<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-body add-cart-box text-center">
			<p>You've just added this product to the<br>cart:</p>
			<h4 id="productTitle"></h4>
			<img src="#" id="productImage" width="100" height="100" alt="adding cart image">
			<div class="btn-actions">
				<a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
				<a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>



	<!-- Plugins JS File -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins.min.js"></script>

	<!-- Main JS File -->
	<script src="assets/js/main.min.js"></script>
</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_8/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Apr 2021 09:47:22 GMT -->
</html>