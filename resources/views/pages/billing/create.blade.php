@extends('layouts.layouts')

@section('title', 'Create Bill')

@section('pages')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>All Bill's</h2>
    </div>

    <form action="" method="post">
        @csrf
        <div class="row">

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Customer Name </label>
                <input name="customer_name" type="text" class="form-control" id="" placeholder=" Enter Customer Name">
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Customer Number *(Optional)</label>
                <input name="customer_number" type="text" class="form-control" id="" placeholder=" Enter Customer Number">
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Technician</label>
                <select name="technician_name" class="form-select" aria-label="Default select example">
                    <option selected>Select Technician</option>
                    <option >Rubel</option>
                    <option >Taraq</option>
                </select>
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Service</label>
                <select name="service_name" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option >Display Change</option>
                    <option >Battary</option>

                    {{-- <option value="2">Two</option>
                    <option value="3">Three</option> --}}
                </select>
            </div>


            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Device Model</label>
                <select name="device_brand_name" class="form-select" aria-label="Default select example">
                    <option selected> Select Mobile</option>
                    <option >IPhone</option>
                    <option >Sumgung</option>
                    <option >Realme</option>
                </select>
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Model Name *(Optional)</label>
                <input name="device_model_name" type="text" class="form-control" id="" placeholder="Enter Mobile Model Name">
            </div>


            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Total Bill</label>
                <input name="amount" type="number" class="form-control" id="" placeholder="Enter Total Bill">
            </div>

            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Purchase Price</label>
                <input name="purchase_price" type="number" class="form-control" id="" placeholder="Enter Purchase Price">
            </div>
        </div>

        <input class="btn btn-dark" type="submit" value="Add Bill">


    </form>
</main>
@endsection
