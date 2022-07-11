<!-- header starts    -->

        <!doctype html>


        <!--[if lt IE 10]> <html  lang="en" class="iex"> <![endif]-->
        <!--[if (gt IE 10)|!(IE)]><!-->
        <html lang="en">
        <!--<![endif]-->
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Mama T | Restaurant  </title>
        <meta name="description" content="Multipurpose HTML template.">
        <script src="{{asset('assets/scripts/jquery.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('assets/scripts/bootstrap/css/bootstrap.css')}}">
        <script src="{{asset('assets/scripts/script.js')}}"></script>
        <link rel="stylesheet" href="{{asset('assets/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/content-box.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/image-box.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animations.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
        <link rel="stylesheet" href="{{asset('assets/scripts/flexslider/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('assets/scripts/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/scripts/php/contact-form.css')}}">
        <link rel="stylesheet" href="{{asset('assets/scripts/social.stream.css')}}">
        <link rel="icon" href="{{asset('assets/images/favicon.png')}}">
        <link rel="stylesheet" href="{{asset('assets/skin.css')}}">
        <!-- Extra optional content header -->
        </head>

        <body>
        <div id="preloader"></div>
        <div class="footer-parallax-container">
        <header class="fixed-top bg-transparent menu-transparent scroll-change wide-area" data-menu-anima="fade-in">

                <!--nav start -->
        @include('layouts.frontend.nav')
        <!-- nav ends -->     
        </header>

<!--header ends --> 

<!-- background banner --> 
@yield('bg-banner')
<!-- end background banner --> 


        <!--body section -->
            @yield('section')
        <!-- end body section --> 

        <!-- Footer section -->
   
    <footer class="footer-base">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-left">
                        <img src="{{asset('assets/images/logo-2.png') }}" alt="" />
                        <hr class="space s" />
                        <p>e-mail <b> federico@pixor.it</b></p>
                        <p>phone <b> (+39) 320-3057955</b></p>
                        <p>fax<b> (+39) 320-3057955</b></p>
                        <p>Skype <b> federico.schiocchet</b> </p>
                        <p><b></b></p>
                    </div>
                    <div class="col-md-4 footer-center text-left">
                        <p>
                            Dolorem urna possimus pretium debitis assumenda, doloribus sem congue molestias itaque ante venenatis
                            sequi exercitation excepteur!
                        </p>
                        <hr class="space l" />
                        <div class="btn-group social-group btn-group-icons">
                            <a target="_blank" href="footer-base.html#" data-social="share-facebook"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="footer-base.html#" data-social="share-twitter"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="footer-base.html#" data-social="share-google"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="footer-base.html#" data-social="share-linkedin"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 footer-right text-left">
                        <h5 class="text-bold">SUBSCRIBE NOW !</h5>
                        <hr class="space s" />
                        <p>
                            Sign up for Gourmet mounthly newsletter and get to know more about our latest adventures and much mores...
                        </p>
                        <hr class="space s" />
                        <form action="http://www.framework-y.com/scripts/php/contact-form.php" class="form-box form-ajax" method="post" data-email="federico@pixor.it">
                            <div class="input-group">
                                <input type="text" class="form-control form-value">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default">Join now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="row copy-row">
                <div class="col-md-12 copy-text">
                    © 2017 Gourmet - Multipurpose & Modern Html Template Handmade by <a href="http://schiocco.io/">schiocco.io</a>
                </div>
            </div>
        </div> --}}
    </footer>
        <!-- End Footer section -->

    <!-- Script tags  -->
            <link rel="stylesheet" href="{{asset('assets/scripts/iconsmind/line-icons.min.css')}}">
            <script async src="{{asset('assets/scripts/bootstrap/js/bootstrap.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/scripts/imagesloaded.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/scripts/parallax.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/scripts/flexslider/jquery.flexslider-min.js')}}"></script>
            <script type="text/javascript" async src="{{asset('assets/scripts/isotope.min.js')}}"></script>
            <script type="text/javascript" async src="{{asset('assets/scripts/php/contact-form.js')}}"></script>
            <script type="text/javascript" async src="{{asset('assets/scripts/jquery.progress-counter.js')}}"></script>
            <script type="text/javascript" async src="{{asset('assets/scripts/jquery.tab-accordion.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/scripts/jquery.slimscroll.min.js')}}"></script>
            <script type="text/javascript" async src="{{asset('assets/scripts/bootstrap/js/bootstrap.popover.min.js')}}"></script>
            <script type="text/javascript" async src="{{asset('assets/scripts/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('assets/scripts/social.stream.min.js')}}"></script>
            <script src="{{asset('assets/scripts/jquery.spritely.min.js')}}"></script>
            <script src="{{asset('assets/scripts/smooth.scroll.min.js')}}"></script>

            </body>
        </html>

    <!-- end script tags -->

