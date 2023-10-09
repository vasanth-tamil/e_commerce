 <!-- Utilize Cart Menu Start -->
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
        @php($totalPrice = 0)
        @php($carts = session()->get('cart') ?? [])
        @foreach($carts as $cart)
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset($cart['image']) }}" alt="Image"></a>
                    <button class="mini-cart-item-delete" onclick="removeToCart({{ $cart['id'] }}, '{{ $cart['code'] }}')">
                        <i class="icon-trash"></i>
                    </span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">{{ $cart['name'] }}</a></h6>
                    <span class="mini-cart-quantity">{{ $cart['qty'] }} x {{ Helper::convertPrice($cart['price']) }}</span>
                </div>
            </div>
            @php($totalPrice += $cart['qty'] * $cart['price'])
        @endforeach
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>{{ Helper::convertPrice($totalPrice) }}</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="{{ route('user.cart.view-cart') }}" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="{{ route('user.cart.checkout-page') }}" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>
    </div>
</div>

{{-- mobile view --}}
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="icon-magnifier"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home Style - 01</a></li>
                        <li><a href="index-2.html">Home Style - 02</a></li>
                        <li><a href="index-3.html">Home Style - 03</a></li>
                        <li><a href="index-4.html">Home Style - 04</a></li>
                    </ul>
                </li>
                <li><a href="About_Us.php">About Us</a></li>
                <!-- <li><a href="Shop.php">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="Shop.php">Shop</a></li>
                        <li><a href="shop-grid.html">Shop Grid</a></li>
                        <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                        <li><a href="product-details.html">Shop details </a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="order-tracking.html">Order Tracking</a></li>
                        <li><a href="account.html">My Account</a></li>
                        <li><a href="login.html">Sign in</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </li> -->
                <li><a href="Blog.php">Blog</a>
                    <!-- <ul class="sub-menu">
                        <li><a href="blog.html">News</a></li>
                        <li><a href="blog-grid.html">News Grid</a></li>
                        <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                        <li><a href="blog-details.html">News details</a></li>
                    </ul> -->
                </li>
                <!-- <li><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="locations.html">Google Map Locations</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li> -->
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="account.html" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="icon-user"></i>
                        </span>
                        My Account
                    </a>
                </li>
                <li>
                    <a href="wishlist.html" title="Wishlist">
                        <span class="utilize-btn-icon">
                            <i class="icon-heart"></i>
                            <sup>3</sup>
                        </span>
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="cart.html" title="Shoping Cart">
                        <span class="utilize-btn-icon">
                            <i class="icon-handbag"></i>
                            <sup>5</sup>
                        </span>
                        Shoping Cart
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Utilize Cart Menu End -->
<div class="ltn__utilize-overlay"></div>