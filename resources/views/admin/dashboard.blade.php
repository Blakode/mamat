@extends('layouts.frontend.main_app')

@section('section')
<div class="container content">
    <h5 class="text-bold">Admin Dashboard</h5>
    <hr class="space m" />
    <div class="row">
        <div class="col-md-6">
            <div class="advs-box advs-box-side" data-anima="fade-left" data-trigger="hover">
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-box"><img src="{{asset('assets/images/gallery/avatar.png')}}" alt=""></div>
                    </div>
                    <div class="col-md-8">
                        <h3>User Details</h3>
                        <hr class="anima">
                        <p>
                            Randomly generated user description 
                        </p>
                        <ul class="list-texts text-left list-texts-justified">
                            <li><b>User Name:</b>   <span>00.00</span></li>
                            <li><b>Phone:</b>   <span>+234 8887 7638</span></li>
                        </ul>
                    
                        <a class="btn btn-xs" href="content-box.html#">Update Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="advs-box advs-box-side" data-anima="fade-left" data-trigger="hover">
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-box"><img src="../../../images/gallery/image-2.jpg" alt=""></div>
                    </div>
                    <div class="col-md-8">
                        <h3>Transaction Details</h3>
                        <hr class="anima">
                        
                            <ul class="list-texts text-left list-texts-justified">
                                <li><b>Pending Order:</b>   <span>00.00</span></li>
                                <li><b> Delivery Address:</b>   <span>Mountain View CA 94043</span></li>
                                <li><b>Wallet:</b> <span>$00.000</span></li>
                                <li><b>Architect:</b>   <span>Jason & Perry</span></li>
                            </ul>
                        
                        <a class="btn btn-xs" href="content-box.html#">Show Transactions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection