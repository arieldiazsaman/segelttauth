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
        .login-container {
            background-color: #000000;
            padding: 20px;
            border-radius: 5px;
        }
        .login-form input {
            background-color: #1C2432;
            color: #F0F0F1;
            margin: 10px 0;
            padding: 10px;
            width: 300px;
            display: block;
        }
        .login-form button {
            background-color: #FFFFFF;
            color: #0F1419;
            border: none;
            padding: 10px;
            width: 320px;
            cursor: pointer;
            border-radius: 5px;
        }
        .login-form button:hover {
            background-color: #EFF3F4;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form class="login-form">
            <input type="text" placeholder="Nombre de usuario" required>
            <input type="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>
            <p><a href="#">¿Olvidaste tu contraseña?</a> | <a href="#">Crear cuenta</a></p>
        </form>
    </div>
</body>
</html>
