 @extends('backEnd.layoutes.mastar')
 @section('title','paitenHistory')
 @section('content')
 <!-- navbar file -->
 @include('backEnd.layoutes.navbar')

 <!-- navbar file -->
<!--Start-cards-->
<section class="row col-xl-9 ml-xl-9 mt-4">
    <div class="cards container mb-1">
      <div class="row offset-xl-1 col-12">
        <div class="col-xl-3 text-center">
          <div class="card pt-2">
              <img src="{{url('imgs/Patirnt.svg')}}" height="90" class="card-img-top" alt="...">
              <div class="card-body">
                  <a href="{{route('patienRegister')}}" class="h5 font-weight-bold text-decoration-none mb-0">Patient</a>
              </div>
          </div>
      </div>
      <div class="col-xl-3 text-center">
          <div class="card pt-2">
              <img src="{{url('imgs/Clinic.svg')}}" height="90" class="card-img-top" alt="...">
              <div class="card-body">
                  <a href="{{route('clinicRegister')}}" class="h5 font-weight-bold text-decoration-none mb-0">Clinic</a>
              </div>
          </div>
      </div>
      <div class="col-xl-3 text-center">
          <div class="card pt-2">
              <img src="{{url('imgs/Hospital.svg')}}" height="90" class="card-img-top" alt="...">
              <div class="card-body">
                  <a href="{{route('hosptailRegister')}}" class="h5 font-weight-bold text-decoration-none mb-0">Hospital</a>
              </div>
          </div>
      </div>
      </div>
      <div class="row offset-xl-1 col-12">
        <div class="col-xl-3 text-center">
          <div class="card pt-2">
            <img src="{{url('imgs/x-ray.svg')}}" height="90" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="{{route('xrayRegister')}}" class="h5 font-weight-bold text-decoration-none mb-0">X-ray</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 text-center">
            <div class="card pt-2">
              <img src="{{url('imgs/labs.svg')}}" height="90" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="{{route('labsRegister')}}" class="h5 font-weight-bold text-decoration-none mb-0">Labs</a>
              </div>
            </div>
        </div>
        <div class="col-xl-3 text-center">
          <div class="card pt-2">
            <img src="{{url('imgs/pharmacy.svg')}}" height="90" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{route('pharmacyRegister')}}" class="h5 font-weight-bold text-decoration-none mb-0">Pharmacy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End-cards-->
  <!-- footer -->
  @include('backEnd.layoutes.footer')
<!-- footer -->


@stop
