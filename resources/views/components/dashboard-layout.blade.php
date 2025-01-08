<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/"> --}}

    

    <!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    
    <x-dashboard-headear></x-dashboard-headear>

<div class="container-fluid">
  <div class="row">
    <x-dashboard-sidebar></x-dashboard-sidebar>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h class="h2">{{ $header }}</h1>
        
      </div>
      {{$slot}}

     
    </main>
  </div>
</div>


    <script src="{{asset('css/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
