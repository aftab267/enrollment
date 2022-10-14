@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Student</h2>

            <form class="forms-sample" method="post" action="{{ URL::to('update_student',$result_key->student_id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{ ($result_key->student_name) }}" >
                    </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Roll</label>
                    <input type="text" class="form-control p-input" name="student_roll" value="{{ ($result_key->student_roll) }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Father Name</label>
                    <input type="text" class="form-control p-input" name="student_fathersname" value="{{ ($result_key->student_fathersname) }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Mother Name</label>
                    <input type="text" class="form-control p-input" name="student_mothersname"value="{{ ($result_key->student_mothersname) }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Email</label>
                    <input type="email" class="form-control p-input" name="student_email" value="{{ ($result_key->student_email) }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Phone</label>
                    <input type="text" class="form-control p-input" name="student_phone" value="{{ ($result_key->student_phone) }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Address</label>
                    <input type="text" class="form-control p-input" name="student_address" value="{{ ($result_key->student_address) }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Password</label>
                    <input type="text" class="form-control p-input" name="student_password" value="{{ ($result_key->student_password) }}">
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
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Department</label>
                    <select class="form-control p-input"  name="student_department" value="{{ ($result_key->student_department) }}" id="">
                        <option value="CSE">CSE</option>
                        <option value="BBA">BBA</option>
                        <option value="MBA">MBA</option>
                        <option value="CCE">CCE</option>
                        <option value="EEE">EEE</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Admission Year</label>
                    <input type="date" class="form-control p-input" name="student_admissionyear" value="{{ ($result_key->student_admissionyear) }}">
                </div>
                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
