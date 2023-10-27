<?php
// Encriptar Contraseña con Crypt de PHP
// https://parzibyte.me/blog
// Encripta una contraseña con la función crypt de PHP
// La sal es opcional, pero se recomienda usarla
// La sal es un texto que se agrega a la contraseña para hacerla más segura
// La sal se agrega al inicio de la contraseña, y se escribe entre signos de pesos
// La sal puede ser generada con la función password_hash
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encriptar Contraseña con Crypt de PHP</title>
    <!-- Enlaza Bootstrap (cambia la URL según la versión de Bootstrap que estés usando) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="form-group">
                    <img src="/logo.png" alt="">
                </div>
                <h1 class="mt-5">Encriptar Contraseña con Crypt de PHP</h1>
                <form method="POST" class="mt-3">
                    <div class="form-group">                        
                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese una Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary">Encriptar</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $password = $_POST["password"];
                    $customSalt = '$2a$07$xxXXTuSaltPersonalXXXxxxx$'; // Cambialo por Tu sal personalizada || Shhhh es Secreto.!!!
                    $hashedPassword = crypt($password, $customSalt); // Encripta la contraseña con la sal personalizada

                    echo "<br><div class='container'><label>Contraseña ingresada: </label>
                    <p>$password</p>";
                    echo "<label>Contraseña encriptada: </label><p>$hashedPassword</p></div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
