@extends('backEnd.layoutes.mastar')
@section('title','Xray Register')
@section('content')
@include('backEnd.layoutes.navbar')
<section class="signup-step-container col-md-6 container bg-registr">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <form role="form" action="index.html" class="login-box">
                    <div class="row">
                        <div class="container col-md-12">
                            <div class="avatar-wrapper">
                                <img class="profile-pic" src="" />
                                <div class="upload-button">
                                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                </div>
                                <input class="file-upload" type="file" accept="image/*"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">X-Ray Name</label>
                                <input class="form-control" type="text" name="name" placeholder="X-Ray Name">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Medical License Namber</label>
                                <input class="form-control" type="text" placeholder="Medical License Namber" name="medicalLicens">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Clinic License</label>
                                <input class="form-control" type="text" placeholder="Clinic License" name="birthday">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Phone Number</label>
                                <input class="form-control" type="text" name="name" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Telephone</label>
                                <input class="form-control" type="text" name="name" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Hotline</label>
                                <input class="form-control" type="text" name="name" placeholder="Hotline">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Country</label>
                                <input class="form-control" type="text" name="name" placeholder="Country">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">City</label>
                                <input class="form-control" type="text" name="name" placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Area</label>
                                <input class="form-control" type="text" name="name" placeholder="Area">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Street</label>
                                <input class="form-control" type="text" name="name" placeholder="Street">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">ZIP Code</label>
                                <input class="form-control" type="text" name="name" placeholder="ZIP Code">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Email</label>
                                <input class="form-control" type="email" name="name" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Password</label>
                                <input class="form-control" type="password" name="name" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Confirm Password</label>
                                <input class="form-control" type="password" name="name" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="col-12 text-center mb-5 mt-5">
                            <button type="submit" class=" col-9 btn btn-primary font-weight-400 mr-auto ml-auto">Submite</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('backEnd.layoutes.footer')



@stop
