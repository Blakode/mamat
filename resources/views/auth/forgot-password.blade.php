@extends('layouts.frontend.main_app')

@section('bg-banner')
    <br/>
    <br/>
    
@endsection
@section('section')
    <div class="section-empty section-item text-center">
        <div class="container content">
            <h5 class="text-bold" class="text-center">Forgotten your password ? </h5>
            <hr class="space m" />
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <form action="forgot-password" class="form-box form-ajax" method="post">
                        @csrf
                        <div class="row">
                            
                            <hr class="space s" />
                            <div class="col-md-12">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="Email..." type="email" class="form-control form-value" required>
                            </div>
                            <hr class="space s" />

                            <hr class="space s" />
                                <button class="btn-sm btn" type="submit">Email Reset Link</button>
                        </div>
                    
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
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