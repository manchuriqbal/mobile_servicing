@extends('layouts.layouts')

@section("title', 'Bill's")

@section('pages')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @include('pages.billing.billings')
</main>
@endsection
