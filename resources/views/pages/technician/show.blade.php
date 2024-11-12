@extends('layouts.layouts')

@section('title', 'Technician Profile')

@section('pages')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Technician Profile</h2>

    </div>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between flex-wrap ">
            <h4>{{ $technician->first_name }} {{ $technician->last_name ?? '' }}</h4>
            <div class="mt-3">
                <a href="{{ route('technicians.edit', $technician->id) }}" class="btn btn-warning">Edit Profile</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $technician->profile_pic ? asset('storage/' . $technician->profile_pic) : asset('default-profile.png') }}" alt="Profile Picture" class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Name:</strong> {{ $technician->first_name }} {{ $technician->last_name ?? '' }}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{ $technician->phone }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $technician->email ?? 'N/A' }}</li>
                        <li class="list-group-item"><strong>National ID:</strong> {{ $technician->national_id ?? 'N/A' }}</li>
                        <li class="list-group-item"><strong>Role:</strong> {{ $technician->role->name ?? 'N/A' }}</li>
                        <li class="list-group-item"><strong>Status:</strong> {{ ucfirst($technician->status) }}</li>
                        <li class="list-group-item"><strong>Total Billings:</strong> {{ $technician->total_bill ?? 0 }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('technicians.index') }}" class="btn btn-primary">Back to List</a>
</main>
@endsection
