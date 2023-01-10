<?php include 'includes/header.php';
// POO CON MYSQLI

// Conectar a la BDD con Mysqli
$db = new mysqli('localhost', 'root', '', 'bienes_raices');

// Se crea el query
$query = "SELECT titulo, imagen from propiedades";

//Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

//Creamos la variable
$stmt->bind_result($titulo, $imagen);

//Asignamos el resultado
$stmt->fetch();

//Imprimir el resultado
while($stmt->fetch()):
    var_dump($titulo, $imagen);
    echo "<br>";
endwhile;

// while($row = $resultado->fetch_assoc()):
//     var_dump($row);
// endwhile;

// var_dump($resultado->fetch_assoc());

include 'includes/footer.php';