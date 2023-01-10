<?php 
declare (strict_types = 1); // No recibe tipos de datos diferentes
include 'includes/header.php';

//ENCAPSULACION

//Definir una clase
class Producto {

    // Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    // Protected - Se puede acceder / modificar unicamente en la clase
    // Private - solo miembros de la misma clase pueden acceder a él
    public function __construct(protected string $nombre, public int $precio, public bool $disponible){
    }

    public function mostrarProducto() : void {
        //$this hace referencia al objeto creado (no se necesita declarar)
        echo "El producto es: ". $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre() : string{
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);
//$producto->mostrarProducto();
echo $producto->getNombre();
echo $producto->setNombre("Nuevo Nombre");

echo"<pre>";
var_dump($producto);
echo"</pre>";

$producto2 = new Producto('Monitor Curvo', 300, true);
// $producto2->mostrarProducto();
echo $producto2->getNombre();

// echo"<pre>";
// var_dump($producto2);
// echo"</pre>";

include 'includes/footer.php';