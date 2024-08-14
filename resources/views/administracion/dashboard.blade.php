<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <p>Iniciaste sessión.</p>
    <form action="{{ route('logout') }}" method="POST" id="logout-form">
        @csrf
    </form>
    <button onclick="document.getElementById('logout-form').submit()">Cerrar Sesión</button>
</body>
</html>