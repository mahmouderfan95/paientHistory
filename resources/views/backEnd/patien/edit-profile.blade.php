@extends('backEnd.layoutes.mastar')
@section('title','Edit profile ')
@section('content')
@include('backEnd.patien.slidenav')
<!-- main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <!-- Search form -->
          <ul class="float-lg-right pr-5">
            <div class="toggle toggle__wrapper">
              <div id="toggle-example-1"  role="switch" aria-checked="false" class="toggle__button">
                <div class="toggle__switch"></div>
              </div>
              </span>
            </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55" style="font-size: 15pt;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{url('/imgs/team-1.jpg')}}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{url('/imgs/team-1.jpg')}}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{url('/imgs/team-1.jpg')}}">
                  </span>
                  <div class="media-body ml-3 d-none d-lg-block">
                    <h3 class="mb-0 font-weight-bold">{{$patient->firstName}}</h3>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-5 d-flex align-items-center" style="min-height: 400px; background-image: url(/imgs/03.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-white opacity-1"></span>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--9">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="{{url('/imgs/BgLogin.jpg')}}" height="150" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="{{url('/imgs/team-1.jpg')}}" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="float-lg-left"><i class="fas fa-edit mr-1"></i>Edit</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">22</span>
                      <h2 class="h3 text-gray">Doctor</h2>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <h2 class="h3 text-gray">Ridology</h2>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <h2 class="h3 text-gray">Test</h2>
                    </div>
                  </div>
                </div>
              </div>
              <h5 class="h2 font-weight-700 mb-5 text-center mt-3">{{$patient->firstName . ' ' . $patient->middleName}}</h5>
              <div class="">
                <h5 class="h3 mt-3"><i class="fas fa-male mr-4 text-primary"></i>{{$patient->gender}}</h5>
                <h5 class="h3  mt-3"><i class="fa fa-calendar-check mr-3 text-primary" aria-hidden="true"></i> {{$patient->BirthDate}}</h5>
                <h5 class="h3 mt-3"><i class="fas fa-location-arrow mr-3 text-primary"></i> Egypt</h5>
                <h5 class="h3 mt-3"><i class="fas fa-mail-bulk mr-3 text-primary"></i> {{$patient->email}}</h5>
                <h5 class="h3 mt-3 mb-5"><i class="fa fa-phone mr-3 text-primary" aria-hidden="true"></i> 02 {{$patient->phoneNumber}}</h5>
              </div>
              <div class="text-center">
                <button class="btn btn-primary"><h3>Login with other Account</h3></button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Profile</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- form edit profile -->
              @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
              @endforeach
              <form action="{{route('update.profile',$patient->id)}}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name = "_method" value="PUT">
                <h3 class="title-sub text-uppercase text-muted mb-4">User information</h3>
                <div class="pl-lg-4 mb-5">
                  <div class="col-md-12">
                    <div class="form-group">
                      <ul class="list-unstyled">
                        <li>
                          <div class="row mb-3">
                            <div class="col-md-4">
                              <label class="title-label ml-xl-3">Weight</label>
                              <div class="ui input col-12">
                                <input class="" type="text" name="width" placeholder="70k.g" value = "{{$patient->width}}">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <label class="title-label ml-xl-3">Height</label>
                              <div class="ui input col-12">
                                <input class="" type="text" name="height" placeholder="170cm" value="{{$patient->height}}">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <label class="title-label d-block">Blood</label>
                                <select class="ui selection dropdown" name="blood">
                                  <option value="A+">A+</option>
                                  <option value="A-">A-</option>
                                  <option value="B+">B+</option>
                                  <option value="B-">B-</option>
                                  <option value="o+">O+</option>
                                  <option value="o-">O-</option>
                                  <option value="AB+">AB+</option>
                                  <option value="AB-">AB-</option>
                                </select>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Patient History -->
                <h3 class="title-sub text-uppercase text-muted mb-4">Patient History</h3>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="title-info">Check any Conditions you Currently Being Treated for or have had in the past: </label>
                          <div class="form-flex">
                            <div class="form-group row">
                                  @foreach($agrees as $agree)
                                  <div class="col-sm-3">
                                    <div class="field">
                                        <div class="ui checkbox">
                                        <input name = "agree_name[]" type="checkbox" tabindex="0" class="hidden">
                                        <label class="label-input">{{$agree->name}}</label>
                                        </div>
                                    </div>
                                </div>
                                  @endforeach

                                <div class="col-md-6 mr-auto ml-auto mt-4">
                                  {{-- <div class="ui input col-12">
                                    <input class="" type="text" name="name" placeholder="Other Diseases">
                                  </div> --}}
                                </div>
                            </div>
                            </div>
                          </div>
                      <hr/>
                    </div>
                    <hr class="my-4" />
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="title-info">Allergies (incloud medication, food and environmental allergies)</label>
                        <ul class="list-unstyled read-more-wrap">
                          <li>
                            <div class="row mb-3">
                              <div class="col-md-4">
                                <label class="title-label ml-xl-3">Allergy</label>
                                <div class="ui input col-12">
                                  <input class="" type="text" name="allergi_name[]" placeholder="Allergy">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label class="title-label d-block">Severity</label>
                                  <select name = "severity[]" class="ui selection dropdown">
                                    <option value="0">Severity</option>
                                    <option value="Mild">Mild</option>
                                    <option value="Moderate">Moderate</option>
                                    <option value="Severe">Severe</option>
                                  </select>
                              </div>
                              <div class="col-md-4">
                                <label class="title-label ml-xl-3">Reaction</label>
                                <div class="ui input col-12">
                                  <input class="" type="text" name="reaction[]" placeholder="Reaction">
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="row mb-3">
                              <div class="col-md-4">
                                <label class="title-label ml-xl-3">Allergy</label>
                                <div class="ui input col-12">
                                  <input class="" type="text" name="allergi_name[]" placeholder="Allergy">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label class="title-label d-block">Severity</label>
                                  <select name = "severity[]" class="ui selection dropdown">
                                    <option value="0">Severity</option>
                                    <option value="Mild">Mild</option>
                                    <option value="Moderate">Moderate</option>
                                    <option value="Severe">Severe</option>
                                  </select>
                              </div>
                              <div class="col-md-4">
                                <label class="title-label ml-xl-3">Reaction</label>
                                <div class="ui input col-12">
                                  <input class="" type="text" name="reaction[]" placeholder="Reaction">
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="row mb-3">
                              <div class="col-md-4">
                                <label class="title-label ml-xl-3">Allergy</label>
                                <div class="ui input col-12">
                                  <input class="" type="text" name="allergi_name[]" placeholder="Allergy">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label class="title-label d-block">Severity</label>
                                  <select name = "severity[]" class="ui selection dropdown">
                                    <option value="0">Severity</option>
                                    <option value="Mild">Mild</option>
                                    <option value="Moderate">Moderate</option>
                                    <option value="Severe">Severe</option>
                                  </select>
                              </div>
                              <div class="col-md-4">
                                <label class="title-label ml-xl-3">Reaction</label>
                                <div class="ui input col-12">
                                  <input class="" type="text" name="reaction[]" placeholder="Reaction">
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div><hr/>
                    </div>
                    <hr class="my-4" />
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="title-info">Surgeries</label>
                        <ul class="list-unstyled read-more-wrap">
                          <li>
                            <div class="row mb-3">
                              <div class="col-md-6">
                                <label class="title-label ml-xl-3">Surgery</label>
                                <div class="ui input large col-12">
                                  <input class="" type="text" name="surgery_name[]" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <label class="title-label ml-xl-3">Date</label>
                                <div class="ui input col-12">
                                  <input class="" type="date" name="surgery_date[]" placeholder="">
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="row mb-3">
                              <div class="col-md-6">
                                <label class="title-label ml-xl-3">Surgery</label>
                                <div class="ui input large col-12">
                                  <input class="" type="text" name="surgery_name[]" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <label class="title-label ml-xl-3">Date</label>
                                <div class="ui input col-12">
                                  <input class="" type="date" name="surgery_date[]" placeholder="">
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="row mb-3">
                              <div class="col-md-6">
                                <label class="title-label ml-xl-3">Surgery</label>
                                <div class="ui input large col-12">
                                  <input class="" type="text" name="surgery_name[]" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <label class="title-label ml-xl-3">Date</label>
                                <div class="ui input col-12">
                                  <input class="" type="date" name="surgery_date[]" placeholder="">
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div><hr/>
                    </div>
                    <hr class="my-4" />
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="title-info" >Currunt Medication</label>
                            <ul class=" list-unstyled read-more-wrap">
                              <li class="">
                                <div class="row">
                                  <div class="col-md-6 ui input col-6 mb-3">
                                    <input class="" type="text" name="medication_name[]" placeholder="Medication">
                                  </div>
                                  <div class="col-md-6 ui input col-6 mb-3">
                                    <input class="" type="text" name="medication_name[]" placeholder="Medication">
                                  </div>
                                </div>
                              </li>
                              <li class="">
                                <div class="row">
                                  <div class="col-md-6 ui input col-6 mb-3">
                                      <input class="" type="text" name="medication_name[]" placeholder="Medication">
                                  </div>
                                  <div class="col-md-6 ui input col-6 mb-3">
                                        <input class="" type="text" name="medication_name[]" placeholder="Medication">
                                  </div>
                                </div>
                              </li>
                              <li class="">
                                <div class="row">
                                  <div class="col-md-6 ui input col-6 mb-3">
                                      <input class="" type="text" name="medication_name[]" placeholder="Medication">
                                  </div>
                                  <div class="col-md-6 ui input col-6 mb-3">
                                        <input class="" type="text" name="medication_name[]" placeholder="Medication">
                                  </div>
                                </div>
                              </li>
                            </ul>
                      </div>
                      <hr/>
                    </div>
                    <hr class="my-4" />
                    <div class="col-md-12">
                      <label class="title-info">Preventative Screening</label>
                      <div class="ui form mb-3">
                        <div id="myRadioGroup">
                            <label class="mr-4 title-label">Have you had a colonscopy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input class="ui radio checkbox" type="radio" name="colonscopy"  value="1"  />&nbsp; <label class="font-weight-600">Yes</label> &nbsp;&nbsp;
                            <input class="ui radio checkbox" type="radio" name="colonscopy" value="2" /> &nbsp; <label class="font-weight-600">No</label>
                            <div id="types1" class="desc col-8" style="display: none;">
                                <input class="form-control" type="date" name="colonscopy_data">
                            </div>
                            <div id="types2" class="desc" style="display: none;">
                            </div>
                        </div>
                      </div>
                      <div class="ui form mb-3">
                        <div id="myRadioGroup">
                            <label class="mr-3 title-label">Have you had a Mammogram &nbsp;&nbsp;</label>
                            <input class="ui radio checkbox" type="radio" name="mammogram"  value="3"  />&nbsp; <label class="font-weight-600">Yes</label> &nbsp;&nbsp;
                            <input class="ui radio checkbox" type="radio" name="mammogram" value="4" />&nbsp;&nbsp; <label class="font-weight-600">No</label>
                            <div id="type3" class="des col-8" style="display: none;">
                                <input class="form-control" type="date" name="mammogram_data">
                            </div>
                            <div id="type4" class="des" style="display: none;"></div>
                        </div>
                      </div>
                      <div class="ui form mb-3">
                        <div id="myRadioGroup">
                            <label class="mr-7 title-label">Have you had a PRC &nbsp;&nbsp;</label>
                            <input class="ui radio checkbox" type="radio" name="prc"  value="5"  />&nbsp; <label class="font-weight-600">Yes</label> &nbsp;&nbsp;
                            <input class="ui radio checkbox" type="radio" name="prc" value="6" />&nbsp;&nbsp; <label class="font-weight-600">No</label>
                            <div id="prct5" class="dese col-8" style="display: none;">
                                <input class="form-control" type="date" name="prc_data">
                            </div>
                            <div id="prct6" class="dese" style="display: none;"></div>
                        </div>
                      </div>
                      <hr class="my-4 mt-5 mb-5" />
                    </div>
                    <hr class="my-4" />
                    <div class="col-12">
                      <div class="nav flex-row nav-pills row offset-xl-1 col-12" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                        <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                          <div class="row">
                              <h4 class="text-pills m-auto" style="font-size: 11pt;padding-top:3px;">Alcohol</h4>
                          </div>
                        </a>
                        <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="true">
                          <div class="row">
                              <h4 class="text-pills m-auto" style="font-size: 11pt;padding-top:3px;">Cigarettes</h4>
                          </div>
                        </a>
                        <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="true">
                          <div class="row">
                              <h4 class="text-pills m-auto" style="font-size: 11pt;padding-top:3px;">Tobacco</h4>
                          </div>
                        </a>
                        <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="true">
                          <div class="row">
                              <h4 class="text-pills m-auto" style="font-size: 11pt;padding-top:3px;">Drug</h4>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-12 p-4 align-items-center js-fullheight animated">
                        <div class="tab-content mr-auto ml-auto" id="v-pills-tabContent">
                          <div class="tab-pane animated bounce slow py-0 show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                            <div class="row mb-3 mt-3">
                              <div class="col-xl-9 mb-4 mr-auto ml-auto">
                                <div class="ui form col-12">
                                  <div class="inline field">
                                    <label class="h6 font-weight-bold" style="font-size: 12pt; margin-bottom: 8px;">Alcohol</label>
                                    <select name="alcohol" class="label ui large selection fluid dropdown mb-4">
                                      <option value="0">Type of Alcohol</option>
                                      <option value="beer">Beer</option>
                                      <option value="wine">Wine</option>
                                      <option value="liquor">liquor</option>
                                    </select>
                                    <select name="alcoholtype" class="label ui large selection fluid dropdown">
                                      <option value="0">Severity</option>
                                      <option value="high">High</option>
                                      <option value="middle">Middle</option>
                                      <option value="low">Low</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane animated bounce slow py-0 show" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                            <div class="row mb-3 mt-3">
                              <div class="col-xl-9 mb-4 mr-auto ml-auto">
                                <div class="ui form col-12">
                                  <div class="inline field">
                                    <label class="h2 font-weight-700" style="font-size: 12pt; margin-bottom: 8px;">Cigarettes</label>
                                    <select name="cigarettes" class="label ui large selection fluid dropdown mb-4">
                                      <option value="0">Severity</option>
                                      <option value="high">High</option>
                                      <option value="middle">Middle</option>
                                      <option value="low">Low</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane animated bounce slow py-0 show" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                            <div class="row mb-3 mt-3">
                              <div class="col-xl-9 mb-4 mr-auto ml-auto">
                                <div class="ui form col-12">
                                  <div class="inline field">
                                    <label class="h2 font-weight-700" style="font-size: 12pt; margin-bottom: 8px;">Tobacco</label>
                                    <select name="tobacco" class="label ui large selection fluid dropdown mb-4">
                                      <option value="0">Severity</option>
                                      <option value="high">High</option>
                                      <option value="middle">Middle</option>
                                      <option value="low">Low</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane animated bounce slow py-0 show" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                            <div class="row mb-3 mt-3">
                              <div class="col-xl-9 mb-4 mr-auto ml-auto">
                                <div class="ui form col-12">
                                  <div class="inline field">
                                    <label  class="h2 font-weight-700" style="font-size: 12pt; margin-bottom: 8px;">Drug</label>
                                    <select name="drug" class="label ui large selection fluid dropdown mb-4">
                                      <option value="0">Severity</option>
                                      <option value="high">High</option>
                                      <option value="middle">Middle</option>
                                      <option value="low">Low</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Family History -->
                <hr class="my-4" />
                <h3 class="title-sub text-uppercase text-muted mb-4">Family History</h3>
                <div class="pl-lg-4">
                  <div class="col-12">
                    <div class="nav flex-row nav-pills row offset-xl-1 col-12" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                      <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1 active" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="true">
                        <div class="row">
                            <h4 class="text-pills m-auto" style="font-size: 12pt;padding-top:3px;">Mother</h4>
                        </div>
                      </a>
                      <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="true">
                        <div class="row">
                            <h4 class="text-pills m-auto" style="font-size: 12pt;padding-top:3px;">Father</h4>
                        </div>
                      </a>
                      <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="true">
                        <div class="row">
                            <h4 class="text-pills m-auto" style="font-size: 12pt;padding-top:3px;">Sister</h4>
                        </div>
                      </a>
                      <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="true">
                        <div class="row">
                            <h4 class="text-pills font-weight-700 m-auto" style="font-size: 12pt;padding-top:3px;">Brother</h4>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-12 p-4 align-items-center js-fullheight animated">
                      <div class="tab-content mr-auto ml-auto" id="v-pills-tabContent">
                        <div class="tab-pane animated bounce slow py-0 show active" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                          <div class="row mb-3 mt-3">
                            <div class="col-xl-9 mb-4 mr-auto ml-auto">
                              <div class="ui form col-12">
                                <div class="inline field">
                                  <label class="h6 font-weight-bold" style="font-size: 12pt; margin-bottom: 8px;">Mother Diseases</label>
                                  <select name="mother[]" multiple="" class="label ui large selection fluid dropdown">
                                    <option value="0">All</option>
                                    <option value="change_methodology">Change Methodology</option>
                                    <option value="cognitive">Cognitive Computing & AI</option>
                                    <option value="Connectivity_&_Collaboration">Connectivity & Collaboration</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-9 col-md-4 mb-3 mr-auto ml-auto">
                              <div class="ui input col-12">
                                <input name = "other_mother" type="text" placeholder="Other Diseases">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane animated bounce slow py-0 show" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                          <div class="row mb-3 mt-3">
                            <div class="col-xl-9 mb-4 mr-auto ml-auto">
                              <div class="ui form col-12">
                                <div class="inline field">
                                  <label class="h2 font-weight-700" style="font-size: 12pt; margin-bottom: 8px;">Father Diseases</label>
                                  <select name="father[]" multiple="" class="label ui large selection fluid dropdown">
                                    <option value="0">All</option>
                                    <option value="change_methodology">Change Methodology</option>
                                    <option value="cognitive_computing_&_aI">Cognitive Computing & AI</option>
                                    <option value="connectivity_&_collaboration">Connectivity & Collaboration</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-9 col-md-4 mb-3 mr-auto ml-auto">
                              <div class="ui input col-12">
                                <input name = "other_father" type="text" placeholder="Other Diseases">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane animated bounce slow py-0 show" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                          <div class="row mb-3 mt-3">
                            <div class="col-xl-9 mb-4 mr-auto ml-auto">
                              <div class="ui form col-12">
                                <div class="inline field">
                                  <label class="h2 font-weight-700" style="font-size: 12pt; margin-bottom: 8px;">Sister Diseases</label>
                                  <select name="sister[]" multiple="" class="label ui large selection fluid dropdown">
                                    <option value="0">All</option>
                                    <option value="change_methodology">Change Methodology</option>
                                    <option value="cognitive_computing_&_ai">Cognitive Computing & AI</option>
                                    <option value="connectivity_&_collaboration">Connectivity & Collaboration</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-9 col-md-4 mb-3 mr-auto ml-auto">
                              <div class="ui input col-12">
                                <input name = "other_sister" type="text" placeholder="Other Diseases">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane animated bounce slow py-0 show" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
                          <div class="row mb-3 mt-3">
                            <div class="col-xl-9 mb-4 mr-auto ml-auto">
                              <div class="ui form col-12">
                                <div class="inline field">
                                  <label  class="h2 font-weight-700" style="font-size: 12pt; margin-bottom: 8px;">Brother Diseases</label>
                                  <select name="brother[]" multiple="" class="label ui large selection fluid dropdown">
                                    <option value="0">All</option>
                                    <option value="change_methodology">Change Methodology</option>
                                    <option value="cognitive_computing_&_ai">Cognitive Computing & AI</option>
                                    <option value="connectivity_&_collaboration">Connectivity & Collaboration</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-9 col-md-4 mb-3 mr-auto ml-auto">
                              <div class="ui input col-12">
                                <input name = "other_brother" type="text" placeholder="Other Diseases">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="col-12">
                    <div class="nav flex-row nav-pills row offset-xl-1 col-12" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                      <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1 active" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-5" aria-selected="true">
                        <div class="row">
                            <h6 class="text-pills font-weight-700 m-auto p-1" style="font-size: 11pt;">Grandma M</h5>
                        </div>
                      </a>
                      <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab" aria-controls="v-pills-10" aria-selected="true">
                        <div class="row">
                            <h6 class="text-pills font-weight-700 m-auto p-1" style="font-size: 11pt;">Grandma F</h6>
                        </div>
                      </a>
                      <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="true">
                        <div class="row">
                            <h6 class="text-pills font-weight-700 m-auto p-1" style="font-size: 11pt;">Grandpa M</h6>
                        </div>
                      </a>
                      <a class="nav-link col-xl-2 col-md-2 col-4 p-2 mr-1" id="v-pills-12-tab" data-toggle="pill" href="#v-pills-12" role="tab" aria-controls="v-pills-12" aria-selected="true">
                        <div class="row">
                            <h6 class="text-pills font-weight-700 m-auto p-1" style="font-size: 11pt;">Grandpa F</h6>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-12 p-4 align-items-center js-fullheight animated">
                      <div class="tab-content mr-auto ml-auto" id="v-pills-tabContent">
                        <div class="tab-pane animated bounce slow py-0 show active" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
                          <div class="row mb-3 mt-3">
                            <div class="col-xl-9 mb-4 mr-auto ml-auto">
                              <div class="ui form col-12">
                                <div class="inline field">
                                  <label class="h2 font-weight-700" style="font-size: 12pt; margin-bottom: 8px;">Grandma M Diseases</label>
                                  <select name="grnadmaM" multiple="" class="label ui large selection fluid dropdown">
                                    <option value="">All</option>
                                    <option value="1">Change Methodology</option>
                                    <option value="2">Cognitive Computing & AI</option>
                                    <option value="3">Connectivity & Collaboration</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-9 col-md-4 mb-3 mr-auto ml-auto">
                              <div class="ui input col-12">
                                <input type="text" placeholder="Other Diseases">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane animated bounce slow py-0 show" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
                          <div class="row mb-3 mt-3">
                            <div class="col-xl-9 mb-4 mr-auto ml-auto">
                              <div class="ui form col-12">
                                <div class="inline field">
                                  <label class="h2 font-weight-700" style="font-size: 12pt; margin-bottom: 8px;">Grandma F Diseases</label>
                                  <select name="grandmaF" multiple="" class="label ui large selection fluid dropdown">
                                    <option value="">All</option>
                                    <option value="1">Change Methodology</option>
                                    <option value="2">Cognitive Computing & AI</option>
                                    <option value="3">Connectivity & Collaboration</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-9 col-md-4 mb-3 mr-auto ml-auto">
                              <div class="ui input col-12">
                                <input type="text" placeholder="Other Diseases">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane animated bounce slow py-0 show" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
                          <div class="row mb-3 mt-3">
                            <div class="col-xl-9 mb-4 mr-auto ml-auto">
                              <div class="ui form col-12">
                                <div class="inline field">
                                  <label class="h2 font-weight-700" style="font-size: 12pt; margin-bottom: 8px;">Granadpa M Diseases</label>
                                  <select name="grnadpaM" multiple="" class="label ui large selection fluid dropdown">
                                    <option value="">All</option>
                                    <option value="1">Change Methodology</option>
                                    <option value="2">Cognitive Computing & AI</option>
                                    <option value="3">Connectivity & Collaboration</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-9 col-md-4 mb-3 mr-auto ml-auto">
                              <div class="ui input col-12">
                                <input type="text" placeholder="Other Diseases">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane animated bounce slow py-0 show" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
                          <div class="row mb-3 mt-3">
                            <div class="col-xl-9 mb-4 mr-auto ml-auto">
                              <div class="ui form col-12">
                                <div class="inline field">
                                  <label class="h2 font-weight-700" style="font-size: 12pt; margin-bottom: 8px;">Granadpa F Diseases</label>
                                  <select name="grnadpaF" multiple="" class="label ui large selection fluid dropdown">
                                    <option value="">All</option>
                                    <option value="1">Change Methodology</option>
                                    <option value="2">Cognitive Computing & AI</option>
                                    <option value="3">Connectivity & Collaboration</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-9 col-md-4 mb-3 mr-auto ml-auto">
                              <div class="ui input col-12">
                                <input type="text" placeholder="Other Diseases">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                </div>
                <input type="submit" value="submit" class="btn btn-success">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    @include('backEnd.layoutes.footer')
<!-- footer -->
  </div>

<!-- main content -->



@stop
