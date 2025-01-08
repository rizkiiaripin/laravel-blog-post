<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
</head>
<body class=" bg-light-subtle">
    <x-navbar></x-navbar>
    <div class="container">

        {{$slot}}

    </div>
    <script src="{{asset('css/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>