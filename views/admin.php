<?php 
$hostname = "127.0.0.1";
$hostuser = "root";
$hostpassword = "";
$hostdatabase = "hotel_che";
$connection = mysqli_connect($hostname,$hostuser,$hostpassword,$hostdatabase);


//Daniela







//Emanuel
    function connectedToDatabase() {
        return $connection;
    }

    function searchById($id) {
        $query = "SELECT * FROM usuarios WHERE usuarios_id = $id";
        return  mysqli_query($connection, $query);
    }

    function searchByEmail($email) {
        $query = "SELECT * FROM usuarios WHERE usuarios_correo = $email";
        return  mysqli_query($connection, $query);
    }

    function updatePasswordById($id, $password) {
        $query = "UPDATE usuarios SET usuarios_contra = $password WHERE id = $id";
        return mysqli_query($connection, $query);
    }
?>
