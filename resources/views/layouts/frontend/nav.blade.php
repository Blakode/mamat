<div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
    <div class="navbar navbar-main">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img class="logo-default scroll-hide" src="{{asset('assets/images/logo.png')}}" alt="logo" /> <!--logo types for b & w  -bg-->
                    <img class="logo-default scroll-show" src="{{asset('assets/images/logo-2.png')}}" alt="logo" />
                    <img class="logo-retina" src="{{asset('assets/images/logo-2.png')}}" alt="logo" />
                </a>
            </div>

            <!-- nav starts -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">Kitchen<span class="caret"></span></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="{{ url('kitchen/food') }}">Food</a></li>
                                <li><a href="{{ url('kitchen/drinks') }}">Drinks</a></li>
                            </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">Contact <span class="caret"></span></a>
                        <ul class="dropdown-menu multi-level">
                            <li><a href="{{ url('contact/contact') }}">Contact-Us</a></li>
                            <li><a href="{{ url('contact/feedback') }}">Reservation</a></li>
                            <li><a href="{{ url('contact/feedback') }}">Feed back</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">Products<span class="caret"></span></a>
                        <ul class="dropdown-menu multi-level">
                            <li>
                                <a href="{{ url('product/services') }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ url('product/pricing') }}">Pricing</a>
                            </li>
                            <li>
                                <a href="{{ url('product/reservation') }}">Reservation</a>
                            </li>
                        
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">About<span class="caret"></span></a>
                        <ul class="dropdown-menu multi-level">
                            <li><a href="{{ url('about/about') }}">About Us</a></li>
                            <li><a href="{{ url('about/gallery') }}">Gallery</a></li>
                        </ul>
                    </li>
        
                  
                </ul>
                <!--checkout segment -->
                <div class="nav navbar-nav navbar-right">
                    
                       
                     

                    <div class="shop-menu-cnt">
                        <i class="fa fa-shopping-cart"><span class="cart-count">1</span></i>
                        <div class="shop-menu">
                            <ul class="shop-cart">
                                <li class="cart-item">
                                    <img src="{{asset('assets/images/gallery/pizza-1.jpg')}}" alt="">
                                    <div class="cart-content">
                                        <h5>Wood Airplain</h5>
                                        <span class="cart-quantity">
                                            1 x 299.00$
                                        </span>
                                    </div>
                                </li>
                            </ul>
                            <p class="cart-total">
                                Subtotal: <span>$299.00</span>
                            </p>
                            <p class="cart-buttons">
                                <a href="javascript:void(0);" class="btn btn-xs cart-view">View Cart</a>
                                <a href="javascript:void(0);" class="btn btn-xs cart-checkout">Checkout</a>
                            </p>
                        </div>
                    </div>
                    @guest
                        <ul class="nav navbar-nav lan-menu">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button"> <span class="im-cap-smiley text-l"></span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/login">Login</a></li>
                                    <li><a href="/register">Sign-up</a></li>
                                </ul>
                            </li>
                        </ul>
                    @endguest
                    @auth
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button"> <span class="im-cap-smiley text-l"></span> </a>
                            <ul class="dropdown-menu">
                                <li><a href="/login">Profile</a></li>
                                <li><a href="/dashboard">DashBoard</a></li>
                                <li><a href="/register">Admin DashBoard</a></li>
                                <li><a href="/logout">logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    @endauth
                    

                    {{-- generate space for the nav bar   --}}
                    <div class="search-box-menu">
                        <div class="search-box scrolldown">
                        </div>
                    </div>
                    </div>
                  
                    

                    <!--checkout segment end -->
            </div>
        </div>
    </div>
</div>