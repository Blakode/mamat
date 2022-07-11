@extends('layouts.frontend.main_app')

@section('bg-banner')
    
@endsection

@section('section')
<div class="section-empty section-item text-center">
    <div class="container content">
        <h5 class="text-bold" class="text-center">PENDING ORDERS</h5>
        <hr class="space m" />

        <div class="row">
            <div class="col-md-12">
                <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="img-box">
                                <img class="" src="{{asset('assets/images/gallery/image-1.jpg')}}" alt="" style="max-width: 380px; width: 380px; margin-left: -12px;">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <h2><a>Stay hungry</a></h2>
                            <hr>
                            <div class="tag-row icon-row">
                                <span><i class="fa fa-calendar"></i><a>26.05.2018</a></span>
                                <span><i class="fa fa-bookmark"></i><a href="content-box.html#">Category</a></span>
                                <span><i class="fa fa-pencil"></i><a>Admin</a></span>
                            </div>
                            <p>
                                Culpa. Sapiente inceptos facilisi, molestiae veritatis expedita gravida deserunt, augue consectetuer delectus! Molestias? Illum quas deleniti
                            </p>
                            <a class="btn btn-sm" href="content-box.html#">Read more</a>
                        </div>
                    </div>
                </div>
                <hr class="space s">
                <div class="advs-box advs-box-side-img advs-box-blog boxed white" data-anima="scale-rotate" data-trigger="hover">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="img-box">
                                <img class="anima" src="{{asset('assets/images/gallery/image-2.jpg')}}" alt="" aid="0.69165210484098" style="max-width: 380px; width: 380px; margin-left: -12px; position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <h2><a>Stay foolish</a></h2>
                            <hr>
                            <div class="tag-row icon-row">
                                <span><i class="fa fa-calendar"></i><a>26.05.2018</a></span>
                                <span><i class="fa fa-bookmark"></i><a href="content-box.html#">Category</a></span>
                                <span><i class="fa fa-pencil"></i><a>Admin</a></span>
                            </div>
                            <p>
                                Culpa. Sapiente inceptos facilisi, molestiae veritatis expedita gravida deserunt, augue consectetuer delectus! Molestias? Illum quas deleniti
                            </p>
                            <a class="btn btn-sm " href="content-box.html#"> Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
     </div>
</div>
@endsection