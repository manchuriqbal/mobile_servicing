@extends('layouts.layouts')

@section('title', 'Create Technician')

@section('pages')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Create Technician</h2>
    </div>

    <form action="{{route('technicians.store')}}" method="post">
        @csrf
        <div class="row">

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">First Name </label>
                <input name="first_name" type="text" class="form-control" placeholder="Enter First Name" value="{{old('first_name')}}">
                @error('first_name')
                    <div class="text-danger"> {{$message}} </div>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Last Name </label>
                <input name="last_name" type="text" class="form-control" placeholder="Enter Last Name" value="{{old('last_name')}}">
                @error('last_name')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">NID Number *(Optional)</label>
                <input name="national_id" type="text" class="form-control" placeholder="Enter NID Number" value="{{old('national_id')}}">
                @error('national_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Phone Number</label>
                <input name="phone" type="text" class="form-control" placeholder="Enter Phone Number" value="{{old('phone')}}">
                @error('phone')
                    <div class="text-danger"> {{$message}} </div>
                @enderror
            </div>


            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Email</label>
                <input name="email" type="text" class="form-control"  placeholder="Enter Email" value="{{old('email')}}">
                @error('email')
                    <div class="text-danger"> {{$message}} </div>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Profile Picture</label>
                <input name="profile_pic" class="form-control"id="formFile" type="file">
                @error('profile_pic')
                    <div class="text-danger"> {{$message}} </div>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Admin Role</label>
                <select name="role_id" class="form-select" aria-label="Default select example">
                    <option selected disabled>Select Admin Role</option>
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}" {{old('role_id') == $role->id ? 'selected' : '' }}>{{$role->name}}</option>
                    @endforeach
                </select>
                @error('role_id')
                    <div class="text-danger"> {{$message}} </div>
                @enderror
            </div>

        </div>

        <input class="btn btn-dark" type="submit" value="Add Technician">

    </form>
</main>
@endsection
