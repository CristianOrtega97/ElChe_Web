<?php
$hostname = "127.0.0.1";
$hostuser = "root";
$hostpassword = "";
$hostdatabase = "hotel_che";

$connection = mysqli_connect($hostname,$hostuser,$hostpassword,$hostdatabase);

/*
if($connection){
    echo "You're connected";
}else{
    echo "Sorry, not connected";
}*/

//Get data for reservation form";
if ($connection) {
$user_name = $_GET['user_name'];
$numeroReservacion = $_GET['reservation_number'];
$numHabitacion = $_GET['room_number'];
$tipo = $_GET['room_type'];
$arrival = $_GET['arrival_date'];
$departure = $_GET['departure_date'];
$room_type = $_GET['room_type'];
$price = $_GET['price'];
$user_phone = $_GET['user_phone'];
$promocion = 0;

$insertarReservacion = "INSERT INTO reservacion (reservacion_nombre,reservacion_phone, reservacion_numero, 
    reservacion_habitacion, reservacion_habitacion_tipo, reservacion_ingreso, reservacion_salida,
    reservacion_subtotal, reservacion_promocion, reservacion_total)
    VALUES ('$user_name','$user_phone', '$numeroReservacion', '$numHabitacion', '$tipo', '$arrival', '$departure', '$price', '$promocion', '$price')";
    //Ejecutar consulta
    }
 else {
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
        echo "Nombre: ".$user_name;
        echo "<br>";
        echo "Numero: ".$user_phone;
        echo "<br>";
        echo "Fecha Llegada: ".$arrival;
        echo "<br>";
        echo "Fecha Salida: ".$departure;
        echo "<br>";
        echo "Su número de reservación es: "."<b>".$numeroReservacion."</b>";
        $resultado = mysqli_query($connection,$insertarReservacion);
        if(!$resultado){
            echo '<script>alert("Error al registrar");</script>';
            echo "<a href = 'habitaciones.html'>Regresar</a>";
    
        }else{
            echo '<script>alert("Solicitud guardada con exito");</script>';
            echo '<script>alert("En 24 hrs nuestro equipo se contactará con usted para confirmar la reservación.");</script>';
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