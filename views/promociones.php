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