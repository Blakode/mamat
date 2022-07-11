@extends('layouts.frontend.main_app')

@section('bg-banner')
    <br/>
    <br/>
@endsection

 <!-- Validation Errors -->
 <x-auth-validation-errors class="mb-4" :errors="$errors" />

@section('section')
    <div class="section-empty section-item text-center">
        <div class="container content">
            <h5 class="text-bold" class="text-center">Create Account</h5>
            <hr class="space m" />
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <form action="{{route('register')}}" class="form-box form-ajax" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <p>First Name</p>
                                <input id="fname" name="first_name" placeholder="Frist Name..." type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <p>Last Name</p>
                                <input id="lname" name="last_name" placeholder="Last Name..." type="text" class="form-control form-value" required>
                            </div>
                            <hr class="space s" />

                            @if (Auth::user())

                                @if ($user->role == 'sadmin')
                                <div class="col-md-12">
                                    <p>Account Type</p>
                                    <select name="role" id="category" class="form-control form-value" required >
                                        <option >--</option>
                                        <option value="food">vendor</option>
                                        <option value="drink">rider</option>
                                    </select>
                                </div>
                                @endif       

                            @else
                            
                            @endif

                            <input type="hidden" name='role' value="user" required>
                            <input type="hidden" name='avatar' value="assets/images/gallery/avatar.png" required>
                            
                            <div class="col-md-6">
                                <p>Phone</p>
                                <input id="phone" name="phone" placeholder=" 080 112 ... " type="tel" class="form-control form-value">
                                    
                                </select>
                            </div>
                            <div class="col-md-6">
                                <p>Gender</p>
                                <select name="gender" id="gender" class="form-control form-value" required>
                                    <option >--</option>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                    <option value="Rather not say">Rather not say</option>
                                </select>
                            </div>
                            <hr class="space s" />
                            <div class="col-md-12">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="examle@ ..." type="email" class="form-control form-value" required>
                            </div>
                            <hr class="space s" />
                            <div class="col-md-6">
                                <p>Password</p>
                                <input id="password" name="password" placeholder="secret key..." type="password" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <p>Verify Password</p>
                                <input id="password" name="password_confirmation" placeholder="secret key..." type="password" class="form-control form-value" required>
                            </div>

                            <hr class="space s" />
                            <div class="col-md-12">
                                <p>Address</p>
                                <input id="address" name="address" placeholder="1 mama t indomie spo..." type="text" class="form-control form-value" required>
                            </div>
                            <hr class="space s" />
                                <button class="btn-sm btn" type="submit">Create</button>
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