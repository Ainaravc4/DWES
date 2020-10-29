<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>.">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            
        </p>
        <p>
            <label for="apellido">Contraseña</label>
            <input type="password" name="contraseña"/>
            
        </p>
        <input type="submit" name="enviar"/>
    </form>
     <?php echo "hola BIENVENIDO"; ?>.
</body>
</html>

