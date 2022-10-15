@extends('student_layout')
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">All Students</h2>
        @php
            $student=DB::table('student_tbls')->count('student_id');
        @endphp
        <p style="font-size: 30px; font-weight:bold;">{{ $student }}</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-1" class="card-float-chart"></div>
      </div>
    </div>
  </div>
<div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">All Teachers</h2>
        @php
        $teacher=DB::table('teachers')->count('teachers_id');
    @endphp
        <p style="font-size: 30px; font-weight:bold;">{{ $teacher }}</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-2" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Tuition Fee</h2>
        <p style="font-size: 20px; font-weight:bold;" >Monthly: 2500 Tk</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-3" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Revenue</h2>
        <p style="font-size: 20px; font-weight:bold;" >Revenue</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-4" class="card-float-chart"></div>
      </div>
    </div>
  </div>
</div>
<div class="row">

@endsection

