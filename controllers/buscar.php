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
if (mysqli_num_rows($result) >0) {
            if (mysqli_query($connection, $sqlquery)) {
                while($row = mysqli_fetch_array($result))
                    {
                        echo "Nombre: ",$row['reservacion_nombre'];
                        echo "Numero: ",$row['reservacion_numero'];
                        echo "Habitacion",$row['reservacion_habitacion'];
                        echo "Fecha de Ingreso: ",$row['reservacion_ingreso'];
                        echo "Fecha de Salida: ",$row['reservacion_salida'];
                        echo "Subtotal: ",$row['reservacion_subtotal'];
                        echo "Porcentaje Promocion: ",$row['reservacion_promocion'],"%";
                        echo "Costo total: ",$row['reservacion_total'];
                    }
              } else {
                echo "Error updating: ". mysqli_error($connection);
              }
              mysqli_close($connection); 
} else {
    echo "EMPTY TABLE";
}
?>