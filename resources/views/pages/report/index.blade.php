@extends('layouts.layouts')

@section("title", "Reports")

@section('pages')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>All Reports</h2>
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID No</th>
            <th scope="col">Profile Picture</th>
            <th scope="col">Technician Name</th>
            <th scope="col">Total Income</th>
            <th scope="col">Parts Expense</th>
            <th scope="col">technician Share</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reports as $technician)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <img src="{{$technician->profile_pic}}" width="50px" alt="">
                </td>
                <td>{{$technician->first_name.' '.$technician->last_name}}</td>
                <td>{{(int) $technician->billing->sum('amount')}}</td>
                <td>{{(int) $technician->billing->sum('purchase_price')}}</td>
                <td>
                    @if ($technician->technicianRole->name !== 'manager')
                        {{ intval(($technician->billing->sum('amount') - $technician->billing->sum('purchase_price')) / 2)}}
                    @else
                        {{ intval($technician->billing->sum('amount') - $technician->billing->sum('purchase_price'))}}
                    @endif
                </td>
            </tr>

            @endforeach
        </tbody>
      </table>
    </div>
</main>
@endsection
