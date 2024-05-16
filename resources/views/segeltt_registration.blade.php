<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock Twitter Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #000000;
            padding: 20px;
            border-radius: 5px;
        }
        .register-form input {
            background-color: #1C2432;
            color: #F0F0F1;
            margin: 10px 0;
            padding: 10px;
            width: 300px;
            display: block;
        }
        .register-form button {
            background-color: #FFFFFF;
            color: #0F1419;
            border: none;
            padding: 10px;
            width: 320px;
            cursor: pointer;
            border-radius: 5px;
        }
        .register-form button:hover {
            background-color: #EFF3F4;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #1D9BF0
        }
        .register-title {
            color: #E7E9EA;
        }
        .form-control {
            color: white;
        }
        .alert-danger {
            color: red;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2 class="register-title">Crea tu cuenta</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="register-form" method="POST" action="{{ url('/segeltt_registratrion') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nombre Completo</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Nombre de Usuario</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear cuenta</button>
            <p><a href="{{ url('/segeltt_login') }}">Volver</a></p>
        </form>
    </div>
</body>
</html>
