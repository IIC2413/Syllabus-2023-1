<?php include('templates/header.html')?>

<body>
<?php
    require("../config/conexion.php");
    $tipo = $_POST['tipo_elegido'];
    $nombre = $_POST['nombre_pokemon'];

    $query ="SELECT id, nombre, tipo FROM pokemones WHERE tipo LIKE '%$tipo%' AND nombre LIKE '%$nombre%';"; 
    $result = $db -> prepare($query);
    $result -> execute();
    $pokemones = $result -> fetchAll();
    ?>

    <table>
        <tr>
            <th>ID </th>
            <th> NOMBRE</th>
            <th> TIPOs</th>
        </tr>

    <?php
    foreach($pokemones as $pokemon){
        echo "<tr> <td> $pokemon[0]</td> <td> $pokemon[1]</td> <td>$pokemon[2] </td> </tr>";
    }
    ?>

    </table>

<?php include('templates/footer.html')?>
