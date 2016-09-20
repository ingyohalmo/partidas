<?php
require('conexion.php');

$conn = dbConnect();
$sql = 'SELECT * FROM recurso';
$result = $conn->query($sql);
$rows = $result->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Aux</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    
      

    </body>
</html>