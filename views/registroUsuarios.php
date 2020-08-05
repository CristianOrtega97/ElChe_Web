<?php

$host_name = "127.0.0.1";
$host_user = "root";
$host_pass = "";
$database = "hotel_che";

$connection = mysqli_connect($host_name, $host_user, $host_pass, $database);

if ($connection) {

    //Se reciben los datos capturados por el usuario en el formulario
    $nombre = $_POST["nombreUsuario"];
    $apellidos = $_POST["apellidosUsuario"];
    $numEmpleado = 0;
    $telefono = $_POST["telefonoUsuario"];
    $correo = $_POST["correoUsuario"];
    $contraseña = $_POST["contraseña"];
    $tipo = 1;

    //Consulta de insercion
    $insertarUsuario = "INSERT INTO usuarios (usuarios_nombres, usuarios_apellidos,
    usuarios_num_empleado, usuarios_telefono, usuarios_correo, usuarios_contra, usuarios_tipo) VALUES
    ('$nombre', '$apellidos', '$numEmpleado', '$telefono', '$correo', '$contraseña', '$tipo')";

//Validacion de usuario
    $validacionCorreo = mysqli_query($connection,"SELECT * FROM usuarios WHERE usuarios_correo = '$correo'");
    if(mysqli_num_rows($validacionCorreo) > 0 ){
        echo '<script>alert("Correo ingresado ya registrado, favor de ingresar otro");</script>';
        echo "<a href = 'registroUsuarios.html'>Regresar</a>";
        exit;
    }

    //Ejecutar Consulta
    $resultado = mysqli_query($connection,$insertarUsuario);
    if(!$resultado){
        echo '<script>alert("Error al registrar");</script>';
        echo "<a href = 'registroUsuarios.html'>Regresar</a>";

    }else{
        //echo "Usuario registrado correctamente<br><a href = 'login.html'> Continuar</a>";
        header("Location: login.html");
        
    }


} else {
    echo "Problema con conexión";
}

?>