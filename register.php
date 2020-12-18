<?php
    include 'code-register.php';
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login - MauPan</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
    </head>
    <body>
        <div class="container-all">
            <div class="ctn-form">
                <img src="diseño/logo.png" alt="" class="logo">
                <h1 class="title">Registrarse</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <label for="">Nombre del usuario</label>
                    <input type="text" name="username">
                    <span class="msg-error"><?php echo $username_err; ?></span>
                    <label for="">Email</label>
                    <input type="text" name="email">
                    <span class="msg-error"><?php echo $email_err; ?></span>
                    <label for="">Contraseña</label>
                    <input type="password" name=password>
                    <span class="msg-error"><?php echo $password_err; ?></span>

                    <input type="submit" value="Registrarse">

                </form>

                <span class="text-footer">¿Ya estas registrado?<a href="index.php">Iniciar Sesión</a>
                </span>
            </div>
            <div class="ctn-text">
                <div class="capa"></div>
                <h1 class="title-description">¡Bienvenido a MauPan!</h1>
                <p class="text-description">Recuerda se amable con nuestros clientes y apoyarlos</p>
            </div>
        </div>
    </body>
    </html>