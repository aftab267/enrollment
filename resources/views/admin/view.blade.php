@extends('layout')
@section('content')

<div class="row user-profile">
    <div class="col-lg-12 side-left">
      <div class="card mb-6">
        <div class="card-body avatar">
          <h2 class="card-title">Student Information:</h2>
          <img src="{{asset('uploads/student/'.$result_key->student_image) }}"   alt="">
          <p class="name">{{ $result_key->student_name }}</p>
          <p class="designation">- {{$result_key->student_department}} -</p>
          <a class="email" href="#">{{$result_key->student_email}}</a>
          <a class="number" href="#">{{$result_key->student_phone}}</a>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body overview">
          <ul class="achivements">
            <li><p>34</p><p>Projects</p></li>
            <li><p>23</p><p>Task</p></li>
            <li><p>29</p><p>Completed</p></li>
          </ul>
          <div class="wrapper about-user">
            <h2 class="card-title mt-4 mb-3">About</h2>
            <p>The Total Information Of This Student Given Below:</p>
          </div>
          <div class="info-links">

              <label for=""> Fathers Name :</label>
              <span>{{$result_key->student_fathersname}}</span><br>

              <label for=""> Mothers Name :</label>
              <span>{{$result_key->student_mothersname}}</span><br>

              <label for=""> Address :</label>
              <span>{{$result_key->student_address}}</span><br>
              <label for=""> Phone :</label>
              <span>{{$result_key->student_phone}}</span><br>
              <label for=""> Department :</label>
              <span>{{$result_key->student_department}}</span><br>
              <label for=""> Admission year :</label>
              <span>{{$result_key->student_admissionyear}}</span><br>


          </div>
        </div>
      </div>
    </div>

  </div>
</div>


@endsection
