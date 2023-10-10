<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@section('title') @show</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    {{-- <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" /> --}}
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css')}}">
    <style>
        .section-bg-6{
            background-color: #EDB82E;
        }
    </style>

	@stack('style_1')
	@stack('style_2')
</head>
<body>
    <header class="ltn__header-area ltn__header-3 section-bg-6">        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-auto col-4 my-5">
                        <div class="site-logo position-absolute">
                            <a href="#">
                                <img src="{{ asset('assets/user/img/Ecommerce.jpeg') }}" alt="Logo" width="50" height="50">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-xl-block">
                        <div class="header-contact-search">
                            <!-- header-feature-item -->
                            <div class="header-feature-item">
                                <div class="header-feature-icon">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="header-feature-info">
                                    <h6>Phone</h6>
                                    <p><a href="tel:0123456789">+0123-456-789</a></p>
                                </div>
                            </div>
                            <!-- header-search-2 -->
                            <div class="header-search-2">
                                <form action="{{ route('user.product.search') }}" method="GET" >
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-magnifier"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto col-8">
                        <!-- header-options -->
                        <div class="ltn__header-options px-0">
                            <ul>
                                {{-- <li class="d-none">
                                    <!-- ltn__currency-menu -->
                                    <div class="ltn__drop-menu ltn__currency-menu">
                                        <ul>
                                            <li><a href="#" class="dropdown-toggle"><span class="active-currency">USD</span></a>
                                                <ul>
                                                    <li><a href="login.html">USD - US Dollar</a></li>
                                                    <li><a href="wishlist.html">CAD - Canada Dollar</a></li>
                                                    <li><a href="register.html">EUR - Euro</a></li>
                                                    <li><a href="account.html">GBP - British Pound</a></li>
                                                    <li><a href="wishlist.html">INR - Indian Rupee</a></li>
                                                    <li><a href="wishlist.html">BDT - Bangladesh Taka</a></li>
                                                    <li><a href="wishlist.html">JPY - Japan Yen</a></li>
                                                    <li><a href="wishlist.html">AUD - Australian Dollar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li> --}}
                                <li class="d-none">
                                    <!-- header-search-1 -->
                                    <div class="header-search-wrap">
                                        <div class="header-search-1">
                                            <div class="search-icon">
                                                <i class="icon-magnifier for-search-show"></i>
                                                <i class="icon-magnifier-remove for-search-close"></i>
                                            </div>
                                        </div>
                                        <div class="header-search-1-form">
                                            <form id="#" method="get"  action="#">
                                                <input type="text" name="search" value="" placeholder="Search here..."/>
                                                <button type="submit">
                                                    <span><i class="icon-magnifier"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-none"> 
                                    <!-- user-menu -->
                                    <div class="ltn__drop-menu user-menu">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="icon-user"></i></a>
                                                <ul>
                                                    <li><a href="login.html">Sign in</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="account.html">My Account</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <!-- mini-cart 2 -->
                                    <div class="mini-cart-icon mini-cart-icon-2">
                                        <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle d-flex justify-content-end pt-3">
                                            <span class="mini-cart-icon">
                                                <i class="icon-handbag"></i>
                                                <sup id="cart-item">{{ count(session()->get('cart')??[]) }}</sup>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li>      
                                    <!-- Mobile Menu Button -->
                                    <div class="mobile-menu-toggle d-lg-none">
                                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                            <svg viewBox="0 0 800 600">
                                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                                <path d="M300,320 L540,320" id="middle"></path>
                                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                            </svg>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
        
        <!-- header-bottom-area start -->
        <div class="header-bottom-area ltn__header-sticky section-bg-6 ltn__primary-bg---- menu-color-white---- d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col header-menu-column justify-content-center">
                        <div class="sticky-logo">
                            <div class="site-logo">
                                <a href="index.html"><img src="{{ asset('assets/user/img/Ecommerce.jpeg') }}" alt="Logo" width="100" height="100"></a>
                            </div>
                        </div>
                        <div class="header-menu header-menu-2">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class="menu-icon"><a href="{{ route('user.product') }}">Home</a>
                                         
                                        </li>
                                        {{-- <li class="menu-icon">
                                            <a href="About_Us.php">About</a>
                                        </li> --}}
                                        {{-- <li class="menu-icon"><a href="#">Pages</a>
                                            <ul class="mega-menu">
                                                <li><a href="#">Inner Pages</a>
                                                    <ul>
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="portfolio.html">Portfolio</a></li>
                                                        <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Inner Pages</a>
                                                    <ul>
                                                        <li><a href="locations.html">Google Map Locations</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="Shop.php">Shop Pages</a>
                                                    <ul>
                                                        <li><a href="Shop.php">Shop</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                                        <li><a href="product-details.html">Shop details </a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Blog Pages</a>
                                                    <ul>
                                                        <li><a href="blog.html">News</a></li>
                                                        <li><a href="blog-grid.html">News Grid</a></li>
                                                        <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                                        <li><a href="blog-details.html">News details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --}}
                                        <li class="menu-icon">
                                            <a href="{{ route('user.product.shop') }}">Shop</a>
                                        </li>
                                        <li class="menu-icon">
                                            <a href="#">Blog</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom-area end -->
    </header>

    {{-- start: cart --}}
    @include("layouts.cart-layout")
    {{-- end: cart --}}

    {{-- start: content --}}
    @section("content")

    @show
    {{-- end: content --}}

    {{-- start: footer --}}
    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  plr--5---">
        <div class="footer-top-area section-bg-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">My Accoout</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="account.html">My account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Quick Links</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="locations.html">Store Location</a></li>
                                    <li><a href="order-tracking.html">Orders Tracking</a></li>
                                    <li><a href="product-details.html">Size Guide</a></li>
                                    <li><a href="account.html">My account</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Information</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="contact.html">Privacy Page</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="contact.html">Careers</a></li>
                                    <li><a href="faq.html">Delivery Inforamtion</a></li>
                                    <li><a href="contact.html">Term & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Customer Service</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="product-details.html">Shipping Policy</a></li>
                                    <li><a href="contact.html">Help & Contact Us</a></li>
                                    <li><a href="account.html">Returns & Refunds</a></li>
                                    <li><a href="shop.html">Online Stores</a></li>
                                    <li><a href="contact.html">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <h4 class="footer-title">About Our Shop</h4>
                            <div class="footer-logo d-none">
                                <div class="site-logo">
                                    <img src="img/logo.png" alt="Logo">
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo incididunt ut labore et dolore</p>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-location-pin"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>Brooklyn, New York, United States</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-envelope"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:example@example.com">example@example.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20 d-none">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="footer-payment-img">
                                <img src="{{ asset('assets/user/img/icons/payment-6.png') }}" alt="Payment Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-5">
            <div class="container ltn__border-top-2">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="footer-copyright-left">
                            <div class="ltn__copyright-design clearfix">
                                <p>&copy; <span class="current-year"></span> - Just For You</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="footer-copyright-right text-right">
                            <div class="ltn__copyright-menu d-none">
                                <ul>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Claim</a></li>
                                    <li><a href="#">Privacy & Policy</a></li>
                                </ul>
                            </div>
                            <div class="ltn__social-media ">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                                    <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                                    <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->
    {{-- end: footer --}}

    {{-- bootstrap & jquery --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    
	{{-- axios --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- All JS Plugins -->
    <script src="{{ asset('assets/user/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/user/js/main.js') }}"></script>

    
	<script>
		function addToCart(id, code) {
			console.log(id);
			data = {product_id: id};

			axios.post("{{ route('user.cart.add-cart') }}", data)
				.then(response => {
					console.log(response);
					
					const currentAddButton = document.querySelector(`#${code}`);
					currentAddButton.disabled = true;
					const currentAddMobButton = document.querySelector(`#mobile_${code}`);
					currentAddMobButton.innerHTML = `<i class="fa fa-check-circle"></i> Added`;
					currentAddButton.innerHTML = `<i class="fa fa-check-circle"></i> Added`;

					location.reload();
				})
				.catch(error => console.log(error));
		}

		function removeToCart(id, code) {
			console.log(id);
			data = {product_id: id};

			axios.post("{{ route('user.cart.remove-cart') }}", data)
				.then(response => {
					console.log(response);
					
					const currentAddButton = document.querySelector(`#${code}`);
                    if(currentAddButton) {
                        currentAddButton.disabled = true;
                        currentAddButton.innerHTML = `Add To Cart`;
                    }

					location.reload();
				})
				.catch(error => console.log(error));
		}
	</script>

	@stack('script_1')
	@stack('script_2')
</body>
</html>