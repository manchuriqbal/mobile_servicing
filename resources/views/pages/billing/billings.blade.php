
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>All Bill's</h2>
    </div>
    <a class="btn btn-primary mb-3" href="{{route('billings.create')}}">Add New Bill</a>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Bill No</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Servie</th>
            <th scope="col">Device</th>
            <th scope="col">Technician</th>
            <th scope="col">Amount</th>
            <th scope="col">Company Bill</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Note</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($billing as $bill)

            <tr>
                <td>{{$bill->id}}</td>
                <td>{{$bill->customer->first_name .' ' . $bill->customer->last_name}}</td>
                <td>{{$bill->service->name}}</td>
                <td>{{$bill->device_name}}</td>
                <td>{{$bill->technician->first_name .' '. $bill->technician->last_name}}</td>
                <td>{{(int)$bill->amount}}</td>
                <td>{{(int)$bill->purchase_price}}</td>
                <td>{{$bill->payment_method}}</td>
                <td>{{$bill->comment}}</td>
            </tr>

            @endforeach
        </tbody>
      </table>
      {{$billing->links()}}
    </div>
