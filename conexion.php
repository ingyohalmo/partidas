<?php
function dbConnect (){

    $servername = "localhost";
    $username = "sgp_user";
    $password = "56p_2016";
    $db = "sgp_system";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa"; 
    }
    catch(PDOException $e)
        {
        echo "Conexion fallida: " . $e->getMessage();
    }
    return $conn;
}
?>