<?php

include 'conn.php';

$idEstud = $_GET['id'];

$sql = "delete from estudiante where id_estud = '$idEstud' ";

$query = mysqli_query($conexion, $sql);

if($query){
    header('location: datos.php');
} else {
    echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
};

?>