<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="../style/login.css">
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="../controller/registrar.php" method="post">
                    <h1>Crea una cuenta</h1>
                    <br>
                    <span>O usa tu email para iniciar sesión</span>
                    <input type="text" placeholder="Nombre" name="name"/>
                    <input type="email" placeholder="Email" name="mail"/>
                    <input type="password" placeholder="Contraseña" name="password"/>
                    <button>Registrar</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="../controller/loguear.php" method="post">
                    <h1>Ingresa a tu cuenta</h1>
                    <br>
                    <span>O registrate</span>
                    <input type="email" placeholder="Email" name="email" />
                    <input type="password" placeholder="Contraseña" name="pass" />
                    <a href="#">Olvidaste tu contraseña?</a>
                    <button>Iniciar Sesión</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bienvenido de nuevo!</h1>
                        <p>Para mantenerse conectado con nosotros, inicie sesión con su
                            información personal</p>
                        <button class="ghost" id="signIn">Ingresar</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hola!</h1>
                        <p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
                        <button class="ghost" id="signUp">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="../scripts/login.js"></script>
</html>