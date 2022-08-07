@extends('layouts.frontend.main_app')

@section('bg-banner')
    <br/>
    <br/>
    
@endsection
@section('section')
    <div class="section-empty section-item text-center">
        <div class="container content">
            <h5 class="text-bold" class="text-center">Reset Password</h5>
            <hr class="space m" />
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <form action="{{url('reset-password')}}" class="form-box form-ajax" method="post">
                        @csrf

                        <div class="row">    
                            <hr class="space s" />
                            <div class="col-md-12">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="Email..." type="email" class="form-control form-value" required>
                            </div>
                            <hr class="space s" />

                            <hr class="space s" />
                            <div class="col-md-12">
                                <p>Password</p>
                                <input id="password" name="password" placeholder="password..." type="password" class="form-control form-value" required>
                            </div>
                            <hr class="space s" />
                            <div class="col-md-12">
                                <p>Verify-Password</p>
                                <input id="password" name="password" placeholder="verify-password..." type="password" class="form-control form-value" required>
                            </div>
                            <hr class="space s" />
                                <button class="btn-sm btn" type="submit">Reset Password</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                </div>
            </div>
           
      
            <div class="title-base title-small doc-title">
                <i class="fa fa-angle-up scroll-top"></i>
            </div>
        </div>
    </div>
@endsection