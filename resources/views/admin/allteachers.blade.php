@extends('layout')
@section('content')
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">All Teachers Table</h2>
        {{-- <p class="alert-success">
            @php
            $exception=Session::get('exception');
            if($exception){
                echo $exception;
                Session::put('exception',null);                }
             @endphp
         </p> --}}
        <div class="row">
          <div class="col-12">
            <table id="order-listing" class="table table-striped" style="width:100%;">
              <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @php
                    $x=1;
                    @endphp
                    @foreach ($result as $data)
                    <td>{{ $x++ }}</td>
                    <td>{{ $data->teachers_name }}</td>
                    <td>{{ $data->teachers_phone }}</td>
                    <td>{{ $data->teachers_address }}</td>
                    <td><img src="{{asset('uploads/teacher/'.$data->teachers_image) }}" width= '80' style="border-radius: 50%;"  alt=""> </td>
                    <td>{{ $data->teachers_department }}</td>
                    <td>
                      <a href="{{ URL::to('/student_view/'.$data->teachers_id) }}"><button class="btn btn-outline-primary">View</button></a>
                      <a href="{{ URL::to('/student_edit/'.$data->teachers_id) }}"><button class="btn btn-outline-primary">Edit</button></a>
                      <a href="{{ URL::to('/student_delete/' .$data->teachers_id) }}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

