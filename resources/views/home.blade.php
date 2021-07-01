        @extends('layouts.frontend.main_app')

        @section('bg-banner')
            <div class="section-bg-animation header-animation" style="background-image:url('{{asset('assets/images/bg-22.jpg')}}');"> <!-- home wallpaper -->
                <div id="anima-layer-a" class="anima-layer clouds-1"></div>
                <div id="anima-layer-b" class="anima-layer clouds-2"></div>
                <div class="container content overlay-content white">
                    <hr class="space" />
                    <hr class="space" />
                    <div class="row">
                        <div class="col-md-6 ">
                            <h2 class="text-black text-xl anima">PUMP YOUR PARRI</h2>
                            <hr class="space s" />
                            <p class="anima">
                                Ratione numquam. Fugiat alias saepe fuga odio sed exauris, minim anim dolores earum!
                                Veniam corporis cupidatat atque nesciunt dicta justoui varius loreto martino con sostanza e progolo.
                            </p>
                            <hr class="space m" />
                            <a href="javascript:void(0);" class="btn-border circle-button btn btn-sm anima">VIEW MENU</a><span class="space"></span>
                            <hr class="space s visible-sm" />
                            <a href="javascript:void(0);" class="btn-border circle-button btn btn-sm anima">RESERVE NOW</a>
                        </div>
                    </div>
                    <hr class="space" />
                    <hr class="space m" />

                </div>
            </div>
        @endsection

        @section('section')


                <!--optional contents commented out -->
                <!-- <div class="section-bg-color">
                    <div class="container content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="advs-box advs-box-side-icon" data-anima="scale-up" data-trigger="hover">
                                    <div class="icon-box">
                                        <i class="im-fire-flame icon anima"></i>
                                    </div>
                                    <div class="caption-box">
                                        <h3>Original barbeque</h3>
                                        <p>
                                            Eleifend quod do nostrum fermentum reprehenderito mato.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="advs-box advs-box-side-icon" data-anima="scale-up" data-trigger="hover">
                                    <div class="icon-box">
                                        <i class="im-diploma-2 icon anima"></i>
                                    </div>
                                    <div class="caption-box">
                                        <h3>Starred cooks</h3>
                                        <p>
                                            Odit eleifend quod do nostrum fermentum reprehenderito.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="advs-box advs-box-side-icon" data-anima="scale-up" data-trigger="hover">
                                    <div class="icon-box">
                                        <i class="im-alarm icon anima"></i>
                                    </div>
                                    <div class="caption-box">
                                        <h3>Open all week</h3>
                                        <p>
                                            Maleifend quod do nostrum fermentum repreherito mato.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="advs-box advs-box-side-icon" data-anima="scale-up" data-trigger="hover">
                                    <div class="icon-box">
                                        <i class="im-guitar icon anima"></i>
                                    </div>
                                    <div class="caption-box">
                                        <h3>Country music</h3>
                                        <p>
                                            Fermentum repre henderit inim solli citudin maopro.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


                <div class="section-empty">
                    <div class="container content">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="title-base text-left">
                                    <hr />
                                    <h2>Top specialities</h2>
                                    <p>Take a look to the best of the meals</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center-xs">
                                <hr class="space s" />
                                <a href="javascript:void(0);" class="circle-button btn btn-sm">Book a table</a><span class="space"></span>
                                <hr class="space s visible-xs" />
                                <a href="javascript:void(0);" class="circle-button btn btn-sm">Full menu</a>
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="grid-list">
                            <div class="grid-box row">
                                <div class="grid-item col-md-4">
                                    <div class="img-box adv-img adv-img-down-text">
                                        <a class="img-box img-scale-up lightbox i-center" href="{{asset('assets/images/gallery/image-31.jpg')}}">
                                            <div class="caption">
                                                <i class="im-fire-flame"></i>
                                            </div>
                                            <img src="{{asset('assets/images/gallery/image-31.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption-bottom">
                                            <h2><a href="javascript:void(0);">Grilled Hamburgers</a></h2>
                                            <span class="extra-content">$ 12.99</span>
                                            <p>Meat on skewer water spinach okra water chestnut ricebean chips and onion.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-md-4">
                                    <div class="img-box adv-img adv-img-down-text">
                                        <a class="img-box img-scale-up lightbox i-center" href="{{asset('assets/images/gallery/image-31.jpg')}}">
                                            <div class="caption">
                                                <i class="im-fire-flame"></i>
                                            </div>
                                            <img src="{{asset('assets/images/gallery/image-32.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption-bottom">
                                            <h2><a href="javascript:void(0);">Shinbone beef</a></h2>
                                            <span class="extra-content">$ 15.0</span>
                                            <p>Meat on skewer water spinach okra water chestnut ricebean chips and onion.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-md-4">
                                    <div class="img-box adv-img adv-img-down-text">
                                        <a class="img-box img-scale-up lightbox i-center" href="{{asset('assets/images/gallery/image-31.jpg')}}">
                                            <div class="caption">
                                                <i class="im-fire-flame"></i>
                                            </div>
                                            <img src="{{asset('assets/images/gallery/image-33.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption-bottom">
                                            <h2><a href="javascript:void(0);">Grilled skewers</a></h2>
                                            <span class="extra-content">$ 15.99</span>
                                            <p>Meat on skewer water spinach okra water chestnut ricebean chips and onion.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-md-4">
                                    <div class="img-box adv-img adv-img-down-text">
                                        <a class="img-box img-scale-up lightbox i-center" href="{{asset('assets/images/gallery/image-31.jpg')}}">
                                            <div class="caption">
                                                <i class="im-fire-flame"></i>
                                            </div>
                                            <img src="{{asset('assets/images/gallery/image-34.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption-bottom">
                                            <h2><a href="javascript:void(0);">Steak and chips</a></h2>
                                            <span class="extra-content">$ 12.99</span>
                                            <p>Meat on skewer water spinach okra water chestnut ricebean chips and onion.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-md-4">
                                    <div class="img-box adv-img adv-img-down-text">
                                        <a class="img-box img-scale-up lightbox i-center" href="{{asset('assets/images/gallery/image-31.jpg')}}">
                                            <div class="caption">
                                                <i class="im-fire-flame"></i>
                                            </div>
                                            <img src="{{asset('assets/images/gallery/image-35.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption-bottom">
                                            <h2><a href="javascript:void(0);">Skewers of meat</a></h2>
                                            <span class="extra-content">$ 17.99</span>
                                            <p>Meat on skewer water spinach okra water chestnut ricebean chips and onion.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-md-4">
                                    <div class="img-box adv-img adv-img-down-text">
                                        <a class="img-box img-scale-up lightbox i-center" href="{{asset('assets/images/gallery/image-31.jpg')}}">
                                            <div class="caption">
                                                <i class="im-fire-flame"></i>
                                            </div>
                                            <img src="{{asset('assets/images/gallery/image-36.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption-bottom">
                                            <h2><a href="javascript:void(0);">Pork beef</a></h2>
                                            <span class="extra-content">$ 9.99</span>
                                            <p> Meat on skewer water spinach okra water chestnut ricebean chips and onion.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="section-bg-image parallax-window text-center white" data-natural-height="850" data-natural-width="1920" data-parallax="scroll" data-image-src="{{asset('assets/images/bg-23.jpg')}}">
                    <div class="container content">
                        <hr class="space" />
                        <div class="row">
                            <div class="col-md-8 col-center">
                                <div class="title-base">
                                    <hr />
                                    <h2>Food menu</h2>
                                    <p>Delicious plates for you</p>
                                </div>
                                <p class="text-italic">
                                    Tincidunt integer eu augue augue nunc elit dolor luctus placerat scelerisque euismod iaculis eu lacus
                                    vehiculautlaoreet ac, aliquam sit amet justo nunc tempor metus velio Lorem ipsum dolor sit amet consectetur
                                    adipiscing elitsed do eiusmod tempor luctus placerat scelerisque euismod incididunto.
                                </p>
                                <hr class="space m" />
                                <div class="row" data-anima="fade-bottom" data-timeline="asc" data-timeline-time="200" data-time="1000">
                                    <div class="col-md-4 anima">
                                        <div class="icon-box icon-box-top-bottom">
                                            <div class="icon-box-cell">
                                                <i class="im-speach-bubbles text-xl"></i>
                                            </div>
                                            <div class="icon-box-cell">
                                                <label class="text-m">Write us</label>
                                                <p class="text-s">info@resturant.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 anima">
                                        <div class="icon-box icon-box-top-bottom">
                                            <div class="icon-box-cell">
                                                <i class="im-map-marker text-xl"></i>
                                            </div>
                                            <div class="icon-box-cell">
                                                <label class="text-m">Find us</label>
                                                <p class="text-s">info@resturant.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 anima">
                                        <div class="icon-box icon-box-top-bottom">
                                            <div class="icon-box-cell">
                                                <i class="im-phone text-xl"></i>
                                            </div>
                                            <div class="icon-box-cell">
                                                <label class="text-m">Call us</label>
                                                <p class="text-s">+02 3351569887</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="space m" />
                                <a href="javascript:void(0);" class="circle-button btn btn-sm" data-anima="fade-bottom" data-time="1300">Read more</a>
                            </div>
                        </div>
                        <hr class="space" />
                    </div>
                </div>


                <div class="section-bg-color overflow-visible">
                    <div class="container content">
                        <div class="row">
                            <div class="col-md-9">
                                <script type='text/javascript' src='http://www.opentable.com/widget/reservation/loader?rid=347401&domain=com&type=standard&theme=wide&lang=en&overlay=false&iframe=false'></script>
                            </div>
                            <div class="col-md-3">
                                <div class="title-base text-left">
                                    <hr />
                                    <h2>Book a table</h2>
                                    <p>A place reserved only for you</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-empty">
                    <div class="container content">
                        <div class="title-base">
                            <hr />
                            <h2>Our complete menu</h2>
                            <p>Enjoy a true steakhouse experience</p>
                        </div>
                        <hr class="space s" />
                        <div class="row">
                            <div class="col-md-7">
                                <hr class="space m" />
                                <div class="row">
                                    <div class="col-md-6" data-anima="fade-left">
                                        <div class="list-items">
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Ocean trout in saffron</h3>
                                                        <p>Lorem ipsum dolor sit ameto consectetur adipiscing elit</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>21$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Crispy skin Cone </h3>
                                                        <p>Lorem ipsum dolor sit</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>4.99$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Seared blue eye</h3>
                                                        <p>Sunt in culpa qui deserunt</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>10$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Roast spatchcock</h3>
                                                        <p>Excepteur sint occaecat cupidatat non proident</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>15$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Wild mushroom ragout</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>21$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" data-anima="fade-left">
                                        <div class="list-items">
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Grilled beef fillet</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>21$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Slow roasted veal</h3>
                                                        <p>Lorem ipsum dolor sit</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>49$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Wild mushroom ragout</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>21$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Steamed jasmine rice</h3>
                                                        <p>Sunt in culpa qui deserunt</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>10$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Butter poached scampi</h3>
                                                        <p>Excepteur sint occaecat cupidatat non proident</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>50$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-5">
                                <img src="{{asset('assets/images/food-6.jpg')}}" class="abs-image hidden-sm" alt="" />
                            </div>
                        </div>
                        <hr class="space" />

                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{asset('assets/images/food-7.jpg')}}" class="abs-image hidden-sm" alt="" />
                            </div>
                            <div class="col-md-7">
                                <hr class="space m" />
                                <div class="row">
                                    <div class="col-md-6" data-anima="fade-left">
                                        <div class="list-items">
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Slow roasted white</h3>
                                                        <p>Duis aute irure dolor in reprehenderit i esse</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>9.5$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Grass beef fillet</h3>
                                                        <p>Lorem ipsum dolor sit</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>9$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Deboned king quail</h3>
                                                        <p>Sunt in culpa qui deserunt</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>10$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Confit of lamb</h3>
                                                        <p>Excepteur sint occaecat cupidatat non proident</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>15$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Twice cooked duck </h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>21$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" data-anima="fade-left">
                                        <div class="list-items">
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Steamed king crab</h3>
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>9$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Roast partridge</h3>
                                                        <p>Lorem ipsum dolor sit</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>9$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Salad of shaved fenne</h3>
                                                        <p>Sunt in culpa qui officia</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>10$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Beetroot cured kingfish</h3>
                                                        <p>Excepteur sint occaecat cupidatat non proident</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>10$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h3>Wild mushroom ragout</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span>21$</span>
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


                <div class="section-bg-image parallax-window white" data-natural-height="850" data-natural-width="1920" data-parallax="scroll" data-image-src="{{asset('assets/images/bg-30.jpg')}}">
                    <div class="container content">
                        <div class="row">
                            <div class="col-md-10 col-center">
                                <div class="title-base">
                                    <hr />
                                    <h2>Our testimonials</h2>
                                    <p>Take a look to the news food promotions</p>
                                </div>
                                <div class="flexslider carousel outer-navs" data-options="controlNav:true,directionNav:true,numItems:2,itemMargin:15">
                                    <ul class="slides">
                                        <li>
                                            <div class="img-box adv-img adv-img-half-content row-12" data-anima="fade-left" data-trigger="hover">
                                                <i class="fa fa-camera-retro anima"></i>
                                                <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                                    <img src="{{asset('assets/images/gallery/image-31.jpg')}}" alt="" />
                                                </a>
                                                <div class="caption">
                                                    <h2>Grilled Hamburgers</h2>
                                                    <span class="extra-content">$ 12.99</span>
                                                    <p>
                                                        Meat on skewer water spinach okra water chestnut ricebean chips and onion.
                                                    </p>
                                                    <p class="sub"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-box adv-img adv-img-half-content row-12" data-anima="fade-left" data-trigger="hover">
                                                <i class="fa fa-camera-retro anima"></i>
                                                <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                                    <img src="{{asset('assets/images/gallery/image-32.jpg')}}" alt="" />
                                                </a>
                                                <div class="caption">
                                                    <h2>Shinbone beef</h2>
                                                    <span class="extra-content">$ 15.00</span>
                                                    <p>
                                                        Meat on skewer water spinach okra water chestnut ricebean chips and onion.
                                                    </p>
                                                    <p class="sub"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-box adv-img adv-img-half-content row-12" data-anima="fade-left" data-trigger="hover">
                                                <i class="fa fa-camera-retro anima"></i>
                                                <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                                    <img src="{{asset('assets/images/gallery/image-33.jpg')}}" alt="" />
                                                </a>
                                                <div class="caption">
                                                    <h2>Grilled skewers</h2>
                                                    <span class="extra-content">$ 15.00</span>
                                                    <p>
                                                        Meat on skewer water spinach okra water chestnut ricebean chips and onion.
                                                    </p>
                                                    <p class="sub"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-box adv-img adv-img-half-content row-12" data-anima="fade-left" data-trigger="hover">
                                                <i class="fa fa-camera-retro anima"></i>
                                                <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                                    <img src="{{asset('assets/images/gallery/image-34.jpg')}}" alt="" />
                                                </a>
                                                <div class="caption">
                                                    <h2>Steak and chips</h2>
                                                    <span class="extra-content">$ 19.99</span>
                                                    <p>
                                                        Meat on skewer water spinach okra water chestnut ricebean chips and onion.
                                                    </p>
                                                    <p class="sub"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-box adv-img adv-img-half-content row-12" data-anima="fade-left" data-trigger="hover">
                                                <i class="fa fa-camera-retro anima"></i>
                                                <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                                    <img src="{{asset('assets/images/gallery/image-35.jpg')}}" alt="" />
                                                </a>
                                                <div class="caption">
                                                    <h2>Skewers of meat</h2>
                                                    <span class="extra-content">$ 17.99</span>
                                                    <p>
                                                        Meat on skewer water spinach okra water chestnut ricebean chips and onion.
                                                    </p>
                                                    <p class="sub"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-box adv-img adv-img-half-content row-12" data-anima="fade-left" data-trigger="hover">
                                                <i class="fa fa-camera-retro anima"></i>
                                                <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                                    <img src="{{asset('assets/images/gallery/image-36.jpg')}}" alt="" />
                                                </a>
                                                <div class="caption">
                                                    <h2>Pork beef</h2>
                                                    <span class="extra-content">$ 9.99</span>
                                                    <p>
                                                        Meat on skewer water spinach okra water chestnut ricebean chips and onion.
                                                    </p>
                                                    <p class="sub"></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-empty no-paddings hidden-xs">
                    <div class="content">
                        <div class="flexslider carousel nav-inner" data-options="minWidth:120,itemMargin:0,numItems:5,controlNav:false,directionNav:false,minWidth:250">
                            <ul class="slides">
                                <li>
                                    <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                        <i class="fa fa-camera-retro anima"></i>
                                        <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                            <img src="{{asset('assets/images/gallery/image-31.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption">
                                            <h2>Grilled Hamburgers</h2>
                                            <span class="extra-content">$ 12.99</span>
                                            <p>

                                            </p>
                                            <p class="sub"></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                        <i class="fa fa-camera-retro anima"></i>
                                        <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                            <img src="{{asset('assets/images/gallery/image-32.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption">
                                            <h2>Shinbone beef</h2>
                                            <span class="extra-content">$ 15.00</span>
                                            <p>

                                            </p>
                                            <p class="sub"></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-box adv-img adv-img-half-content " data-anima="fade-left" data-trigger="hover">
                                        <i class="fa fa-camera-retro anima"></i>
                                        <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                            <img src="{{asset('assets/images/gallery/image-33.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption">
                                            <h2>Grilled skewers</h2>
                                            <span class="extra-content">$ 15.00</span>
                                            <p>

                                            </p>
                                            <p class="sub"></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                        <i class="fa fa-camera-retro anima"></i>
                                        <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                            <img src="{{asset('assets/images/gallery/image-34.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption">
                                            <h2>Steak and chips</h2>
                                            <span class="extra-content">$ 19.99</span>
                                            <p>

                                            </p>
                                            <p class="sub"></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                        <i class="fa fa-camera-retro anima"></i>
                                        <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                            <img src="{{asset('assets/images/gallery/image-35.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption">
                                            <h2>Skewers of meat</h2>
                                            <span class="extra-content">$ 17.99</span>
                                            <p>

                                            </p>
                                            <p class="sub"></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                        <i class="fa fa-camera-retro anima"></i>
                                        <a href="javascript:void(0);" class="img-box lightbox anima-scale-up anima">
                                            <img src="{{asset('assets/images/gallery/image-36.jpg')}}" alt="" />
                                        </a>
                                        <div class="caption">
                                            <h2>Pork beef</h2>
                                            <span class="extra-content">$ 9.99</span>
                                            <p>
                                            </p>
                                            <p class="sub"></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
            </div>
            <i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
        @endsection



      