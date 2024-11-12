@extends('layouts.layouts')

@section('title', 'Create Bill')

@section('pages')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Create Bill</h2>
    </div>

    <form action="{{route('billings.store')}}" method="post">
        @csrf
        <div class="row">

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Customer Name </label>
                <input name="first_name" type="text" class="form-control" id="" placeholder=" Enter Customer Name">
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Customer Number *(Optional)</label>
                <input name="phone" type="text" class="form-control" id="" placeholder=" Enter Customer Number">
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Technician</label>
                <select name="technician_id" class="form-select" aria-label="Default select example">
                    <option selected>Select Technician</option>
                   @foreach ($technicians as $technician)
                    <option value="{{$technician->id}}">{{$technician->first_name}}</option>

                   @endforeach
                </select>
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Service</label>
                <select name="service_id" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                   @foreach ($services as $service)
                    <option value="{{$service->id}}">{{$service->name}}</option>
                   @endforeach

                    {{-- <option value="2">Two</option>
                    <option value="3">Three</option> --}}
                </select>
            </div>


            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Device Name</label>
                <input name="device_name" type="text" class="form-control"  placeholder="Enter Phone Number">
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Total Bill</label>
                <input name="amount" type="number" class="form-control" id="" placeholder="Enter Total Bill">
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Purchase Price</label>
                <input name="purchase_price" type="number" class="form-control" id="" placeholder="Enter Purchase Price">
            </div>
            <div class="mb-3 col-md-3">
                <label class="form-label">Payment Method</label><br>
                <div>
                    <input type="radio" name="payment_method" value="cash" checked>
                    <label for="payment_cash">Cash</label>
                </div>
                <div>
                    <input type="radio"  name="payment_method" value="bkash">
                    <label for="payment_card">Bkash</label>
                </div>
            </div>
            <div class="mb-3 col-md-3">
                <label for="" class="form-label">Note</label>
                <input name="comment" type="text" class="form-control" id="" placeholder="Write Note">
            </div>

        </div>

        <input class="btn btn-dark" type="submit" value="Add Bill">

/
    </form>
</main>
@endsection
