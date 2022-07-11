@extends('layouts.frontend.main_app')

@section('bg-banner')
    <br />
    <br />
@endsection
@section('section')
    <div class="section-empty section-item text-center">
        <div class="container content">
            <h5 class="text-bold" class="text-center">UPLOAD ITEM</h5>
            <hr class="space m" />
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <form action="{{ route('product.store') }}" class="form-box form-ajax" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">


                            <input id="user_id" name="user_id" value="{{ Auth::user()->id }}" type="hidden"
                                class="form-control form-value" required>

                            <div class="col-md-12">
                                <label>Title</label><span style="color:#ff0000">*</span>
                                <input id="title" name="title" placeholder="Item Name..." type="text"
                                    class="form-control form-value @error('title') is-invalid @enderror required" value="{{ old('title', $product->title) }}" required autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <hr class="space s" />

                            <div class="col-md-12">
                                <label>Description</label><span style="color:#ff0000">*</span>
                                <textarea id="description" name="description" placeholder="Brief Description about product..."
                                    class="form-control form-value" required></textarea>
                                <hr class="space s" />
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr class="space xs" />

                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Category</label><span style="color:#ff0000">*</span>
                                        <select name="category" id="category" class="form-control form-value" required>
                                            <option value="">--</option>
                                            <option value="food">Foods</option>
                                            <option value="drink">Drinks</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Quantity</label><span style="color:#ff0000">*</span>
                                        <select name="qty" id="Quantity" class="form-control form-value" required>
                                            <option value="">--</option>
                                            <option value="1" selected="">1</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                            <option value="60">60</option>
                                            <option value="70">70</option>
                                            <option value="80">80</option>
                                            <option value="90">90</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Price</label><span style="color:#ff0000">*</span>
                                        <input id="amount" name="amount" placeholder="Price per unit ..." type="number"
                                            class="form-control form-value" required>
                                    </div>
                                    <hr class="space s" />
                                </div>
                                <hr class="space s" />
                                <div class="col-md-12">
                                    <label>Order note </label>
                                    <textarea id="description" name="order_note" placeholder="Brief Description about product..."
                                        class="form-control form-value"></textarea>
                                    <hr class="space s" />
                                </div>
                                <hr class="space s" />
                                <label>Upload images</label><span style="color:#ff0000">*</span>
                                <input id="fileupload" accept="image/*" name='images[]' type="file"
                                    multiple="multiple" />
                                <hr />
                                <b>Live Preview</b>
                                <br />
                                <br />
                                <div id="dvPreview">
                                </div>

                                <div col-md-3>
                                    <span>Required Fields</span><span style="color:#ff0000">*</span>
                                </div>
                                <div col-md-3>
                                    <input type="hidden" />
                                </div>

                                <button class="btn-sm btn" type="submit">Upload</button>
                            </div>
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
