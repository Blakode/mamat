@extends('layouts.frontend.main_app')

@section('bg-banner')
    <div class="section-bg-animation header-animation" style="background-image:url('{{asset('assets/images/bg-22.jpg')}}');"> <!-- home wallpaper -->
        <div id="anima-layer-b" class="anima-layer clouds-2"></div>
        <div class="container content overlay-content white">
           
            <div class="row">
                <div class="col-md-6 title-modern title-modern-2 st-icon text-center">
                    <h2>PUMP YOUR PARRI</h2>
                    <hr />
                   
                </div>
            </div>
         
        </div>
    </div>
@endsection

@section('section')
               {{-- album menu starts here/ order of precedence to dispaly content --}}
       
               <div class="section-bg-color">
                <div class="container content">
                    <div class="album-main" data-album-anima="fade-bottom">
                        <div class="album-list row">
                            <div class="album-box col-md-4">
                                <div class="img-box scale adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                    <a href="#menu-albums" class="img-box anima-scale-up anima">
                                        <img alt="" src="{{asset('assets/images/gallery/image-31.jpg')}}">
                                    </a>
                                    <div class="caption">
                                        <h2 class="album-name">Foods</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="album-box col-md-4" data-album-id="album-3">
                                <div class="img-box scale adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                    <a href="#menu-albums" class="img-box anima-scale-up anima">
                                        <img alt="" src="{{asset('assets/images/gallery/image-41.jpg')}}">
                                    </a>
                                    <div class="caption">
                                        <h2 class="album-name">Drinks</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="album-box col-md-4" data-album-id="album-3">
                                <div class="img-box scale adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                    <a href="#menu-albums" class="img-box anima-scale-up anima">
                                        <img alt="" src="{{asset('assets/images/gallery/image-3.jpg')}}">
                                    </a>
                                    <div class="caption">
                                        <h2 class="album-name">First dishes/Snack</h2>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- INSERT OTHERS ALBUMS MENU ITEMS HERE -->
                        </div>
    
    
                        <div class="cont-album-box">
                            <p class="album-title">
                                <span>...</span>
                                <a class="button-list btn btn-border btn-xs">
                                    <i class="fa fa-arrow-left"></i> Albums list
                                </a>
                            </p>
                           
                            <div class="album-item">
                                <div class="grid-list">
                                    <div class="grid-box row">
                                        @foreach ($products as $product)
                                        @if ($product->category == 'food')
                                        <div class="grid-item col-md-4">
                                            <div class="advs-box advs-box-multiple boxed-inverse extra-content-cnt" data-anima="scale-rotate" data-trigger="hover">
                                                <a class="img-box"><img class="anima" src="{{asset('assets/images/gallery/image-31.jpg')}}" alt="" /></a>
                                                <div class="circle anima-rotate-20 anima">15000 <span>{{$product->qty}} Pack</span></div>
                                                <div class="advs-box-content">
                                                   <a href="{{route('product.show', $product->id)}}" alt=""> <h3>{{$product->title}}</h3></a>
                                                    <span class="extra-content">Served hottt, ee fit de spicy.. but mouth watering</span>
                                                    <p>
                                                        {{$product->description}} for the test run 
                                                    </p>
                                                </div>
                                                {{-- to be converted to an add to cart link --}}
                                                {{-- <div class="circle anima-rotate-20 anima">15000 <span>{{$product->qty}} Pack</span></div> --}}
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                            </div>
    
                            <div class="album-item">
                                <div class="grid-list">
                                    <div class="grid-box row">
                                        @foreach ($products as $product)
                                        @if ($product->category == 'drink')
                                        <div class="grid-item col-md-4">
                                            <div class="advs-box advs-box-multiple boxed-inverse extra-content-cnt" data-anima="scale-rotate" data-trigger="hover">
                                                <a class="img-box"><img class="anima" src="{{asset('assets/images/gallery/image-31.jpg')}}" alt="" /></a>
                                                <div class="circle anima-rotate-20 anima">15000 <span>{{$product->qty}} Pack</span></div>
                                                <div class="advs-box-content">
                                                    <a href="{{route('product.show', $product->id)}}" alt=""> <h3>{{$product->title}}</h3></a>
                                                    <span class="extra-content">Served with fired chips, salad and sauces</span>
                                                    <p>
                                                        {{$product->description}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="album-item">
                                <div class="grid-list">
                                    <div class="grid-box row">
                                        @foreach ($custom_products as $product)
                                        <div class="grid-item col-md-4">
                                            <div class="advs-box advs-box-multiple boxed-inverse extra-content-cnt" data-anima="scale-rotate" data-trigger="hover">
                                                <a class="img-box"><img class="anima" src="../images/gallery/image-31.jpg" alt="" /></a>
                                                <div class="circle anima-rotate-20 anima">15000 <span>{{$product->qty}}  Pack</span></div>
                                                <div class="advs-box-content">
                                                    <a href="{{route('product.show', $product->id)}}" alt=""> <h3>{{$product->title}}</h3></a>
                                                    <span class="extra-content">Served with fired chips, salad and sauces</span>
                                                    <p>
                                                        {{$product->description}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- INSERT OTHERS ALBUMS HERE -->
                        </div>
                    </div>
                </div>
            </div>
    
                    <div class="section-empty">
                        <div class="container content">
                            <div class="title-base">
                                <hr />
                                <h2>menu streak</h2>
                                <p>Quick Access</p>
                            </div>
                            <hr class="space s" />
                            <div class="row">
                                <div class="col-md-7">
                                    <hr class="space m" />
                                    <div class="row">
                                        <div class="col-md-6" data-anima="fade-left">
                                            <div class="list-items">
                                                {{-- fetch count from collections & generate slice count and subtract to generate content  --}}
                                                @foreach ($products->slice(1,5) as $product)
                                                <div class="list-item">
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <h3>{{$product->title}}</h3>
                                                            <p>{{$product->description}}</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span>00000 $</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="col-md-6" data-anima="fade-left">
                                            <div class="list-items">
                                               
                                                @foreach ($custom_products->slice(5,5) as $product)
                                                    {{-- @foreach ($product->slice(5,5) as $product)     @endforeach                                                        --}}
                                                        <div class="list-item">
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <h3>{{$product->title}}</h3>
                                                                    <p>{{$product->description}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <span>00000 $</span>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="col-md-5">
                                    <img src="{{asset('assets/images/food-6.jpg')}}" class="abs-image hidden-sm" alt="" />
                                </div>
                            </div>
                            <hr class="space" />
                            <div class="title-base">
                                <hr />
                                <h2>Drinks loft</h2>
                                <p>Quick Access</p>
                            </div>
                            <hr class="space s" />
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{asset('assets/images/food-7.jpg')}}" class="abs-image hidden-sm" alt="" />
                                </div>
                                <div class="col-md-7">
                                    <hr class="space m" />
                                    <div class="row">
                                        <div class="col-md-6" data-anima="fade-left">
                                            <div class="list-items">
                                                {{-- use the slice contional to collect using category      --}}
                                                @foreach ($custom_products->slice(5,5) as $product)                                                
                                                        <div class="list-item">
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <h3>{{$product->title}}</h3>
                                                                    <p>{{$product->description}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <span>00000 $</span>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="col-md-6" data-anima="fade-left">
                                            <div class="list-items">
                                                       
                                                @foreach ($custom_products->slice(5,5) as $product)
                                                    {{-- @foreach ($product->slice(5,5) as $product)     @endforeach  --}}
                                                        <div class="list-item">
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <h3>{{$product->title}}</h3>
                                                                    <p>{{$product->description}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <span>00000 $</span>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                @endforeach

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