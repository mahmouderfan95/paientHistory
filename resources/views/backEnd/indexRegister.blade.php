 @extends('backEnd.layoutes.mastar')
 @section('title','paitenHistory')
 @section('content')
 <!-- navbar file -->
 @include('backEnd.layoutes.navbar')

 <!-- navbar file -->
<!--Start-cards-->
<div class=" cards container">
    <div class="row">
        <input type="hidden" name="role">
        <div class="col text-center">
            <div class="card" style="width: 15rem; padding:15px; margin-bottom:10px;">
                <img src="{{url('imgs/Patirnt.svg')}}" height="120" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{route('patienRegister')}}" class="text-About">Patient</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 15rem; padding:15px;">
                <img src="{{url('imgs/Clinic.svg')}}" height="120" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{route('clinicRegister')}}" class="text-About">Clinic</a>
                </div>
            </div>
        </div>
      <div class="col text-center">
            <div class="card" style="width: 15rem; padding:15px; margin-bottom:10px;">
                <img src="{{url('imgs/Hospital.svg')}}" height="120" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{route('hosptailRegister')}}" class="text-About">Hospital</a>
                </div>
            </div>
      </div>
    </div>
    <div class="row">
        <div class="col text-center">
        <div class="card" style="width: 15rem; padding:15px;  margin-bottom:10px;">
            <img src="{{url('imgs/x-ray.svg')}}" height="120" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{route('xrayRegister')}}" class="text-About">X-ray</a>
            </div>
        </div>
    </div>
    <div class="col text-center">
        <div class="card" style="width: 15rem; padding:15px;">
            <img src="{{url('imgs/labs.svg')}}" height="120" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{route('labsRegister')}}" class="text-About">Labs</a>
            </div>
        </div>
    </div>
  <div class="col text-center">
        <div class="card" style="width: 15rem; padding:15px;">
            <img src="{{url('imgs/pharmacy.svg')}}" height="120" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{route('pharmacyRegister')}}" class="text-About">Pharmacy</a>
            </div>
        </div>
    </div>
    </div>
  </div>
<!--End-cards-->



@stop
