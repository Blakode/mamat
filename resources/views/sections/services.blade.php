@extends('layouts.frontend.section_app')

@section('bg-banner')
<!--header ends --> 
 {{-- <div class="footer-parallax-container"> -- take this part juts right above the header tag --}}

<!-- background banner --> 
<div class="section-bg-animation header-animation" style="background-image:url('{{asset('storage/images/bg-22.jpg')}}');"> <!-- home wallpaper --> 
          <div class="container content overlay-content white">
               <hr class="space" />
               <hr class="space" />
               <div class="row">
               <div class="col-md-6 ">
               {{-- This section should be gotten from the db & title should be a turnery operator  --}}
                <h2 class="text-black text-xl anima">
               {{ $title }} Make Title Dynamic
               </h2> 
               <hr class="space s" />
                    <p class="anima">
                    Ratione numquam. Fugiat alias saepe fuga odio sed exauris, minim anim dolores earum!
                    Veniam corporis cupidatat atque nesciunt dicta justoui varius loreto martino con sostanza e progolo.
                    </p>
               <hr class="space m" />

               </div>
                    </div>
                    <hr class="space" />
                    <hr class="space m" />
                    </div>
          </div>
     </div>         

<!-- end background banner -->     
@endsection

@section('section')
@endsection