<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
TAS LOGIN PAPI

<div class="col">
    <a class=" h6" href="{{ route('logout') }}"
        onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
        {{ __('Cerrar Sesion') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <img src="{{ asset('images/salir.svg') }}" alt="">
</div>
</body>
</html>
