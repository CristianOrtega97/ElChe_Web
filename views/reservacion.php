<?php

$host_name = "127.0.0.1";
$host_user = "root";
$host_pass = "";
$database = "hotel_che";

$connection = mysqli_connect($host_name, $host_user, $host_pass, $database);

if ($connection) {
    echo "You're connected!";    
} else {
    echo "Sorry, NOT connected";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/slicknav.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <title>Reserva Ya!</title>
</head>
<body>
    <header class="site-header">
        <div class="contenedor">
            <div class="barra-navegacion">
                <div class="logo">
                <img src="../img/.jpg" alt="logo ">
                </div>

                <ul id="myDIV" class="menu-principal">
                    <li><a  href="promociones.html">Promociones</a></li>
                    <li><a  href="habitaciones.html">Habitaciones</a></li>
                    <li><a  href="nosotros.html">Nosotros</a></li>
                    <li><a  href="aviso.html">Aviso Privacidad</a></li>
                </ul>
            </div>
        </div>
    </header>

    <section class= "david_principal">
        Nombre del Cuarto
        <div class="david_room_info">
            <div class="david_photo_room">
                <img src="../img/cuarto_hotel1.jpg">
            </div>
            <div class="david_desc_room">
                Descripción
            </div>
            <div class="david_price_room">
                <div>
                Precios
                </div>
                    <a class="david_button_reserva" href="pagos.php" target="_blank" rel="nofollow noopener">Reserva YA!</a>
            </div>
        </div>
    </section>

    <section class= "david_principal">
        Nombre del Cuarto
        <div class="david_room_info">
            <div class="david_photo_room">
                <img src="../img/cuarto_hotel2.jpg">
            </div>
            <div class="david_desc_room">
                Descripción
            </div>
             <div class="david_price_room">
                Precios
                <a class="david_button_reserva" href="pagos.php" target="_blank" rel="nofollow noopener">Reserva YA!</a>
            </div>
        </div>
    </section>

    <section class= "david_principal">
        Nombre del Cuarto
        <div class="david_room_info">
            <div class="david_photo_room">
                <img src="../img/cuarto_hotel3.jpg">
            </div>
            <div class="david_desc_room">
                Descripción
            </div>
             <div class="david_price_room">
                Precios
                <a class="david_button_reserva" href="pagos.php" target="_blank" rel="nofollow noopener">Reserva YA!</a>

            </div>
        </div>
    </section>

    <section class= "david_principal">
        Nombre del Cuarto
        <div class="david_room_info">
            <div class="david_photo_room">
                <img src="../img/cuarto_hotel4.jpg">
            </div>
            <div class="david_desc_room">
                Descripción
            </div>
             <div class="david_price_room">
                Precios
                <a class="david_button_reserva" href="pagos.php" target="_blank" rel="nofollow noopener">Reserva YA!</a>

            </div>
        </div>
    </section>

    <footer>
        
    </footer>

    
</body>
</html>