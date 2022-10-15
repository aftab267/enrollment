@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Teacher</h2>
            <p class="alert-success">
                @php
                $exception=Session::get('exception');
                if($exception){
                    echo $exception;
                    Session::put('exception',null);                }
                 @endphp
             </p>
            <form class="forms-sample" method="post" action="{{ URL::to('save_teacher') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Teacher Name</label>
                    <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" placeholder="Enter Teacher Name">
                    </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Teacher Phone</label>
                    <input type="text" class="form-control p-input" name="teachers_phone" placeholder="Enter Teacher Phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Teacher Address</label>
                    <input type="text" class="form-control p-input" name="teachers_address" placeholder="Enter teacher Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Teacher Department</label>
                    <select class="form-control p-input"  name="teachers_department" id="">
                        <option value="CSE">CSE</option>
                        <option value="BBA">BBA</option>
                        <option value="MBA">MBA</option>
                        <option value="CCE">CCE</option>
                        <option value="EEE">EEE</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Upload file</label>
                    <div class="row">
                      <div class="col-12">
                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label><br>
                        <label>width= 80px height= 80px </label>
                        <input type="file" name="teachers_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">

                      </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">Add Teacher</button>
            </form>
        </div>
    </div>
</div>
@endsection
