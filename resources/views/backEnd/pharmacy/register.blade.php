@extends('backEnd.layoutes.mastar')
@section('title', 'pharmacy Register')
@section('content')
<section class="signup-step-container col-md-6 container bg-registr">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <form enctype="multipart/form-data" action = "{{route('pharmacy_post_Register')}}" method="POST" role="form"  class="login-box">
                    {{ csrf_field() }}
                    <div class="row">
                        <input type="hidden" name="role">
                        <div class="container col-md-12">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input name = "image" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url(https://images.app.goo.gl/akmTiJ4dhgrxcERZ8);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>pharmacy Name</label>
                                <input class="form-control @error('pharmacyName') is-invalid @enderror" type="text" name="pharmacyName" placeholder="">
                                @error('pharmacyName')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Medical License Number</label>
                                <input class="form-control @error('Medical_License_Number') is-invalid @enderror" type="text" placeholder="" name="Medical_License_Number">
                                @error('Medical_License_Number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>pharmacy License</label>
                                <input class="form-control @error('pharmacy_License') is-invalid @enderror" type="file" placeholder="" name="pharmacy_License">
                                @error('pharmacy_License')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control @error('phoneNumber') is-invalid @enderror" type="text" name="phoneNumber" placeholder="">
                                @error('phoneNumber')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input class="form-control @error('telephone') is-invalid @enderror" type="text" name="telephone" placeholder="">
                                @error('telephone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Hotline</label>
                                <input class="form-control @error('Hotline') is-invalid @enderror" type="text" name="Hotline" placeholder="">
                                @error('Hotline')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control @error('country') is-invalid @enderror" type="text" name="country" placeholder="">
                                @error('country')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control @error('country') is-invalid @enderror" type="text" name="city" placeholder="">
                                @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Area</label>
                                <input class="form-control @error('area') is-invalid @enderror" type="text" name="area" placeholder="">
                                @error('area')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Street</label>
                                <input class="form-control @error('street') is-invalid @enderror" type="text" name="street" placeholder="">
                                @error('street')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>ZIP Code</label>
                                <input class="form-control @error('street') is-invalid @enderror" type="text" name="zip_code" placeholder="">
                                @error('zip_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" placeholder="">
                            </div>
                        </div>
                        <button type="submit" class="default-btn next-step">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@stop
