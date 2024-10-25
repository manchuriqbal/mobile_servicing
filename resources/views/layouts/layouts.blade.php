<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>@yield('title') | Mobile Relife</title>
        @include('partial.links')
  </head>
<body>

    @include('partial.nav')


    <div class="container-fluid">
        <div class="row">
            {{-- create sidebar --}}
            @include('partial.sidebar')

            {{-- create pages --}}
            <div>
                @yield('pages')
            </div>
        </div>
    </div>


    @include('partial.js')
</body>
</html>
