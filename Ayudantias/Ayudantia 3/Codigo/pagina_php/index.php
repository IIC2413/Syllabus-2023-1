<?php include('templates/header.html')?>

<body>
    <h1 align="center">
        Biblioteca Pokemon
    </h1>
    <p style="text-align:center;">
    Aqui encontraras toda la informacion necesaria de pokemones
    </p>

    <h3>
        ¿Quieres buscar un pokemon por nombre y/o tipo?
    </h3>

    <form align="center" action="consultas/consulta_tipo_nombre.php" method ="post">
        Nombre:
        <input type="text" name="nombre_pokemon">

        Tipo:
        <input type="text" name="tipo_elegido">
        <br/><br/>
        <input type="submit" value= "Buscar">
        
    </form>
</body>