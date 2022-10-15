<?php
/**********************************************************
    INSERT ADMIN O ADMINS  
    (administradores de la tienda)
***********************************************************/
error_reporting(E_ALL);
ini_set('display_error', 1);

// Headers

Header('Access-Control-Allow-Origin: localhost');
Header('Content-Type: application/json');
Header('Access-Control-Allow-Method: POST');

// Including required files.
include_once('../../config/Database.php');
include_once('../../models/Productos.php');

// Connecting with database.

$database = new Database;
$db =  $database->connect();

$producto = new Producto($db);
$data = json_decode(file_get_contents("php://input"));

if(count($_POST)){
    

    // Creating new producto from user input.

    $params = [
        'id' => $_POST['id'],
        'codigo' => $_POST['codigo'],
        'texto' => $_POST['texto'],
        'slogan' => $_POST['params'],
        'marca' => $_POST['marca'],
        'familia' => $_POST['familia'],
        'otras_familias' => $_POST['otras_familias'],
        'alta' => $_POST['alta'],
        'descripcion_corta' => $_POST['descripcion_corta'],
        'descripcion_larga' => $_POST['descripcion_larga'],
        'venta' => $_POST['venta'],
        'descuento' => $_POST['descuento'],
        'venta1' => $_POST['venta1'],
        'descuento1' => $_POST['descuento1'],
        'venta2' => $_POST['venta2'],
        'descuento2' => $_POST['descuento2'],
        'venta3' => $_POST['venta3'],
        'descuento3' => $_POST['descuento3'],
        'venta4' => $_POST['venta4'],
        'descuento4' => $_POST['descuento4'],
        'venta5' => $_POST['venta5'],
        'descuento5' => $_POST['descuento5'],
        'venta6' => $_POST['venta6'],
        'descuento6' => $_POST['descuento6'],
        'existencia' => $_POST['existencia'],
        'iva' => $_POST['iva'],
        'tipo_producto' => $_POST['tipo_producto'],
        'mostrar' => $_POST['mostrar'],
        'raiz' => $_POST['raiz'],
        'vender' => $_POST['vender'],
        'peso' => $_POST['peso'],
        'maximo' => $_POST['maximo'],
        'destacado' => $_POST['destacado'],
        'grupo' => $_POST['grupo'],
        'peligroso' => $_POST['peligroso'],
        'modelo' => $_POST['modelo'],
        'matricula' => $_POST['matricula'],
        'modelo_vehiculo' => $_POST['modelo_vehiculo'],
        'voluminoso' => $_POST['voluminoso'],
        'color' => $_POST['color'],
        'minimo' => $_POST['minimo'],
        'oferta' => $_POST['oferta'],
        'limite' => $_POST['limite'],
        'corta_ingles' => $_POST['corta_ingles'],
        'larga_ingles' => $_POST['larga_ingles'],
        'bodega' => $_POST['bodega'],
        'unidadescaja' => $_POST['unidadescaja'],
        'origen' => $_POST['origen'],
        'categoria' => $_POST['categoria'],
        'longitud'=> $_POST['longitud'],
    ];

    if($producto->create_new_producto($params))
    {
        echo json_encode(['message' => 'Productos added successfully']);
    }
}
else if(isset($data))
{
     // Creating new producto from user input.

     $params = [
        'id' => $data -> id,
        'codigo' => $data -> codigo,
        'texto' => $data -> texto,
        'slogan' => $data -> params,
        'marca' => $data -> marca,
        'familia' => $data -> familia,
        'otras_familias' => $data -> otras_familias,
        'alta' => $data -> alta,
        'descripcion_corta' => $data -> descripcion_corta,
        'descripcion_larga' => $data -> descripcion_larga,
        'venta' => $data -> venta,
        'descuento' => $data -> descuento,
        'venta1' => $data -> venta1,
        'descuento1' => $data -> descuento1,
        'venta2' => $data -> venta2,
        'descuento2' => $data -> descuento2,
        'venta3' => $data -> venta3,
        'descuento3' => $data -> descuento3,
        'venta4' => $data -> venta4,
        'descuento4' => $data -> descuento4,
        'venta5' => $data -> venta5,
        'descuento5' => $data -> descuento5,
        'venta6' => $data -> venta6,
        'descuento6' => $data -> descuento6,
        'existencia' => $data -> existencia,
        'iva' => $data -> iva,
        'tipo_producto' => $data -> tipo_producto,
        'mostrar' => $data -> mostrar,
        'raiz' => $data -> raiz,
        'vender' => $data -> vender,
        'peso' => $data -> peso,
        'maximo' => $data -> maximo,
        'destacado' => $data -> destacado,
        'grupo' => $data -> grupo,
        'peligroso' => $data -> peligroso,
        'modelo' => $data -> modelo,
        'matricula' => $data -> matricula,
        'modelo_vehiculo' => $data -> modelo_vehiculo,
        'voluminoso' => $data -> voluminoso,
        'color' => $data -> color,
        'minimo' => $data -> minimo,
        'oferta' => $data -> oferta,
        'limite' => $data -> limite,
        'corta_ingles' => $data -> corta_ingles,
        'larga_ingles' => $data -> larga_ingles,
        'bodega' => $data -> bodega,
        'unidadescaja' => $data -> unidadescaja,
        'origen' => $data -> origen,
        'categoria' => $data -> categoria,
        'longitu' => $data -> longitud,
    ];

    if($producto->create_new_producto($params))
    {
        echo json_encode(['message' => 'Productos added successfully']);
    }
}