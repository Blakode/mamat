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
                    <img class="logo-retina" src="http://templates.framework-y.com/gourmet/images/logo-retina.png" alt="logo" />
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
        
                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"> About <span class="caret"></span></a>
                        <div class="dropdown-menu multi-level">
                            <div class="col">
                                <ul class="fa-ul no-icons text-s">
                                    
                                </ul>
                            </div>
                        
                    </li> -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">Contact <span class="caret"></span></a>
                        <ul class="dropdown-menu multi-level">
                            <li><a href="{{ url('contact/contact') }}">Contact Us</a></li>
                            <li><a href="{{ url('contact/feedback') }}">Feedback</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown mega-dropdown mega-tabs">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">Elements <span class="caret"></span></a>
                        <div class="mega-menu dropdown-menu multi-level row bg-menu">
                            <div class="tab-box" data-tab-anima="fade-left">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="javascript:void(0);">Components</a></li>
                                    <li><a href="javascript:void(0);">Headers</a></li>
                                    <li><a href="javascript:void(0);">Titles</a></li>
                                </ul>
                                <div class="panel active">
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-posterous"></i> <a href="features/components/icons.html">Icons</a></li>
                                            <li><i class="fa-li im-secound"></i> <a href="features/components/counters-countdown.html">Counters</a></li>
                                            <li><i class="fa-li im-clock-back"></i> <a href="features/components/counters-countdown.html">Countdowns</a></li>
                                            <li><i class="fa-li im-libra"></i> <a href="features/components/progress-bars.html">Progress bars</a></li>
                                            <li><i class="fa-li im-arrow-refresh2"></i> <a href="features/components/progress-bars.html">Circle progress bars</a></li>
                                            <li><i class="fa-li im-calendar-4"></i> <a href="features/components/timeline.html">Timeline</a></li>
                                            <li><i class="fa-li im-arrow-outside"></i> <a href="features/containers/section-slider.html">Slider</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-hand-touch"></i> <a href="features/components/buttons.html">Buttons</a></li>
                                            <li><i class="fa-li im-old-camera"></i> <a href="features/components/image-boxes.html">Image boxes</a></li>
                                            <li><i class="fa-li im-old-camera"></i> <a href="features/components/image-boxes-advanced.html">Advanced image boxes</a></li>
                                            <li><i class="fa-li im-id-2"></i> <a href="features/components/content-box.html">Content boxes</a></li>
                                            <li><i class="fa-li im-facebook"></i> <a href="features/components/social-media.html">Social media</a></li>
                                            <li><i class="fa-li im-numbering-list"></i> <a href="features/components/lists.html">Lists</a></li>
                                            <li><i class="fa-li im-map2"></i> <a href="features/components/maps.html">Google maps</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-split-horizontal2window"></i> <a href="features/components/tables.html">Advanced table</a></li>
                                            <li><i class="fa-li im-maximize"></i> <a href="features/containers/lightbox.html">Lightbox and popups</a></li>
                                            <li><i class="fa-li im-arrow-outside"></i> <a href="features/containers/sliders.html">Sliders and carousels</a></li>
                                            <li><i class="fa-li im-scroll-fast"></i> <a href="features/containers/scroll-box-collapse.html">Scroll box</a></li>
                                            <li><i class="fa-li im-download-2"></i> <a href="features/containers/scroll-box-collapse.html">Collapse box</a></li>
                                            <li><i class="fa-li im-new-tab"></i> <a href="features/containers/tabs.html">Tabs</a></li>
                                            <li><i class="fa-li im-new-tab"></i> <a href="features/containers/accordions.html">Accordions</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-speach-bubbles"></i> <a href="features/components/php-contact-form.html">Contact form</a></li>
                                            <li><i class="fa-li im-go-bottom"></i> <a href="features/footers/footer-parallax.html">Footer parallax</a></li>
                                            <li><i class="fa-li im-go-bottom"></i> <a href="features/footers/footer-minimal.html">Footer minimal</a></li>
                                            <li><i class="fa-li im-go-bottom"></i> <a href="features/footers/footer-base.html">Footer base</a></li>
                                            <li><i class="fa-li im-bold-text"></i> <a href="features/components/typography.html">Typography</a></li>
                                            <li><i class="fa-li im-split-foursquarewindow"></i> <a href="features/containers/list-grid.html">Grid</a></li>
                                            <li><i class="fa-li im-split-foursquarewindow"></i> <a href="features/containers/list-masonry.html">Masonry</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-panorama"></i> <a href="features/containers/section-background-image.html">Background image</a></li>
                                            <li><i class="fa-li im-panorama"></i> <a href="features/containers/section-background-image-parallax.html">Background parallax</a></li>
                                            <li><i class="fa-li im-film-strip"></i> <a href="features/containers/section-background-video.html">Background video</a></li>
                                            <li><i class="fa-li im-clouds"></i> <a href="features/containers/section-animations.html">Bg animations</a></li>
                                            <li><i class="fa-li im-clouds"></i> <a href="features/containers/section-animations-parallax.html">Bg animations parallax</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-road"></i> <a href="features/menus/menu-classic.html">Menu classic</a></li>
                                            <li><i class="fa-li im-road"></i> <a href="features/menus/menu-classic-transparent.html">Menu classic transparent</a></li>
                                            <li><i class="fa-li im-road"></i> <a href="features/menus/menu-big-logo.html">Menu big logo</a></li>
                                            <li><i class="fa-li im-road"></i> <a href="features/menus/menu-subline.html">Menu subline</a></li>
                                            <li><i class="fa-li im-road"></i> <a href="features/menus/menu-subtitle.html">Menu subtitle</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-road"></i> <a href="features/menus/menu-middle-logo.html">Menu middle logo</a></li>
                                            <li><i class="fa-li im-road"></i> <a href="features/menus/menu-middle-logo-top.html">Menu middle logo top</a></li>
                                            <li><i class="fa-li im-road"></i> <a href="features/menus/menu-middle-box.html">Menu middle box</a></li>
                                            <li><i class="fa-li im-road"></i> <a href="features/menus/menu-icons.html">Menu icons</a></li>
                                            <li><i class="fa-li im-road"></i> <a href="features/menus/menu-icons-top.html">Menu icons top</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-road-2"></i> <a href="features/menus/menu-side.html">Side classic</a></li>
                                            <li><i class="fa-li im-road-2"></i> <a href="features/menus/menu-side-lateral.html">Side lateral</a></li>
                                            <li><i class="fa-li im-road-2"></i> <a href="features/menus/menu-side-simple.html">Side simple</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-old-camera"></i> <a href="features/titles/template-title-image.html">Image background</a></li>
                                            <li><i class="fa-li im-old-camera"></i> <a href="features/titles/template-title-image-fullscreen.html">Image full-screen</a></li>
                                            <li><i class="fa-li im-old-camera"></i> <a href="features/titles/template-title-image-fullscreen-parallax.html">Image full-screen parallax</a></li>
                                            <li><i class="fa-li im-old-camera"></i> <a href="features/titles/template-title-image-parallax.html">Image parallax</a></li>
                                            <li><i class="fa-li im-old-camera"></i> <a href="features/titles/template-title-image-parallax-ken-burn.html">Image parallax ken-burn</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-film-board"></i> <a href="features/titles/template-title-video-mp4.html">Video background MP4</a></li>
                                            <li><i class="fa-li im-film-board"></i> <a href="features/titles/template-title-video-youtube.html">Video background Youtube</a></li>
                                            <li><i class="fa-li im-film-board"></i> <a href="features/titles/template-title-video-fullscreen.html">Video full-screen</a></li>
                                            <li><i class="fa-li im-film-board"></i> <a href="features/titles/template-title-video-fullscreen-parallax.html">Video full-screen parallax</a></li>
                                            <li><i class="fa-li im-film-board"></i> <a href="features/titles/template-title-video-parallax.html">Video parallax</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-panorama"></i> <a href="features/titles/template-title-base-1.html">Title base 1</a></li>
                                            <li><i class="fa-li im-panorama"></i> <a href="features/titles/template-title-base-2.html">Title base 2</a></li>
                                            <li><i class="fa-li im-panorama"></i> <a href="features/titles/template-title-bootstrap.html">Title bootstrap</a></li>
                                            <li><i class="fa-li im-clouds"></i> <a href="features/titles/template-title-animation.html">Animation background</a></li>
                                            <li><i class="fa-li im-clouds"></i> <a href="features/titles/template-title-animation-parallax.html">Animation parallax</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="fa-ul text-s">
                                            <li><i class="fa-li im-arrow-outside"></i> <a href="features/titles/template-title-slider.html">Slider background</a></li>
                                            <li><i class="fa-li im-arrow-outside"></i> <a href="features/titles/template-title-slider-fullscreen.html">Slider full-screen</a></li>
                                            <li><i class="fa-li im-arrow-outside"></i> <a href="features/titles/template-title-slider-fullscreen-parallax.html">Slider full-screen parallax</a></li>
                                            <li><i class="fa-li im-arrow-outside"></i> <a href="features/titles/template-title-slider-parallax.html">Slider parallax</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <div class="search-box-menu">
                        <div class="search-box scrolldown">
                            <input type="text" class="form-control" placeholder="Search for...">
                        </div>
                        <button type="button" class="btn btn-default btn-search">
                            <span class="fa fa-search"></span>
                        </button>
                    </div>
                    <ul class="nav navbar-nav lan-menu">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><img src="{{asset('assets/images/en.png')}}" alt="" />En<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);"><img src="{{asset('assets/images/it.png')}}" alt="" />IT</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                    <!--checkout segment end -->
            </div>
        </div>
    </div>
</div>