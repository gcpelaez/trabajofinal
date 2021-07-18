<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    <nav>
        <?php include 'nav.php' ?>    
    </nav>

    <main>
        <div class="login animate__animated animate__fadeIn">
            <form action="insertNuevUsu.php" method="POST">
                <div class="usuario">
                    <div class="caja-input animate__animated animate__fadeInLeft ">
                        <input type="text" placeholder="Nombre" name="nombre" required>
                    </div>

                    <div class="caja-input animate__animated animate__fadeInLeft ">
                        <input type="text" placeholder="Apellido" name="apellido" required>
                    </div>

                    <div class="caja-input animate__animated animate__fadeInLeft ">
                        <input type="email" placeholder="Correo electrónico" name="correo" required>
                    </div>

                    <div class="caja-input animate__animated animate__fadeInLeft ">
                        <input type="password" placeholder="Contraseña" name="pass" required>
                    </div>

                    <div class="caja-input animate__animated animate__fadeInLeft ">
                        <input type="tel" placeholder="Telefono" name="tel" required>
                    </div>

                    <div class="caja-input animate__animated animate__fadeInLeft ">
                        <input type="text" placeholder="Usuario" name="avatar" required>
                    </div>

                </div>
                <div class="caja-submit caja-input animate__animated animate__fadeInLeft">
                    <input class="submit" type="submit" value="Iniciar Sesión">
                </div>
            </form>
        </div>




    </main>






</body>
</html>