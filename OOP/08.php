<?php include 'includes/header.php';

require 'vendor/autoload.php'; // vendor se encarga de inlcuir todas las liberías o archivos que se necesiten

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes; // namespace
use App\Detalles;
use Firebase\JWT\JWT;

// //Incluir las otras clases
// function mi_autoload($clase) { // LLama a la función según la vaya requiriendo sin usar requires.
//     $partes = explode('\\', $clase);
//     require __DIR__ . '/clases/' . $partes[1] . '.php';
// }

// spl_autoload_register('mi_autoload');


$detalles = new Detalles(); 
$clientes = new Clientes(); // Se llaman igual pero sus nombres no chocan por el namespace creado en el archivo externo


include 'includes/footer.php';