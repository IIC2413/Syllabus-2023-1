<?php 

try{
    require('data.php');

    $db = new PDO("pgsql:dbname=$databaseName; host=localhost;port=5432; user=$user; password=$password");
}
catch(Exception $e){
    echo "No se pudo conectar a la base de datos: $e";
}
?>