<?php

$host_name = "127.0.0.1";
$host_user = "root";
$host_pass = "";
$database = "hotel_che";

$connection = mysqli_connect($host_name, $host_user, $host_pass, $database);

if ($connection) {

    $numeroReservacion = rand(100000,99999999);
    $nombreUsuario = $_POST["nombreUsuario"];
    $habitacion = $_POST["habitacion"];
    $tipoHabitacion = $_POST["tipohabitacion"];
    $promocion = $_POST["codigo"];
    $costo = $_POST["costo"];
<<<<<<< HEAD
    $user_phone = $_POST["user_phone"];
=======
>>>>>>> c7fff8db10dec9b2bd9f5b6f0ae86fb06eae78bd
    
    $fechaIngreso = $_POST["fechaIngreso"];
    $fechaSalida = $_POST["fechaSalida"];
    $dias = (strtotime($fechaIngreso)-strtotime($fechaSalida))/86400;
    $dias = abs($dias); $dias = floor($dias);	
    $subtotal = $costo * $dias;//total precio habitacion por dias sin descuento
    if($promocion == "01"){
        $costo = $costo*0.9;
    }else 
        if($promocion == "02"){
            $costo = $costo*0.8;
        }else
            if($promocion == "03"){
                $costo = $costo*0.7;
            }
    $total = $costo * $dias;//total precio habitacion por dias con descuento

<<<<<<< HEAD

    

    $insertarReservacion = "INSERT INTO reservacion (reservacion_nombre,reservacion_phone, reservacion_numero, 
    reservacion_habitacion, reservacion_habitacion_tipo, reservacion_ingreso, reservacion_salida,
    reservacion_subtotal, reservacion_promocion, reservacion_total)
    VALUES ('$nombreUsuario','$user_phone','$numeroReservacion', '$habitacion', '$tipoHabitacion', '$fechaIngreso', '$fechaSalida', '$subtotal', '$promocion', '$total')";
    //Ejecutar consulta
} else {
    echo "Problema con conexión";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/slicknav.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <title>Promociones</title>
</head>
<body>
    <header class="site-header">
        <div class="contenedor">
            <div class="barra-navegacion">
                <div class="logo">
                    <img src="../img/che.png" alt="logo ">
                </div>
                    <ul id="myDIV" class="menu-principal">
                        <li><a  href="promociones.html">Promociones</a></li>
                        <li><a  href="habitaciones.html">Habitaciones</a></li>
                        <li><a  href="nosotros.html">Nosotros</a></li>
                        <li><a  href="aviso.html">Aviso Privacidad</a></li>
                        <li><a  href="buscar.html">Buscar</a></li>
                      </ul>
  
            </div>
        </div>
    </header>

    <section style="text-align:center">
    <br><br>
        <h2>¡Gracias por su solicitud de Reservación!</h2><br>
        <h4>Confirmación de datos: </h4>
        <?php

            echo "<h3>Datos de reservacion.</h3><br>";         
            echo "Numero reservacion: ".$numeroReservacion."<br>";
            echo "Nombre completo: ".$nombreUsuario."<br>";
            echo "Numero: ".$user_phone."<br>";
            echo "Dias: ".$dias."<br>";
            echo "Fecha ingreso: ".$fechaIngreso."<br>";
            echo "Fecha Salida: ".$fechaSalida."<br>";
            echo "Promocion: ".$promocion."<br>";
            echo "Subtotal:  ".$subtotal."<br>";
            echo "Total con descuento: ".$total."<br>";

            $resultado = mysqli_query($connection,$insertarReservacion);
            if(!$resultado){
                echo '<script>alert("Error al registrar");</script>';
                echo "<a href = 'habitaciones.html'>Regresar</a>";
 
            }else{
                echo '<script>alert("Reservacion guardada con exito");</script>';
                echo "<h3>Da clic al enlace para regresar</h3><br><a href = 'habitaciones.html'> Continuar</a>";
                //header("Location: habitaciones.html");

            }  
        ?>

        <h4>Un representante se pondrá en contacto con usted a la brevedad para confirmar su reservación</h4><br>
    </section><br>

    <footer style="border-top: thin solid black;">
        <h1 class="title">Redes Sociales</h1>
        <div class="container">
            <ul class="social-icons">
                <li><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://aboutme.google.com/u/0/"><i class="fab fa-google-plus-g"></i></a></li>
            </ul>
        </div>
    </footer>

</body>
</html>
=======
   echo "<h3>Datos de reservacion.</h3><br>";         
   echo "Numero reservacion: ".$numeroReservacion."<br>";
   echo "Nombre completo: ".$nombreUsuario."<br>";
   echo "Dias: ".$dias."<br>";
   echo "Fecha ingreso: ".$fechaIngreso."<br>";
   echo "Fecha Salida: ".$fechaSalida."<br>";
   echo "Promocion: ".$promocion."<br>";
   echo "Subtotal:  ".$subtotal."<br>";
   echo "Total con descuento: ".$total."<br>";
    

    $insertarReservacion = "INSERT INTO reservacion (reservacion_nombre, reservacion_numero, 
    reservacion_habitacion, reservacion_habitacion_tipo, reservacion_ingreso, reservacion_salida,
    reservacion_subtotal, reservacion_promocion, reservacion_total)
    VALUES ('$nombreUsuario', '$numeroReservacion', '$habitacion', '$tipoHabitacion', '$fechaIngreso', '$fechaSalida', '$subtotal', '$promocion', '$total')";
    //Ejecutar consulta
     $resultado = mysqli_query($connection,$insertarReservacion);
     if(!$resultado){
         echo '<script>alert("Error al registrar");</script>';
         echo "<a href = 'habitaciones.html'>Regresar</a>";
 
     }else{
         echo '<script>alert("Reservacion guardada con exito");</script>';
         echo "<h3>Da clic al enlace para regresar</h3><br><a href = 'habitaciones.html'> Continuar</a>";
         //header("Location: habitaciones.html");

     }

} else {
    echo "Problema con conexión";
}
?>
>>>>>>> c7fff8db10dec9b2bd9f5b6f0ae86fb06eae78bd
