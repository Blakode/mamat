@extends('layouts.frontend.main_app')


@section('section')
    <div class="section-empty section-item">
        <div class="container content">
            <h5 class="text-bold" class=" text-center">Account Management BASE</h5>
            <hr class="space m" />
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Account Type</th>
                        <th>Extra</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark Otto</td>
                        <td>Vendor</td>
                        <td><a class="btn-text" href="buttons.html#">manage account</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob Valir</td>
                        <td>Rider</td>
                        <td><a class="btn-text" href="buttons.html#">manage account</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry Garga</td>
                        <td>Vendor</td>
                        <td><a class="btn-text" href="buttons.html#">manage account</a></td>
                    </tr>
                </tbody>
            </table>
            <hr class="space s" />

            <button class="btn btn-sm " type="button"><i class="im-atom"></i>Create Account</button>
        </div>
    </div>
@endsection
