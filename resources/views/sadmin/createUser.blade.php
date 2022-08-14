@extends('layouts.frontend.main_app')

@section('bg-banner')
    <br/>
    <br/>
    
@endsection
@section('section')
    <div class="section-empty section-item text-center">
        <div class="container content">
            <h5 class="text-bold" class="text-center">Create Account</h5>
            <hr class="space m" />
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <form action="" class="form-box form-ajax" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <p>First Name</p>
                                <input id="fname" name="fname" placeholder="Frist Name..." type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <p>Last Name</p>
                                <input id="lname" name="lname" placeholder="Last Name..." type="text" class="form-control form-value" required>
                            </div>
                            <hr class="space s" />
                            <div class="col-md-6">
                                <p>Account Type</p>
                                <select name="category" id="category" class="form-control form-value" required>
                                    <option  value="">--</option>
                                    <option value="food">vendor</option>
                                    <option value="drink">rider</option>
                                    
                                </select>
                            </div>
                            <div class="col-md-6">
                                <p>Phone</p>
                                <input id="phone" name="phone" placeholder="phone" type="text" class="form-control form-value">
                                    
                                </select>
                            </div>
                            <hr class="space s" />
                            <div class="col-md-12">
                                <p>Address</p>
                                <input id="address" name="address" placeholder="Address..." type="text" class="form-control form-value" required>
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