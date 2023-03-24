<?php
$conexion= mysqli_connect("localhost", "root", "", "r_user");

if(isset($_POST['registrar'])){

    if(strlen($_POST['nombre']) >=1 && strlen($_POST['usos']) >=1 
    && strlen($_POST['precio'])  >=1 && strlen($_POST['rol']) >= 1 ){

    $nombre = trim($_POST['nombre']);
    $usos = trim($_POST['usos']);
   
    $precio = trim($_POST['precio']);
    $rol = trim($_POST['rol']);

    $consulta= "INSERT INTO user (nombre, usos, precio, rol)
    VALUES ('$nombre', '$usos', '$precio', '$rol' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../views/user.php');
  }
}









?>