<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Thrifting</title>

	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/fontawesome-free-5.0.1/css/fontawesome-all.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.2.1/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.2.1/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/slick-1.8.0/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/main_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/responsive.css')}}">

</head>

<body class="antialiased">
	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="top_bar_contact_item">
								<div class="top_bar_icon"><img src="assets/images/phone.png" alt=""></div>081228944703
							</div>
							<div class="top_bar_contact_item">
								<div class="top_bar_icon"><img src="assets/images/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">moonproject@gmail.com</a>
							</div>
							<div class="top_bar_content ml-auto">
								<div class="top_bar_user">
									<div class="user_icon"><img src="assets/images/user.svg" alt=""></div>
									
									<div><a href="/logout">Logout</a></div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Main -->

			<div class="header_main">
				<div class="container">
					<div class="row">

						<!-- Logo -->
						<div class="col-lg-2 col-sm-3 col-3 order-1">
							<div class="logo_container">
								<div class="logo"><a href="/index">Moon.Co</a></div>
							</div>
						</div>

						<!-- Search -->
						<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
							<div class="header_search">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<form action="#" class="header_search_form clearfix">
											<input type="search" required="required" class="header_search_input" placeholder="Search for products...">

											<div class="custom_dropdown">

												<div class="custom_dropdown_list">
													<span class="custom_dropdown_placeholder clc">All Categories</span>
													<i class="fas fa-chevron-down"></i>

													<ul class="custom_list clc">
														@foreach($category as $c)
														<li><a class="clc" href="#">{{ $c->name }}</a></li>
														@endforeach
													</ul>

												</div>

											</div>
											<button type="submit" class="header_search_button trans_300" value="Submit"><img src="asset/images/search.png" alt=""></button>
										</form>
									</div>
								</div>
							</div>
						</div>

						<!-- Wishlist -->
						<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
							<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist d-flex flex-row align-items-center justify-content-end">
									<div class="wishlist_icon"><img src="assets/images/heart.png" alt=""></div>
									<div class="wishlist_content">
										<div class="wishlist_text"><a href="#">Wishlist</a></div>
										<div class="wishlist_count">115</div>
									</div>
								</div>

								<!-- Cart -->
								<div class="cart">
									<div class="cart_container d-flex flex-row align-items-center justify-content-end">
										<div class="cart_icon">
											<img src="assets/images/cart.png" alt="">
											<div class="cart_count"><span>10</span></div>
										</div>
										<div class="cart_content">
											<div class="cart_text"><a href="#">Cart</a></div>
											<div class="cart_price">--</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="main_nav_content d-flex flex-row">

								<!-- Categories Menu -->

								<div class="cat_menu_container">
									<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
										<div class="cat_burger"><span></span><span></span><span></span></div>
										<div class="cat_menu_text">categories</div>
									</div>

									<ul class="cat_menu">
										@foreach($category as $C)
										<li><a href="#">{{ $C->name }}<i class="fas fa-chevron-right ml-auto"></i></a></li>
										@endforeach
									</ul>
								</div>

								<!-- Main Nav Menu -->

								<div class="main_nav_menu ml-auto">
									<ul class="standard_dropdown main_nav_dropdown">
										<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="blog.html">Tentang Kami<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="contact.html">Hubungi Kami<i class="fas fa-chevron-down"></i></a></li>
									</ul>
								</div>

								<!-- Menu Trigger -->

								<div class="menu_trigger_container ml-auto">
									<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
										<div class="menu_burger">
											<div class="menu_trigger_text">menu</div>
											<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</nav>

			<!-- Menu -->

			<div class="page_menu">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="page_menu_content">

								<div class="page_menu_search">
									<form action="#">
										<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
									</form>
								</div>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item"><a href="blog.html">Tentang Kami<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">Hubungi Kami<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>

		<!-- Banner -->

		<div class="banner">
			<div class="banner_background" style="background-image:url(asset/images/banner_background.jpg)"></div>
			<div class="container fill_height">
				<div class="row fill_height">
					<div class="banner_product_image"><img src="asset/images/banner_product.png" alt=""></div>
					<div class="col-lg-5 offset-lg-4 fill_height">
						<div class="banner_content">
							<h1 class="banner_text">Hoodie Stone Island</h1>
							<div class="banner_price"><span>Rp 1.500.000</span>Rp 980.000</div>
							<div class="banner_product_name">Stone Island Size L</div>
							<div class="button banner_button"><a href="#">Shop Now</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Deals of the week -->

		<div class="deals_featured">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Deals -->

						<div class="deals">
							<div class="deals_title">Promo Minggu ini</div>
							<div class="deals_slider_container">

								<!-- Deals Slider -->
								<div class="owl-carousel owl-theme deals_slider">

									<!-- Deals Item -->
									<div class="owl-item deals_item">
										<div class="deals_image"><img src="images/deals.png" alt=""></div>
										<div class="deals_content">
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_category"><a href="#">Crewnecks</a></div>
												<div class="deals_item_price_a ml-auto">Rp 149.000</div>
											</div>
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_name">Hooligans</div>
												<div class="deals_item_price ml-auto">Rp 129.900</div>
											</div>
											<div class="available">
												<div class="available_line d-flex flex-row justify-content-start">
													<div class="available_title">Available: <span>6</span></div>
													<div class="sold_title ml-auto">Already sold: <span>28</span></div>
												</div>
												<div class="available_bar"><span style="width:17%"></span></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div>
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer1_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Deals Item -->
									<div class="owl-item deals_item">
										<div class="deals_image"><img src="assets/images/deals.png" alt=""></div>
										<div class="deals_content">
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_category"><a href="#">Hoodie</a></div>
												<div class="deals_item_price_a ml-auto">$300</div>
											</div>
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_name"></div>GAP
												<div class="deals_item_price ml-auto">$225</div>
											</div>
											<div class="available">
												<div class="available_line d-flex flex-row justify-content-start">
													<div class="available_title">Available: <span>6</span></div>
													<div class="sold_title ml-auto">Already sold: <span>28</span></div>
												</div>
												<div class="available_bar"><span style="width:17%"></span></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div>
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer2_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer2_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer2_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Deals Item -->
									<div class="owl-item deals_item">
										<div class="deals_image"><img src="asset/images/deals.png" alt=""></div>
										<div class="deals_content">
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_category"><a href="#">Hoodie</a></div>
												<div class="deals_item_price_a ml-auto">$300</div>
											</div>
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_name">Maternal</div>
												<div class="deals_item_price ml-auto">$225</div>
											</div>
											<div class="available">
												<div class="available_line d-flex flex-row justify-content-start">
													<div class="available_title">Available: <span>6</span></div>
													<div class="sold_title ml-auto">Already sold: <span>28</span></div>
												</div>
												<div class="available_bar"><span style="width:17%"></span></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div>
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer3_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer3_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer3_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

							</div>

							<div class="deals_slider_nav_container">
								<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
								<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
							</div>
						</div>

						<!-- Featured -->
						<div class="featured">
							<div class="tabbed_container">
								<div class="tabs">
									<ul class="clearfix">
										<li class="active">Pilih Produk</li>
									</ul>
									<div class="tabs_line"><span></span></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="featured_slider slider">

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_1.png" alt=""></div>
												<div class="product_content">
													<div class="product_price discount">$225<span>$300</span></div>
													<div class="product_name">
														<div><a href="product.html">Hooligans</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_2.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">House of Smith</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button active">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_3.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Rougneck</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_4.png" alt=""></div>
												<div class="product_content">
													<div class="product_price discount">$225<span>$300</span></div>
													<div class="product_name">
														<div><a href="product.html">Skymoo</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_5.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">RSCH</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_6.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Erigo</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_7.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Stone Island</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_8.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Hammerstout</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_1.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Dikies</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_2.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Screamous</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_3.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Off White</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_4.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Jordan</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_5.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Compass</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_6.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Addidas</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_7.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Heuvel Tribe</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_8.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">brey.co</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

									</div>
									<div class="featured_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->

								<div class="product_panel panel">
									<div class="featured_slider slider">

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_1.png" alt=""></div>
												<div class="product_content">
													<div class="product_price discount">$225<span>$300</span></div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_2.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Apple iPod shuffle</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button active">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_3.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Sony MDRZX310W</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_4.png" alt=""></div>
												<div class="product_content">
													<div class="product_price discount">$225<span>$300</span></div>
													<div class="product_name">
														<div><a href="product.html">LUNA Smartphone</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_5.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Canon STM Kit...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_6.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Samsung J330F...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_7.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Lenovo IdeaPad</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_8.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Digitus EDNET...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_1.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_2.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_3.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_4.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_5.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_6.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_7.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_8.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

									</div>
									<div class="featured_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->

								<div class="product_panel panel">
									<div class="featured_slider slider">

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_1.png" alt=""></div>
												<div class="product_content">
													<div class="product_price discount">$225<span>$300</span></div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_2.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Apple iPod shuffle</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button active">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_3.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Sony MDRZX310W</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_4.png" alt=""></div>
												<div class="product_content">
													<div class="product_price discount">$225<span>$300</span></div>
													<div class="product_name">
														<div><a href="product.html">LUNA Smartphone</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_5.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Canon STM Kit...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_6.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Samsung J330F...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_7.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Lenovo IdeaPad</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_8.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Digitus EDNET...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_1.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_2.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_3.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_4.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_5.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_6.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_7.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="asset/images/featured_8.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name">
														<div><a href="product.html">Huawei MediaPad...</a></div>
													</div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

									</div>
									<div class="featured_slider_dots_cover"></div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Popular Categories -->

		<div class="popular_categories">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="popular_categories_content">
							<div class="popular_categories_title">Kategori Populer</div>
							<div class="popular_categories_slider_nav">
								<div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
								<div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
							</div>
						</div>
					</div>

					<!-- Popular Categories Slider -->

					<div class="col-lg-9">
						<div class="popular_categories_slider_container">
							<div class="owl-carousel owl-theme popular_categories_slider">
								@foreach($category as $c)
								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="asset/images/popular_1.png" alt=""></div>
										<div class="popular_category_text"> {{ $c->name }}</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Recently Viewed -->

		<div class="viewed">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="viewed_title_container">
							<h3 class="viewed_title">Terakhir Dilihat</h3>
							<div class="viewed_nav_container">
								<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
								<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
							</div>
						</div>

						<div class="viewed_slider_container">

							<!-- Recently Viewed Slider -->

							<div class="owl-carousel owl-theme viewed_slider">

								<!-- Recently Viewed Item -->
								<div class="owl-item">
									<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
										<div class="viewed_image"><img src="asset/images/view_1.jpg" alt=""></div>
										<div class="viewed_content text-center">
											<div class="viewed_price">$225<span>$300</span></div>
											<div class="viewed_name"><a href="#">Hoodie Off Whi..</a></div>
										</div>
										<ul class="item_marks">
											<li class="item_mark item_discount">-25%</li>
											<li class="item_mark item_new">new</li>
										</ul>
									</div>
								</div>

								<!-- Recently Viewed Item -->
								<div class="owl-item">
									<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
										<div class="viewed_image"><img src="asset/images/view_2.jpg" alt=""></div>
										<div class="viewed_content text-center">
											<div class="viewed_price">$379</div>
											<div class="viewed_name"><a href="#">Jordan</a></div>
										</div>
										<ul class="item_marks">
											<li class="item_mark item_discount">-25%</li>
											<li class="item_mark item_new">new</li>
										</ul>
									</div>
								</div>

								<!-- Recently Viewed Item -->
								<div class="owl-item">
									<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
										<div class="viewed_image"><img src="asset/images/view_3.jpg" alt=""></div>
										<div class="viewed_content text-center">
											<div class="viewed_price">$225</div>
											<div class="viewed_name"><a href="#">Stone Island</a></div>
										</div>
										<ul class="item_marks">
											<li class="item_mark item_discount">-25%</li>
											<li class="item_mark item_new">new</li>
										</ul>
									</div>
								</div>

								<!-- Recently Viewed Item -->
								<div class="owl-item">
									<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
										<div class="viewed_image"><img src="asset/images/view_4.jpg" alt=""></div>
										<div class="viewed_content text-center">
											<div class="viewed_price">$379</div>
											<div class="viewed_name"><a href="#">Heuvel Tribe</a></div>
										</div>
										<ul class="item_marks">
											<li class="item_mark item_discount">-25%</li>
											<li class="item_mark item_new">new</li>
										</ul>
									</div>
								</div>

								<!-- Recently Viewed Item -->
								<div class="owl-item">
									<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
										<div class="viewed_image"><img src="asset/images/view_5.jpg" alt=""></div>
										<div class="viewed_content text-center">
											<div class="viewed_price">$225<span>$300</span></div>
											<div class="viewed_name"><a href="#">H&M</a></div>
										</div>
										<ul class="item_marks">
											<li class="item_mark item_discount">-25%</li>
											<li class="item_mark item_new">new</li>
										</ul>
									</div>
								</div>

								<!-- Recently Viewed Item -->
								<div class="owl-item">
									<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
										<div class="viewed_image"><img src="asset/images/view_6.jpg" alt=""></div>
										<div class="viewed_content text-center">
											<div class="viewed_price">$375</div>
											<div class="viewed_name"><a href="#">Pull and Bear</a></div>
										</div>
										<ul class="item_marks">
											<li class="item_mark item_discount">-25%</li>
											<li class="item_mark item_new">new</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 footer_col">
						<div class="footer_column footer_contact">
							<div class="logo_container">
								<div class="logo"><a href="#">Moon.co</a></div>
							</div>
							<div class="footer_title">Got Question? Call Us 24/7</div>
							<div class="footer_phone">081228944703</div>
							<div class="footer_contact_text">
								<p>Jl.Soekarno Hatta no 15</p>
								<p>Jl.Permata Jingga no 17</p>
							</div>
							<div class="footer_social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									<li><a href="#"><i class="fab fa-google"></i></a></li>
									<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-2 offset-lg-2">
						<div class="footer_column">
							<div class="footer_title">Pembeli</div>
							<ul class="footer_list">
								<li><a href="#">Cara Belanja</a></li>
								<li><a href="#">Cara Memberi Ulasan</a></li>
								<li><a href="#">Cara Komplain</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2">
						<div class="footer_column">
							<div class="footer_title">Toko Online</div>
							<ul class="footer_list">
								<li><a href="#">Tentang Kami</a></li>
								<li><a href="#">Hubungi Kami</a></li>
								<li><a href="#">Kerjasama</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</footer>

		<!-- Copyright -->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
							<div class="copyright_content">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ url ( 'assets/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{ url ( 'assets/js/popper.js')}}"></script>
	<script src="{{ url ( 'assets/js/bootstrap.min.js')}}"></script>

	<script src="{{ url ( 'assets/greensock/TweenMax.min.js')}}"></script>
	<script src="{{ url ( 'assets/greensock/TimelineMax.min.js')}}"></script>
	<script src="{{ url ( 'assets/scrollmagic/ScrollMagic.min.js')}}"></script>
	<script src="{{ url ( 'assets/greensock/animation.gsap.min.js')}}"></script>
	<script src="{{ url ( 'assets/greensock/ScrollToPlugin.min.js')}}"></script>
	<script src="{{ url ( 'assets/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
	<script src="{{ url ( 'assets/slick-1.8.0/slick.js')}}"></script>
	<script src="{{ url ( 'assets/easing/easing.js')}}"></script>

	<script src="{{ url ( 'assets/js/custom.js')}}"></script>

</body>

</html>