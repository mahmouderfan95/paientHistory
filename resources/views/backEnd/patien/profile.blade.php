@extends('backEnd.layoutes.mastar')
@section('title','Profile')
@section('content')
<!-- profile patient -->
@include('backEnd.patien.slidenav')
  <!-- Main content -->
  <div class="main-content bg-main" id="panel">
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
                        <img alt="Image placeholder" src="{{url('imgs/team-1.jpg')}}" class="avatar rounded-circle">
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
                        <img alt="Image placeholder" src="{{url('imgs/team-1.jpg')}}" class="avatar rounded-circle">
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
                    <img alt="Image placeholder" src="{{url('imgs/team-1.jpg')}}">
                  </span>
                  <div class="media-body ml-3 d-none d-lg-block">
                    <h3 class="mb-0 font-weight-bold">Mohamed Ahmed</h3>
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
    <div class="header img-header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row pt-5">
            <div class="col-xl-4 col-md-4 col-xs-12">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-3">Height</h5>
                      <span class="h2 font-weight-bold mb-0">170 Cm</span>
                    </div>
                    <div class="col-auto">
                      <div>
                        <img src="{{url('imgs/height.png')}}" width="60" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-4">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-3">Weight</h5>
                      <span class="h2 font-weight-bold mb-0">80 Kg</span>
                    </div>
                    <div class="col-auto">
                      <div>
                        <img src="{{url('imgs/Wight.png')}}" width="50" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-4">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-3">Blood</h5>
                      <span class="h2 font-weight-bold mb-0">AB+</span>
                    </div>
                    <div class="col-auto">
                      <div>
                        <img src="{{url('imgs/blood.png')}}" width="50" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-12 col-md-6">
              <div class="card card-stats female-bg">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                      <div>
                        <img src="{{url('imgs/clender.png')}}" width="40" alt="...">
                      </div>
                    </div>
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Female</h5>
                      <span class="h2 font-weight-bold mb-0"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p><a href="#" class="btn hvr-grow buttom px-4 py-2 float-right"><i class="fas fa-edit"></i> &nbsp;Edit</a></p>
        </div>
      </div>
    </div>
    <!-- Information -->
    <div class=" mt-5 ml-5 mb-4">
      <div class="nav row testimonial-group nav-pills" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
        <a class="nav-link col-xs-4 p-1 mr-1 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
          <div class="row">
            <div class="col-4">
              <img src="{{url('imgs/01.png')}}" width="60" alt="...">
            </div>
            <div class="col-6">
              <h4 class="text-pills mt-4">Diseases</h4>
            </div>
          </div>
        </a>
        <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">
          <div class="row">
            <div class="col-4">
              <img src="{{url('imgs/02.png')}}" width="60" alt="...">
            </div>
            <div class="col-8">
              <h4 class="text-pills  ml--1 mt-4">Medication</h4>
            </div>
          </div>
        </a>
        <a  class="nav-link col-xs-4 p-1 mr-1" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">
          <div class="row">
            <div class="col-4">
              {{-- <img src="{{url('imgs/03.jpg')}}" width="60" alt="..."> --}}
            </div>
            <div class="col-8">
              <h4 class="text-pills ml-1 mt-4">Allergies</h4>
            </div>
          </div>
        </a>
        <a  class="nav-link col-xs-4 p-1 mr-1" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">
          <div class="row">
            <div class="col-4">
              <img src="{{url('imgs/04.png')}}" width="60" alt="...">
            </div>
            <div class="col-8">
              <h4 class="text-pills mt-4">Surgeries</h4>
            </div>
          </div>
        </a>
        <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">
          <div class="row">
            <div class="col-4">
              <img src="{{url('imgs/06.png')}}" width="60" alt="...">
            </div>
            <div class="col-8">
              <h4 class=" text-pills mt-4">Somking</h4>
            </div>
          </div>
        </a>
        <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">
          <div class="row">
            <div class="col-4">
              <img src="{{url('imgs/05.png')}}" width="60" alt="...">
            </div>
            <div class="col-8">
              <h4 class="text-pills mt-4">Screening</h4>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-10 p-4 align-items-center js-fullheight animated">
        <div class="tab-content mr-auto ml-auto" id="v-pills-tabContent">
          <div class="tab-pane animated bounce slow py-0 show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
            <h2 class="col-12 ml-xl-8 mb-4">Diseases</h2>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-2">
                <img src="{{url('imgs/01.png')}}" width="60" alt="...">
              </div>
              <div class="col-8">
                <h4 class="mt-3">High Blood Pressure</h4>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-2">
                <img src="{{url('imgs/01.png')}}" width="60" alt="...">
              </div>
              <div class="col-8">
                <h4 class="mt-3">High Blood Pressure</h4>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-2">
                <img src="{{url('imgs/01.png')}}" width="60" alt="...">
              </div>
              <div class="col-8">
                <h4 class="mt-3">High Blood Pressure</h4>
              </div>
            </div>
            <p><a href="#" class="btn hvr-grow buttom px-4 py-2 float-right"><i class="fas fa-edit"></i> &nbsp;Edit</a></p>
          </div>

          <div class="tab-pane animated bounce slow py-0" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
            <h2 class="col-12 ml-xl-8 mb-4">Medication</h2>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-2">
                <img src="{{url('imgs/02.png')}}" width="60" alt="...">
              </div>
              <div class="col-8">
                <h4 class="mt-3">High Blood Pressure</h4>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-2">
                <img src="{{url('imgs/02.png')}}" width="60" alt="...">
              </div>
              <div class="col-8">
                <h4 class="mt-3">High Blood Pressure</h4>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-2">
                <img src="{{url('imgs/02.png')}}" width="60" alt="...">
              </div>
              <div class="col-8">
                <h4 class="mt-3">High Blood Pressure</h4>
              </div>
            </div>
            <p><a href="#" class="btn hvr-grow buttom px-4 py-2 float-right"><i class="fas fa-edit"></i> &nbsp;Edit</a></p>
          </div>

          <div class="tab-pane animated bounce slow py-0" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
            <h2 class="col-12 ml-xl-8 mb-4">Allergies</h2>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">High Blood Pressure</h3>
                <h5 class="pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">High Blood Pressure</h5>
                <h5 class="mt--3 pl-3"><img src="{{url('imgs/save.png')}}" width="60" alt="...">High Blood Pressure</h5>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">High Blood Pressure</h3>
                <h5 class="pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">High Blood Pressure</h5>
                <h5 class="mt--3 pl-3"><img src="{{url('imgs/save.png')}}" width="60" alt="...">High Blood Pressure</h5>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">High Blood Pressure</h3>
                <h5 class="pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">High Blood Pressure</h5>
                <h5 class="mt--3 pl-3"><img src="{{url('imgs/save.png')}}" width="60" alt="...">High Blood Pressure</h5>
              </div>
            </div>
            <p><a href="#" class="btn hvr-grow buttom px-4 py-2 float-right"><i class="fas fa-edit"></i> &nbsp;Edit</a></p>
          </div>
          <div class="tab-pane animated bounce slow py-0" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
            <h2 class="col-12 ml-xl-8 mb-4">Surgeries</h2>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">High Blood Pressure</h3>
                <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">19/12/2010</h4>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">High Blood Pressure</h3>
                <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">19/12/2010</h4>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">High Blood Pressure</h3>
                <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">19/12/2010</h4>
              </div>
            </div>
            <p><a href="#" class="btn hvr-grow buttom px-4 py-2 float-right"><i class="fas fa-edit"></i> &nbsp;Edit</a></p>
          </div>

          <div class="tab-pane animated bounce slow py-0" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
            <h2 class="col-12 ml-xl-8 mb-4">Somking</h2>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h2 class="mt-3 pl-4">Alcohol</h2>
                <h4 class="pl-3 pl-6">Wine</h4>
                <h4 class="mt--3 pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">Middle</h4>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">Cigarette</h3>
                <h4 class="pl-3 pl-6">E-Cigar</h4>
                <h4 class="mt--3 pl-4"><img src="{{url('imgs/date.png')}}" width="50" alt="...">7 Years</h4>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">Tobacco</h3>
                <h4 class="pl-3 pl-6">Pipe</h4>
                <h4 class="mt--3 pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">Middle</h4>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">Drug</h3>
                <h4 class="pl-3 pl-6">Wine</h4>
                <h4 class="mt--3 pl-4"><img src="{{url('imgs/date.png')}}" width="50" alt="...">7 Years</h4>
              </div>
            </div>
            <p><a href="#" class="btn hvr-grow buttom px-4 py-2 float-right"><i class="fas fa-edit"></i> &nbsp;Edit</a></p>
          </div>

          <div class="tab-pane animated bounce py-0" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
            <h2 class="col-12 ml-xl-8 mb-4">Screening</h2>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">Colonscopy</h3>
                <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">19/12/2010</h4>
              </div>
            </div>
            <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
              <div class="col-8">
                <h3 class="mt-3 pl-4">Mmamogram</h3>
                <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">19/12/2010</h4>
              </div>
            </div>
            <p><a href="#" class="btn hvr-grow buttom px-4 py-2 float-right"><i class="fas fa-edit"></i> &nbsp;Edit</a></p>
          </div>

        </div>
      </div>
    </div>
    <!-- Page content -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col-10">
                  <h3 class="text-white text-uppercase mt-3 ls-4 ml-4">Family History</h3>
                </div>
                <div class="col-2 justify-content-end">
                  <a class="mr-3 text-white" type="submit" href="#" id="button"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                  <a class="text-white" type="submit" href="#" id="button2"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div class="card-body mb-3" id='cont'>
              <ul class="list-unstyled">
                <li>
                  <div class="row row-text-f mb-3">
                    <div class="col-12">
                      <h3 class="fH-text">Mother</h3>
                    </div>
                    <div class="col-2">
                      <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-10">
                      <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                  <div class="col-2">
                    <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                  </div>
                  <div class="col-10">
                    <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                </li>
                <li>
                  <div class="row row-text-f mb-3">
                    <div class="col-12">
                      <h3 class="fH-text">Mother</h3>
                    </div>
                    <div class="col-2">
                      <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-10">
                      <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                  <div class="col-2">
                    <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                  </div>
                  <div class="col-10">
                    <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                </li>
                <li>
                  <div class="row row-text-f mb-3">
                    <div class="col-12">
                      <h3 class="fH-text">Mother</h3>
                    </div>
                    <div class="col-2">
                      <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-10">
                      <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                  <div class="col-2">
                    <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                  </div>
                  <div class="col-10">
                    <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                </li>
                <li>
                  <div class="row row-text-f mb-3">
                    <div class="col-12">
                      <h3 class="fH-text">Mother</h3>
                    </div>
                    <div class="col-2">
                      <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-10">
                      <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                  <div class="col-2">
                    <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                  </div>
                  <div class="col-10">
                    <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                </li>
                <li>
                  <div class="row row-text-f mb-3">
                    <div class="col-12">
                      <h3 class="fH-text">Mother</h3>
                    </div>
                    <div class="col-2">
                      <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-10">
                      <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                  <div class="col-2">
                    <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                  </div>
                  <div class="col-10">
                    <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                </li>
                <li>
                  <div class="row row-text-f mb-3">
                    <div class="col-12">
                      <h3 class="fH-text">Mother</h3>
                    </div>
                    <div class="col-2">
                      <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-10">
                      <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                  <div class="col-2">
                    <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                  </div>
                  <div class="col-10">
                    <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                </li>
                <li>
                  <div class="row row-text-f mb-3">
                    <div class="col-12">
                      <h3 class="fH-text">Mother</h3>
                    </div>
                    <div class="col-2">
                      <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-10">
                      <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                  <div class="col-2">
                    <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                  </div>
                  <div class="col-10">
                    <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                </li>
                <li>
                  <div class="row row-text-f">
                    <div class="col-12">
                      <h3 class="fH-text">Mother</h3>
                    </div>
                    <div class="col-2">
                      <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-10">
                      <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                  <div class="col-2">
                    <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                  </div>
                  <div class="col-10">
                    <h4 class="mt-3">High Blood Pressure</h4>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="card female-bg">
        <h2 class="row mt-4 ml-5 ">Female History</h2>
        <div class="row mt-2 mr-auto ml-auto ">
          <div class="col-xl-6 col-md-2 col-xs-12">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-auto">
                    <div>
                      <img src="{{url('imgs/prng.png')}}" width="60" alt="...">
                    </div>
                  </div>
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-3">Pregnency</h5>
                    <span class="h3 font-weight-bold mb-0">170 Cm</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-2 col-xs-12">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-auto">
                    <div>
                      <img src="{{url('imgs/pain.png')}}" width="60" alt="...">
                    </div>
                  </div>
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-3">Complicetion in Deliveries</h5>
                    <span class="h3 font-weight-bold mb-0">No</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-2 col-xs-12">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-auto">
                    <div>
                      <img src="{{url('imgs/delivery.png')}}" width="60" alt="...">
                    </div>
                  </div>
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-3">Types of Deliveries</h5>
                    <span class="h3 font-weight-bold mb-0">170 Cm</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-2 col-xs-12">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-auto">
                    <div>
                      <img src="{{url('imgs/beby.png')}}" width="60" alt="...">
                    </div>
                  </div>
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-3">Abortion</h5>
                    <span class="h3 font-weight-bold mb-0">170 Cm</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-2 col-xs-12">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-auto">
                    <div>
                      <img src="{{url('imgs/noPreg.png')}}" width="60" alt="...">
                    </div>
                  </div>
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-3">Contraceptives</h5>
                    <span class="h3 font-weight-bold mb-0">Yes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    @include('backEnd.layoutes.footer')
    <!-- footer -->
  </div>


<!-- profiel patient -->



@stop
