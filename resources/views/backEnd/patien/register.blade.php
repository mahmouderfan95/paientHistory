@extends('backEnd.layoutes.mastar')
@section('title','Patien Register')
@section('content')
<!-- start account patien -->
<section class="signup-step-container container col-md-6 bg-registr">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <!-- col 10 -->
            <div class="col-md-10">
                @if(session('msg'))
                    <div class="alert alert-success">{{session('msg')}}</div>
                @endif
                <form enctype="multipart/form-data" role="form" action="{{route('patien_post_Register')}}" method="POST" class="login-box">
                    {{ csrf_field() }}
                    <!-- row -->
                    <div class="row">
                        <div class=" col-md-12">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input class = "@error('image') is-invalid @enderror" name = "image" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url(https://images.app.goo.gl/akmTiJ4dhgrxcERZ8);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>First Name</label>
                                <input name = "firstName" class="form-control @error('firstName') is-invalid @enderror"" type="text"  placeholder="">
                                @error('firstName')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input name = "middleName" class="form-control @error('middleName') is-invalid @enderror" type="text"  placeholder="">
                                @error('middleName')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Last name</label>
                                <input name = "lastName" class="form-control @error('lastName') is-invalid @enderror" type="text" placeholder="">
                                @error('lastName')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Birth date</label>
                                <input class="form-control @error('BirthDate') is-invalid @enderror" type="date" placeholder="BIRTHDATE" name="BirthDate">
                                @error('BirthDate')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="gender">Gender</label>
                            <div class="form-flex">
                                <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                <label for="male">Male</label>

                                <input type="radio" name="gender" value="female" id="female" />
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="">
                                @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control @error('phoneNumber') is-invalid @enderror" type="text" name="phoneNumber" placeholder="">
                                @error('phoneNumber')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>National Number</label>
                                <input class="form-control @error('NationalNumber') is-invalid @enderror" type="text" name="NationalNumber" placeholder="">
                                @error('NationalNumber')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control @error("country") is-invalid @enderror" type="text" name="country" placeholder="">
                                @error('country')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control @error("country") is-invalid @enderror" type="password" name="password" placeholder="">
                                @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" placeholder="">
                                {{-- @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="state">State</label>
                            <div class="form-flex">
                                <input type="radio" name="state" value="single" id="single" checked="checked" />
                                <label for="single">Single</label>

                                <input type="radio" name="state" value="married" id="married" />
                                <label for="married">Married</label>

                                <input type="radio" name="state" value="divorce" id="divorce" />
                                <label for="divorce">Divorce</label>
                            </div>
                        </div>
                            <button type="submit" class="default-btn next-step">Register</button>
                    </div>
                    <!-- row -->
                </form>
            </div>
            <!-- col 10 -->
        </div>
    </div>
</div>
</section>
<!-- end account patien -->

@stop
