@extends('layouts.layouts')

@section("title", "Technician's")

@section('pages')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Technicians</h2>
    </div>
    <a class="btn btn-primary mb-3" href="">Add Technician</a>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID No</th>
            <th scope="col">Profile Picture</th>
            <th scope="col">Technician Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($technicians as $technician)

            <tr>
                <td>{{$technician->id}}</td>
                <td>
                    <img src="{{$technician->profile_pic}}" width="50px" alt="">
                </td>
                <td>
                    <a href="{{route('technicians.show', $technician->id)}}" style="text-decoration: none;">{{$technician->first_name.' '.$technician->last_name}}</a>
                </td>
                <td>{{$technician->phone}}</td>
                <td>{{$technician->email}}</td>
                <td>{{$technician->technicianRole->name}}</td>
                <td>{{$technician->status}}</td>
                <td>
                    <a class="btn btn-primary"href="{{route('technicians.edit', $technician->id)}}">Edit</a>
                </td>
            </tr>

            @endforeach
        </tbody>
      </table>
    </div>
</main>
@endsection
