@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Student</h2>
            <form class="forms-sample" method="post" action="{{ URL::to('save_student') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter Student Name">
                    </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Roll</label>
                    <input type="text" class="form-control p-input" name="student_roll" placeholder="Enter Student Roll">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Father Name</label>
                    <input type="text" class="form-control p-input" name="student_fathersname" placeholder="Enter Student Father Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Mother Name</label>
                    <input type="text" class="form-control p-input" name="student_mothersname" placeholder="Enter Student Mother Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Email</label>
                    <input type="email" class="form-control p-input" name="student_email" placeholder="Enter Student Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Phone</label>
                    <input type="text" class="form-control p-input" name="student_phone" placeholder="Enter Student Phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Address</label>
                    <input type="text" class="form-control p-input" name="student_address" placeholder="Enter Student Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Password</label>
                    <input type="password" class="form-control p-input" name="student_password" placeholder="Enter Student Password">
                </div>

                <div class="form-group">
                    <label>Upload file</label>
                    <div class="row">
                      <div class="col-12">
                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                        <input type="file" name="student_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">

                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Department</label>
                    <select class="form-control p-input"  name="student_department" id="">
                        <option value="1">CSE</option>
                        <option value="2">BBA</option>
                        <option value="3">MBA</option>
                        <option value="4">CCE</option>
                        <option value="5">EEE</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Admission Year</label>
                    <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Enter Student Admission year">
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
