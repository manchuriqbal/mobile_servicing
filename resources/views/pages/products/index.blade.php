@extends('layouts.layouts')

@section("title", "Products")

@section('pages')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Products</h2>
    </div>
    <a class="btn btn-primary mb-3" href="">Add Product</a>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Serial No</th>
            <th scope="col">Moblie Model</th>
            <th scope="col">Part's Name</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1,001</td>
            <td>random</td>
            <td>data</td>
            <td>text</td>
          </tr>
          <tr>
            <td>1,002</td>
            <td>placeholder</td>
            <td>visual</td>
            <td>text</td>
          </tr>
          <tr>
            <td>1,003</td>
            <td>data</td>
            <td>rich</td>
            <td>text</td>
          <tr>
            <td>1,003</td>
            <td>information</td>
            <td>placeholder</td>
            <td>illustrative</td>
          </tr>
          <tr>
            <td>1,004</td>
            <td>text</td>
            <td>layout</td>
            <td>text</td>
          </tr>
          <tr>
            <td>1,005</td>
            <td>dashboard</td>
            <td>text</td>
            <td>placeholder</td>
          </tr>
          <tr>
            <td>1,006</td>
            <td>dashboard</td>
            <td>rich</td>
            <td>data</td>
          </tr>
          <tr>
            <td>1,007</td>
            <td>placeholder</td>
            <td>tabular</td>
            <td>irrelevant</td>
          </tr>
          <tr>
            <td>1,008</td>
            <td>random</td>
            <td>data</td>
            <td>text</td>
          </tr>
          <tr>
            <td>1,009</td>
            <td>placeholder</td>
            <td>irrelevant</td>
            <td>layout</td>
          </tr>
          <tr>
            <td>1,010</td>
            <td>data</td>
            <td>dashboard</td>
            <td>tabular</td>
          </tr>
          <tr>
            <td>1,011</td>
            <td>information</td>
            <td>placeholder</td>
            <td>data</td>
          </tr>
          <tr>
            <td>1,012</td>
            <td>text</td>
            <td>placeholder</td>
            <td>dashboard</td>
          </tr>
          <tr>
            <td>1,013</td>
            <td>dashboard</td>
            <td>text</td>
            <td>visual</td>
          </tr>
          <tr>
            <td>1,014</td>
            <td>dashboard</td>
            <td>illustrative</td>
            <td>data</td>
          </tr>
          <tr>
            <td>1,015</td>
            <td>random</td>
            <td>information</td>
            <td>text</td>
          </tr>
        </tbody>
      </table>
    </div>
</main>
@endsection
