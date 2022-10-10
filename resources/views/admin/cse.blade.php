@extends('layout')
@section('content')

<div class="card">
    <div class="card-body">
      <h2 class="card-title">CSE Students Table</h2>
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th>SL</th>
                  <th>Roll</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Image</th>
                  <th>Address</th>
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
                  <td>{{ $data->student_roll }}</td>
                  <td>{{ $data->student_name }}</td>
                  <td>{{ $data->student_phone }}</td>
                  <td><img src="{{asset('uploads/student/'.$data->student_image) }}" width= '100' height='80' alt=""> </td>
                  <td>{{ $data->student_address }}</td>
                  <td>{{ $data->student_department }}</td>
                  <td>
                    <button class="btn btn-outline-primary">View</button>
                    <button class="btn btn-outline-primary">Edit</button>
                    <button class="btn btn-outline-danger">Delete</button>
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
