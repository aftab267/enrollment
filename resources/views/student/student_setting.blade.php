@extends('student_layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <p class="alert-success">
                @php
                $exception=Session::get('exception');
                if($exception){
                    echo $exception;
                    Session::put('exception',null);                }
                 @endphp
             </p>
            <h2 class="card-title">Update Your Profile</h2>

            <form class="forms-sample" method="post" action="{{ URL::to('/student_own_update') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Phone</label>
                    <input type="text" class="form-control p-input" name="student_phone" value="{{ $result_key->student_phone }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Address</label>
                    <input type="text" class="form-control p-input" name="student_address" value="{{ $result_key->student_address }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Password</label>
                    <input type="text" class="form-control p-input" name="student_password" value="{{ $result_key->student_password }}">
                </div>

                {{-- <div class="form-group">
                    <label>Upload file</label>
                    <img src="{{asset('uploads/student/'.$result_key->student_image) }}" width= '80'  alt="">
                    <div class="row">
                      <div class="col-12">
                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label><br>
                        <label>width= 80px height= 80px </label>
                        <input type="file" name="student_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">

                      </div>
                    </div>
                </div> --}}

                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
