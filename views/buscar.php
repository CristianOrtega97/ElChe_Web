<?php 
 $hostname = "127.0.0.1";
 $hostuser = "root";
 $hostpassword = "";
 $hostdatabase = "hotel_che";
 $connection = mysqli_connect($hostname,$hostuser,$hostpassword,$hostdatabase);
 $reservation_number = $_GET['reservation_number'];
 $sqlquery = "SELECT * FROM reservacion WHERE reservacion_numero = $reservation_number";
 $result = mysqli_query($connection,$sqlquery);

//Daniela


//Emanuel

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
        if (mysqli_num_rows($result) >0) {
            if (mysqli_query($connection, $sqlquery)) {
                while($row = mysqli_fetch_array($result))
                    {
                        echo  "<br>";
                        echo "Nombre: ",$row['reservacion_nombre']."<br>";
                        echo "Telefono: ",$row['reservacion_phone']."<br>";
                        echo "Numero: ",$row['reservacion_numero']."<br>";
                        echo "Habitacion",$row['reservacion_habitacion']."<br>";
                        echo "Fecha de Ingreso: ",$row['reservacion_ingreso']."<br>";
                        echo "Fecha de Salida: ",$row['reservacion_salida']."<br>";
                        echo "Subtotal: ","$",$row['reservacion_subtotal'],".00"."<br>";
                        echo "Porcentaje Promocion: ",$row['reservacion_promocion'],"0","%"."<br>";
                        echo "Costo total: ","$",$row['reservacion_total'],".00"."<br>";
                        echo  "<br>";
                        echo "<a href = 'habitaciones.html'>Regresar</a>";
                    }
              } else {
                echo "Error obtaining data: ". mysqli_error($connection);
              }
              mysqli_close($connection); 
} else {
    echo "NOT FOUND";
    echo "<a href = 'habitaciones.html'>Regresar</a>";
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