<?php
/*
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
*/
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

    <!-- Popup Windows Code -->
    <div class="david_pop-up" id="vent-prom">
            <div id="cerrar-ventana">
                <a href="javascript: cerrarVentana()"><img src="../img/cerrarVentana.png" alt=""></a>
            </div>
           <h3>Solicitar - Habitación Sencilla</h3><br>
           <div>
                <form action="gracias_reserva.php" method="get">
                    <input type="hidden" name="price" value="3500">
                    <input type="hidden" name="room_type" value="01">
                    <input type="hidden" name="reservation_number" value="<?php echo(rand(100000,99999999));?>"> 
                    <input type="hidden" name="room_number" value="<?php echo(rand(10,19));?>">  
                    Nombre registro: <input type="text" name="user_name" placeholder="Nombre Completo"><br>
                    Telefono: <input type="text" name="user_phone" placeholder="Telefono"><br> 
                    Fecha llegada: <input type="date" name="arrival_date" min="<?php echo date('Y-m-d'); ?>"><br>
                    Fecha salida: <input type="date" name="departure_date" min="<?php echo date('Y-m-d'); ?>"><br>
                    <button id="btnReservar">Confirmar</button>
                </form>
            </div>
        </div>

        <div class="david_pop-up" id="vent-prom-2">
            <div id="cerrar-ventana">
                <a href="javascript: cerrarVentana2()"><img src="../img/cerrarVentana.png" alt=""></a>
            </div>
            <h3>Solicitar - Habitación Doble</h3><br>
            <div>
                <form action="gracias_reserva.php" method="get">
                    <input type="hidden" name="price" value="5200">
                    <input type="hidden" name="room_type" value="02">
                    <input type="hidden" name="reservation_number" value="<?php echo(rand(100000,99999999));?>"> 
                    <input type="hidden" name="room_number" value="<?php echo(rand(10,19));?>">  
                    Nombre registro: <input type="text" name="user_name" placeholder="Full Name"><br>
                    Telefono: <input type="text" name="user_phone" placeholder="Telefono"><br> 
                    Fecha llegada: <input type="date" name="arrival_date" min="<?php echo date('Y-m-d'); ?>"><br>
                    Fecha salida: <input type="date" name="departure_date" min="<?php echo date('Y-m-d'); ?>"><br>
                    <button id="btnReservar">Confirmar</button>
                </form>
            </div>
        </div>

        <div class="david_pop-up" id="vent-prom-3">
            <div id="cerrar-ventana">
                <a href="javascript: cerrarVentana3()"><img src="../img/cerrarVentana.png" alt=""></a>
            </div>
            <h3>Solicitar - Habitación Jr. Suite</h3><br>
            <div>
                <form action="gracias_reserva.php" method="get">
                    <input type="hidden" name="price" value="6800">
                    <input type="hidden" name="room_type" value="03">
                    <input type="hidden" name="reservation_number" value="<?php echo(rand(100000,99999999));?>"> 
                    <input type="hidden" name="room_number" value="<?php echo(rand(10,19));?>"> 
                    Nombre registro: <input type="text" name="user_name" placeholder="Full Name"><br>
                    Telefono: <input type="text" name="user_phone" placeholder="Telefono"><br> 
                    Fecha llegada: <input type="date" name="arrival_date" min="<?php echo date('Y-m-d'); ?>"><br>
                    Fecha salida: <input type="date" name="departure_date" min="<?php echo date('Y-m-d'); ?>"><br>
                    <button id="btnReservar">Confirmar</button>
                </form>
            </div>
        </div>

        <div class="david_pop-up" id="vent-prom-4">
            <div id="cerrar-ventana">
                <a href="javascript: cerrarVentana4()"><img src="../img/cerrarVentana.png" alt=""></a>
            </div>
            <h3>Solicitar - Habitación Suite</h3><br>
            <div>
                <form action="gracias_reserva.php" method="get">
                    <input type="hidden" name="price" value="8200">
                    <input type="hidden" name="room_type" value="04">
                    <input type="hidden" name="reservation_number" value="<?php echo(rand(100000,99999999));?>"> 
                    <input type="hidden" name="room_number" value="<?php echo(rand(10,19));?>"> 
                    Nombre registro: <input type="text" name="user_name" placeholder="Full Name"><br>
                    Telefono: <input type="text" name="user_phone" placeholder="Telefono"><br> 
                    Fecha llegada: <input type="date" name="arrival_date" min="<?php echo date('Y-m-d'); ?>"><br>
                    Fecha salida: <input type="date" name="departure_date" min="<?php echo date('Y-m-d'); ?>"><br>
                    <button id="btnReservar">Confirmar</button>
                </form>
            </div>
        </div>
    <!-- End Popup Windows Code-->

    <section class="david_principal">
        <div style="width: 75%;">
            <strong style="margin: 5px;">Habitación Sencilla</strong>

            <div style="display: flex;">
                <div class="david_room_photo">
                    <img src="../img/cuarto_hotel2.jpg">
                </div>

                <div class="david_room_description" style="width: 55%;">
                    Descripción de la habitación
                    <p style="text-align: justify;">En la planta superior del hotel, una pequeña escalera le dará acceso a un remanso de paz ubicado debajo de la azotea. Desde la ventana de su cuarto de baño, podrá disfrutar de la vista de la hilera de techos parisinos y del Centro Pompidou. Ideal para una sola persona, con el mejor confort y la modernidad de sus instalaciones, podrá disfrutar del encanto de su decoración y su tranquilidad.</p>
                </div>
            </div>
        </div>

        <div class="david_room_price">
            <div style="margin-top: 10px; margin-left: 50px;">
                <strong>Precio</strong>
            </div>
            <div style="margin-top: 30px; margin-left: 50px;">
                <h3>$3,500</h3>
            </div>
            <div style="margin-top: 50px; margin-left: 50px;">
                <button id="btnReservar" onclick="location.href='javascript: abrirVentana()';">Solicitar</button>
            </div>
        </div>
    </section>

    <section class="david_principal">
        <div style="width: 75%;">
            <strong style="margin: 5px;">Habitación Doble</strong>

            <div style="display: flex;">
                <div class="david_room_photo">
                    <img src="../img/cuarto_hotel1.jpg">
                </div>

                <div class="david_room_description" style="width: 55%;">
                    Descripción de la habitación
                    <p style="text-align: justify;">Situada en el sexto piso, tapizada con una tela de Jouy romántica con colores brillantes, esta decoración atemporal y moderna le hará pasar una estancia agradable en un acogedor refugio para relajarse. Las excepcionales atenciones diseñadas especialmente para usted le proporcionarán el confort necesario para una perfecta relajación.</p>
                </div>
            </div>
        </div>

        <div class="david_room_price">
            <div style="margin-top: 10px; margin-left: 50px;">
                <strong>Precio</strong>
            </div>
            <div style="margin-top: 30px; margin-left: 50px;">
                <h3>$5,200</h3>
            </div>
            <div style="margin-top: 50px; margin-left: 50px;">
                <button id="btnReservar" onclick="location.href='javascript: abrirVentana()';">Solicitar</button>
            </div>
        </div>
    </section>

    <section class="david_principal">
        <div style="width: 75%;">
            <strong style="margin: 5px;">Habitación Jr. Suite</strong>

            <div style="display: flex;">
                <div class="david_room_photo">
                    <img src="../img/cuarto_hotel3.jpg">    
                </div>

                <div class="david_room_description" style="width: 55%;">
                    Descripción de la habitación
                    <p style="text-align: justify;">  
                        Esta Suite Junior está ampliamente distribuida con una zona de televisión, equipada con frigobar, un sillón love seat, Smart TV, así como 1/2 baño a la entrada, además de un comedor para 6 personas en el cual puede disfrutar de sus alimentos en la comodidad de la habitación. La suite es privilegiada con una hermosa vista de la zona ya que cuenta con una terraza. 2 habitaciones completas.
                    </p>
                </div>
            </div>
        </div>

        <div class="david_room_price">
            <div style="margin-top: 10px; margin-left: 50px;">
                <strong>Precio</strong>
            </div>
            <div style="margin-top: 30px; margin-left: 50px;">
                <h3>$6,800</h3>
            </div>
            <div style="margin-top: 50px; margin-left: 50px;">
                <button id="btnReservar" onclick="location.href='javascript: abrirVentana()';">Solicitar</button>
            </div>
        </div>
    </section>

    <section class="david_principal">
        <div style="width: 75%;">
            <strong style="margin: 5px;">Habitación Suite</strong>

            <div style="display: flex;">
                <div class="david_room_photo">
                    <img src="../img/cuarto_hotel4.jpg">
                </div>

                <div class="david_room_description" style="width: 55%;">
                    Descripción de la habitación
                    <p style="text-align: justify;">En un hermoso espacio, flanqueado por vigas gris perla, sus paredes de color soleado aportan un toque de luz que realza este pequeño apartamento y sus lujosos tejidos. Lujo y serenidad en un ambiente contemporáneo, todo está pensado para hacer su estancia inolvidable gracias a la modernidad de sus instalaciones.</p>
                </div>
            </div>
        </div>

        <div class="david_room_price">
            <div style="margin-top: 10px; margin-left: 50px;">
                <strong>Precio</strong>
            </div>
            <div style="margin-top: 30px; margin-left: 50px;">
                <h3>$8,200</h3>
            </div>
            <div style="margin-top: 50px; margin-left: 50px;">
                <button id="btnReservar" onclick="location.href='javascript: abrirVentana()';">Solicitar</button>
            </div>
        </div>
    </section>

    <footer>
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
    
    <script>
        function abrirVentana(){
            document.getElementById("vent-prom").style.display ="block";
        }
        function abrirVentana2(){
            document.getElementById("vent-prom-2").style.display ="block";
        }
        function abrirVentana3(){
            document.getElementById("vent-prom-3").style.display ="block";
        }
        function abrirVentana4(){
            document.getElementById("vent-prom-4").style.display ="block";
        }
        

        function cerrarVentana(){
            document.getElementById("vent-prom").style.display ="none";
        }
        function cerrarVentana2(){
            document.getElementById("vent-prom-2").style.display ="none";
        }
        function cerrarVentana3(){
            document.getElementById("vent-prom-3").style.display ="none";
        }
        function cerrarVentana4(){
            document.getElementById("vent-prom-4").style.display ="none";
        }

    </script>

</body>
</html>