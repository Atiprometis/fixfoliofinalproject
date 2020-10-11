<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">


    <link rel="stylesheet" href=" {{ asset('css/master.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/custom.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/component.css') }}">
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/7f0bb538bf.js" crossorigin="anonymous"></script>
</head>
<body>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>


    @yield('content')

    @yield('footer')


    @include('../script/script')




</body>
</html>
