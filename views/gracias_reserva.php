<?php

$host_name = "127.0.0.1";
$host_user = "root";
$host_pass = "";
$database = "hotel_elche";

$connection = mysqli_connect($host_name, $host_user, $host_pass, $database);

/*if($connection){
    echo "You're connected";
}else{
    echo "Sorry, not connected";
}

//Get data for reservation form";
/*$user_name = $_GET['user_name'];
$arrival = $_GET['arrival_date'];
$departure = $_GET['departure_date'];


$sql = "INSERT INTO reservacion ("
*/

$user_name = $_GET['user_name'];
$numeroReservacion = rand(100000,99999999);
$numHabitacion = rand(10,19);
$arrival = $_GET['arrival_date'];
$departure = $_GET['departure_date'];

$sql = "INSERT INTO reservacion VALUES ('$user_name', '$numeroReservacion', '$numHabitacion', '1', '$arrival', '$departure', '1000', '0', '1000')";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
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
                    <li><a  href="/views/habitaciones.html">Habitaciones</a></li>
                    <li><a  href="nosotros.html">Nosotros</a></li>
                    <li><a  href="../views/aviso.html">Aviso Privacidad</a></li>
		    <li><a  href="cuenta-admin.html">Buscar</a></li>
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
        echo "Fecha Llegada: ".$arrival;
        echo "<br>";
        echo "Fecha Salida: ".$departure;
        echo "<br>";
        echo "Su número de reservación es: "."<b>".$numeroReservacion."</b>";
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