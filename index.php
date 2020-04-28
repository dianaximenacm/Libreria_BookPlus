<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro :: Clases PHP</title>
</head>
<body>
    <div id="login">
        <form method="POST" action="control/usuarioControl.php?accion=login">
            <input type="text" name="correo" id="correo" placeholder="Email" />
            <br>
            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" />
            <br>
            <input type="submit" value="Iniciar Sesión" name="enter" />
        </form>
    </div>
    <br><br>

    <div id="registro">
        <a href="registroForm.php">¿Eres Nuevo? <br> Regístrate!</a>
    </div>
</body>
</html>