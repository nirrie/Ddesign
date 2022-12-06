<!DOCTYPE html>
<html lang="en">
<head>
    <title>Desk & Design</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ url ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url ('css/slick.css') }}">
    <link rel="stylesheet" href="{{ url ('css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ url ('css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ url ('js/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ url ('css/jquery.scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ url ('fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url ('css/style.css') }}">
</head>
<body class="home">
<header class="header style7">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message">
                    Welkom bij Desk & Design online winkel!
                </div>
            </div>
            <div class="top-bar-right">
                <div class="header-language">
                    <div class="cleric-language cleric-dropdown">
                        <a href="#" class="active language-toggle" data-cleric="cleric-dropdown">
								<span>
                                Nederlands (EUR)
									
								</span>
                        </a>
                        <ul class="cleric-submenu">
                            <li class="switcher-option">
                                <a href="#">
										<span>
                                        English (USD)
										</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="header-user-links">
                    <li>
                        <a href="{{ route('home.login') }}">Login of Registreer</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        <a href="{{ route('home.index') }}">
                            <img src="/images/logo.png" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                    <div class="block-search-block">
                        <form class="form-search form-search-width-category">
                            <div class="form-content">
                                <div class="inner">
                                    <input type="text" class="input" name="s" value="" placeholder="Zoek hier">
                                </div>
                                <button class="btn-search" type="submit">
                                    <span class="icon-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <div class="block-minicart cleric-mini-cart block-header cleric-dropdown">
                            <a href="javascript:void(0);" class="shopcart-icon" data-cleric="cleric-dropdown">
                                Winkelwagen
                                <span class="count">
									0
									</span>
                            </a>
                            <div class="no-product cleric-submenu">
                                <p class="text">
                                    U HEBT
                                    <span>
											 0 ITEM(S)
										</span>
                                    IN UW Winkelwagen
                                </p>
                            </div>
                        </div>
                        <div class="block-account block-header cleric-dropdown">
                            <a href="javascript:void(0);" data-cleric="cleric-dropdown">
                                <span class="flaticon-user"></span>
                            </a>
                            <div class="header-account cleric-submenu">
                                <div class="header-user-form-tabs">
                                    <ul class="tab-link">
                                        <li class="active">
                                            <a data-toggle="tab" aria-expanded="true" href="#header-tab-login">Login</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" aria-expanded="true" href="#header-tab-rigister">Register</a>
                                        </li>
                                    </ul>
                                    <div class="tab-container">
                                        <div id="header-tab-login" class="tab-panel active">
                                            <form method="post" class="login form-login">
                                                <p class="form-row form-row-wide">
                                                    <input type="email" placeholder="Email" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="password" class="input-text" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <label class="form-checkbox">
                                                        <input type="checkbox" class="input-checkbox">
                                                        <span>
																Onthoud mij
															</span>
                                                    </label>
                                                    <input type="submit" class="button" value="Login">
                                                </p>
                                                <p class="lost_password">
                                                    <a href="#">Wachtwoord vergeten?</a>
                                                </p>
                                            </form>
                                        </div>
                                        <div id="header-tab-rigister" class="tab-panel">
                                            <form method="post" class="register form-register">
                                                <p class="form-row form-row-wide">
                                                    <input type="email" placeholder="Email" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="password" class="input-text" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <input type="submit" class="button" value="Register">
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="vertical-wapper block-nav-categori">
                    <div class="block-title">
						<span class="icon-bar">
							<span></span>
							<span></span>
							<span></span>
						</span>
                        <span class="text">ALLE CATEGORIEËN</span>
                    </div>
                    <div class="block-content verticalmenu-content">
                        <ul class="cleric-nav-vertical vertical-menu cleric-clone-mobile-menu">
                            <li class="menu-item">
                                <a href="#" class="cleric-menu-item-title" title="New Arrivals">Nieuw binnen</a>
                            </li>
                            <li class="menu-item">
                                <a title="Hot Sale" href="#" class="cleric-menu-item-title">Hot Sale</a>
                            </li>
                            <li class="menu-item">
                                <a title="Office" href="#" class="cleric-menu-item-title">Kantoren en Bureaus</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a title="Accessories" href="#" class="cleric-menu-item-title">Accessoires</a>
                                <span class="toggle-submenu"></span>
                                <ul role="menu" class=" submenu">
                                    <li class="menu-item">
                                        <a title="Living" href="#" class="cleric-item-title">Voor Woonkamers</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Bedroom" href="#" class="cleric-item-title">Voor Slaapkamers</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Bedroom" href="#" class="cleric-item-title">Voor Uw Bureau</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a title="Tables" href="#" class="cleric-menu-item-title">Tafels</a>
                            </li>
                            <li class="menu-item">
                                <a title="Lighting" href="#" class="cleric-menu-item-title">Lighting</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class="cleric-clone-mobile-menu cleric-nav main-menu " id="menu-main-menu">
                            <li class="menu-item">
                                <a href="{{ route('home.index') }}" class="cleric-menu-item-title" >Home</a>
                                <span class="toggle-submenu"></span>

                            <li class="menu-item">
                                <a href="{{ route('home.gridproducts') }}" class="cleric-menu-item-title" >Winkel</a>
                                <span class="toggle-submenu"></span>
                            </li>
                            <li class="menu-item  menu-item-has-children item-megamenu">
                                <a href="#" class="cleric-menu-item-title" >Pagina's</a>
                                <span class="toggle-submenu"></span>
                                <div class="submenu mega-menu menu-page">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="cleric-custommenu default">
                                                <h2 class="{{ route('home.shoppingcart') }}">Winkelpagina's</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="{{ route('home.shoppingcart') }}">Winkelwagen</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{ route('home.checkout') }}">Uitchecken</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{ route('home.contact') }}">Contact</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{ route('home.error') }}">404</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{ route('home.login') }}">Inloggen/Registreren</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('home.about') }}" class="cleric-menu-item-title">Over ons</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="#">
                    <img src="/images/logo.png" alt="img">
                </a>
            </div>
        </div>
        <div class="item item mobile-search-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="header-searchform-box">
                    <form class="header-searchform">
                        <div class="searchform-wrap">
                            <input type="text" class="search-input" placeholder="Enter keywords to search...">
                            <input type="submit" class="submit button" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="item mobile-settings-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="block-sub-item">
                    <h5 class="block-item-title">Currency</h5>
                    <form class="currency-form cleric-language">
                        <ul class="cleric-language-wrap">
                            <li class="active">
                                <a href="#">
											<span>
												Nederland (EUR)
											</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
											<span>
												English (USD)
											</span>
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="item menu-bar">
            <a class=" mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>

