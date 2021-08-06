<?php

include 'conn.php';
session_start();

$usu_id = $_SESSION['userId'];

if(isset($_GET['id'])){
    $idEstud = $_GET['id'];
} elseif(isset($_GET['idEstud'])){
    $idEstud = $_GET['idEstud'];
}

$sql = "select * from estudiante where id_estud = '$idEstud'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);

?>
<?php
if(isset($_SESSION['userId'])){
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>

    <link rel="stylesheet" href="estilos/estilosNuev.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet"> 
</head>
<body>
    <div>
        <?php include 'nav.php' ?>    
    </div>
    <main>
        <h2>Ingresa los datos nuevos</h2>
        <div class="contenedor">
            <form id="form" action="updateEstud.php" method="POST">
                <input type="hidden" name="id_estud" value="<?php echo $row['id_estud'] ?>"> 
                <?php
                if(isset($_GET['id'])){ ?>
                    <input type="hidden" name="deLaPagPrin" value="deLaPagPrin">
                <?php } elseif(isset($_GET['idEstud'])){ ?>
                    <input type="hidden" name="deTodosEstud" value="deTodosEstud">
                <?php
                }
                ?>
                <div class="caja-insert">
                    <div class="caja-1"> <!-- nombre y apellido -->
                        <div class="grupo" id="grupo__nombre"> <!-- nombre -->
                            <label class="etiqueta">Nombre</label>
                            <div class="grupo-input">
                                <input type="text" class="input" id="nombre" name="nombre" value="<?php echo $row['nomEstud'] ?>">
                                <i class="validacion-estado far fa-times-circle"></i>
                            </div>
                            <p class="input-error">El nombre no puede tener numeros o simbolos</p>
                        </div>        
                    
                        <div class="grupo" id="grupo__apellido"> <!-- apellido -->
                            <label class="etiqueta">Apellido</label>
                            <div class="grupo-input">
                                <input type="text" class="input" id="apellido" name="apellido" value="<?php echo $row['apeEstud'] ?>">
                                <i class="validacion-estado far fa-times-circle"></i>
                            </div>
                            <p class="input-error">El apellido no puede tener numeros o simbolos</p></div>
                    </div>

                    <div class="caja-1"><!-- correo y telefono-->
                        <div class="grupo" id="grupo__correo"><!-- correo -->
                            <label class="etiqueta">Correo</label>
                            <div class="grupo-input">
                                <input type="email" class="input" id="correo" name="correo" value="<?php echo $row['correoEstud'] ?>">
                                <i class="validacion-estado far fa-times-circle"></i>
                            </div>
                            <p class="input-error">Ingrese un correo válido</p>
                        </div>
                    
                        <div class="grupo" id="grupo__tel"> <!-- telefono-->
                            <label class="etiqueta">Telefono</label>
                            <div class="grupo-input">
                                <input type="tel" class="input" id="tel" name="tel" value="<?php echo $row['telEstud'] ?>">
                                <i class="validacion-estado far fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="input-error">El número de telefono tiene que tener un mínimo de 7 y un máximo de 14 cifras y no puede tener letras</p>
                    </div>

                    <div class="grupo coment">
                        <label class="etiqueta">Comentarios</label>
                        <input type="textarea" class="input" name="coment">
                    </div>
                </div>
                
                <div class="msjError" id="msjError">
                    <p><i class="fas fa-exclamation-triangle"></i> <b> Error: Por favor llena el formulario correctamente </b> </p>

                </div>

                <div class="caja-submit">
                    <input class="submit" type="submit" value="Listo">
                </div>
                
            </form>
        </div>
    </main>
       
    <?php include 'footer.php' ?>    
    <!-- <script src="js/validateEstud.js"></script> -->


</body>
</html>

<?php }  
else{
    echo "no iniciaste sesion, redirigiendo...";
    header('refresh:3; url= login.html');
} ?>