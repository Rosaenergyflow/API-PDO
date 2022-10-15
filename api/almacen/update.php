<?php

error_reporting(E_ALL);
ini_set('display_error', 1);

// Headers

Header('Access-Control-Allow-Origin: localhost');
Header('Content-Type: application/json');
Header('Access-Control-Allow-Method: POST');

// Including required files.
include_once('../../config/Database.php');
include_once('../../models/Almacen.php');

// Connecting with database.

$database = new Database;
$db =  $database->connect();

$post = new Almacen($db);
$data = json_decode(file_get_contents("php://input"));


if(isset($data))
{
     // Updating post from user input.

    $params = [
        'id' => $id -> id,
        'codigo' => $codigo -> codigo,
        'texto' => $texto -> texto,
        'slogan' => $params -> params,
        'marca' => $marca -> marca,
        'familia' => $familia -> familia,
        'otras_familias' => $otras_familias -> otras_familias,
        'alta' => $alta -> alta,
        'descripcion_corta' => $descripcion_corta -> descripcion_corta,
        'descripcion_larga' => $descripcion_larga -> descripcion_larga,
        'venta' => $venta -> venta,
        'descuento' => $descuento -> descuento,
        'venta1' => $venta1 -> venta1,
        'descuento1' => $descuento1 -> descuento1,
        'venta2' => $venta2 -> venta2,
        'descuento2' => $descuento2 -> descuento2,
        'venta3' => $venta3 -> venta3,
        'descuento3' => $descuento3 -> descuento3,
        'venta4' => $venta4 -> venta4,
        'descuento4' => $descuento4 -> descuento4,
        'venta5' => $venta5 -> venta5,
        'descuento5' => $descuento5 -> descuento5,
        'venta6' => $venta6 -> venta6,
        'descuento6' => $descuento6 -> descuento6,
        'existencia' => $existencia -> existencia,
        'iva' => $iva -> iva,
        'tipo_Producto' => $tipo_Producto -> tipo_Producto,
        'mostrar' => $mostrar -> mostrar,
        'raiz' => $raiz -> raiz,
        'vender' => $vender -> vender,
        'peso' => $peso -> peso,
        'maximo' => $maximo -> maximo,
        'destacado' => $destacado -> destacado,
        'grupo' => $grupo -> grupo,
        'peligroso' => $peligroso -> peligroso,
        'modelo' => $modelo -> modelo,
        'matricula' => $matricula -> matricula,
        'modelo_vehiculo' => $modelo_vehiculo -> modelo_vehiculo,
        'voluminoso' => $voluminoso -> voluminoso,
        'color' => $color -> color,
        'minimo' => $minimo -> minimo,
        'oferta' => $oferta -> oferta,
        'limite' => $limite -> limite,
        'corta_ingles' => $corta_ingles -> corta_ingles,
        'larga_ingles' => $larga_ingles -> larga_ingles,
        'bodega' => $bodega -> bodega,
        'unidadescaja' => $unidadescaja -> unidadescaja,
        'origen' => $origen -> origen,
        'categoria' => $categoria -> categoria,
        'longitu' => $longitud -> longitud
    ];

    if($post->update($params))
    {
        echo json_encode(['message' => 'Almacen Updated successfully']);
    }

}