<!-- End Header -->



<div class="main-content">
    <div class="fullwidth-template">
        <div class="home-slider style1 rows-space-30">
            <div class="container">
                <div class="slider-owl owl-slick equal-container nav-center"
                     data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":true, "dots":false, "infinite":true, "speed":1000, "rows":1}'
                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                    <div class="slider-item style1">
                        <div class="slider-inner equal-element">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                  Nieuw binnen!
                                </h5>
                                <h3 class="title-big">
                                  Scandinavians<br/>
                                  Collectie
                                </h3>
                                <div class="price">
                                Prijs vanaf:
                                    <span class="number-price">
											€75.00
										</span>
                                </div>
                                <a href="{{ route('home.gridproducts') }}" class="button btn-shop-the-look bgroud-style">Winkel nu</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item style2">
                        <div class="slider-inner equal-element">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                  Tafelbenodigdheden Aanbieding!
                                </h5>
                                <h3 class="title-big">
                                    Tot <span> 35%</span> <br/> Van de winkelitems
                                </h3>
                                <div class="price">
                                    Prijs vanaf:
                                    <span class="number-price">
											€7.00
										</span>
                                </div>
                                <a href="{{ route('home.gridproducts') }}" class="button btn-shop-the-look bgroud-style">Winkel nu</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item style3">
                        <div class="slider-inner equal-element">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                   Nieuw binnen!!
                                </h5>
                                <h3 class="title-big">
                                    Bedrijfsbureaus <br/>
                                    Collectie
                                </h3>
                                <div class="price">
                                    Prijs vanaf:
                                    <span class="number-price">
											€65.00
										</span>
                                </div>
                                <a href="{{ route('home.gridproducts') }}" class="button btn-shop-the-look bgroud-style">Winkel nu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cleric-tabs  default rows-space-40">
            <div class="container">
                <div class="tab-head">
                    <ul class="tab-link">
                        <li class="active">
                            <a data-toggle="tab" aria-expanded="true" href="#bestseller">bestseller</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#new_arrivals">nieuw binnengekomen </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#top-rated">HOOGSTE BEOORDEELD</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-container">
                    <div id="bestseller" class="tab-panel active">
                        <div class="cleric-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           best
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="{{ route('home.p1') }}">
                                                    <img src="/images/product-item-1.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="{{ route('home.p1') }}">Luxe management bureau met hoogte verstelbaar</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €650
                                                    </del>
                                                    <ins>
                                                        €485
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           best
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-2.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 2</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                          best
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-3.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 3</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           best
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-4.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 4</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                          best
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-5.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 5</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           best
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-6.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 6</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                          best
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-7.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 7</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															best
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-8.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 8</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="new_arrivals" class="tab-panel">
                        <div class="cleric-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-9.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 1</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-10.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 2</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-11.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 3</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-13.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 4</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-14.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 5</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-15.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 6</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-16.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 7</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-2.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 8</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-rated" class="tab-panel">
                        <div class="cleric-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           top 
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-10.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 1</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           top
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-12.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 2</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           top
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-8.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 3</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           top
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-4.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 4</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           top
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-9.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 5</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           top
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-13.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 6</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
                                                           top
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-16.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#"> Product 7</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															top
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="/images/product-item-8.jpg" alt="img">
                                                </a>
                                                <!-- <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Zet op verlanglijst</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Snelle kijken</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Voeg aan winkelwagen
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Product 8</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-wrapp rows-space-60">
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <div class="item-banner style6">
                                <div class="inner">
                                    <div class="container">
                                        <div class="banner-content">
                                            <h4 class="cleric-subtitle">feestdagen actie!</h4>
                                            <h3 class="title">Bespaar <span>25%</span> op alle<br/>items collectie in December
                                            </h3>
                                            <a href="{{ route('home.gridproducts') }}" class="button btn-view-promotion">Winkel nu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<!-- Footer -->
