<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input id="name" type="text" name="name" required autofocus>
        </div>
    
        <div>
            <label for="email">Correo electrónico</label>
            <input id="email" type="email" name="email" required>
        </div>
    
        <div>
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required>
        </div>
    
        <div>
            <label for="password-confirm">Confirmar contraseña</label>
            <input id="password-confirm" type="password" name="password_confirmation" required>
        </div>
    
        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
</body>
</html>