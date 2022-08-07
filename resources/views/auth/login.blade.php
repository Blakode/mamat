@extends('layouts.frontend.main_app')

@section('bg-banner')
    <br/>
    <br/>
    
@endsection
@section('section')

     <!-- Validation Errors -->
    <div class="section-empty section-item text-center">
        <div class="container content">
            <h5 class="text-bold" class="text-center">Login</h5>
            <hr class="space m" />
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <form action="{{route('login')}}" class="form-box form-ajax" method="post">
                        @csrf
                        <div class="row">
                            
                            <hr class="space s" />
                            <div class="col-md-12">
                                <label>Email</label><span style="color:#ff0000">*</span>
                                <input id="email" name="email" value="{{ old('email', $user->email) }}"  placeholder="Email..." type="email" class="form-control form-value @error('email') is-invalid required @enderror" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback is-invalid " role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <hr class="space s" />

                            <hr class="space s" />
                            <div class="col-md-12">
                                <label>Password</label><span style="color:#ff0000">*</span>
                                <input id="password" name="password" placeholder="password..." type="password" class="form-control form-value @error('password') is-invalid @enderror" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <hr class="space s" />
                            <div class="col-md-3">
                                <input type="checkbox" name="remember_me">Remember Me
                            </div>
                            <div class="col-md-9">
                               <a href="forgot-password" style="color: #ff0000">Forgot Your Password ?</a>
                            </div>
                            <hr class="space s" />
                                <button class="btn-sm btn" type="submit">login</button>
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