<footer class="footer style7">
    <div class="container">
        <div class="container-wapper">
            <div class="row">
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-sm hidden-md hidden-lg">
                    <div class="cleric-newsletter style1">
                        <div class="newsletter-head">
                            <h3 class="title">Nieuwsbrief</h3>
                        </div>
                        <div class="newsletter-form-wrap">
                            <div class="list">
                            Aanmelden voor onze acties!  <br/> Profiteer als eerste van onze acties
                            </div>
                            <input type="email" class="input-text email email-newsletter"
                                   placeholder="Uw e-mailbrief">
                            <button class="button btn-submit submit-newsletter">ABONNEREN</button>
                        </div>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="cleric-custommenu default">
                        <h2 class="widgettitle">Snelmenu</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">New arrivals</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Nieuw binnen</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Tafels</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs">
                    <div class="cleric-newsletter style1">
                        <div class="newsletter-head">
                            <h3 class="title">Nieuwsbrief</h3>
                        </div>
                        <div class="newsletter-form-wrap">
                            <div class="list">
                            Aanmelden voor onze acties!  <br/> Profiteer als eerste van onze acties
                            </div>
                            <input type="email" class="input-text email email-newsletter"
                                   placeholder="Uw e-mailbrief">
                            <button class="button btn-submit submit-newsletter">ABONNEREN</button>
                        </div>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="cleric-custommenu default">
                        <h2 class="widgettitle">Informatie</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">FAQs</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Order volgen</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Levering</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('home.contact') }}">Contact Ons</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Return</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-end">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="coppyright">
                            Desk & Design © 2022
                            Alle rechten voorbehouden
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="{{ route('home.index') }}">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="#">
					<span class="icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</span>
                verlanglijst
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="#">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							0
						</span>
					</span>
                <span class="text">Winkelwagen</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="{{ route('home.login') }}">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Account
            </a>
        </div>
    </div>
</div>
<a href="#" class="backtotop">
    <i class="fa fa-angle-double-up"></i>
</a>
<script src="/js/jquery-1.12.4.min.js"></script>
<script src="/js/jquery.plugin-countdown.min.js"></script>
<script src="/js/jquery-countdown.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/isotope.min.js"></script>
<script src="/js/jquery.scrollbar.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/mobile-menu.js"></script>
<script src="/js/chosen.min.js"></script>
<script src="/js/slick.js"></script>
<script src="/js/jquery.elevateZoom.min.js"></script>
<script src="/js/jquery.actual.min.js"></script>
<script src="/js/fancybox/source/jquery.fancybox.js"></script>
<script src="/js/lightbox.min.js"></script>
<script src="/js/owl.thumbs.min.js"></script>
<script src="/js/jquery.scrollbar.min.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="/js/frontend-plugin.js"></script>
</body>
</html>