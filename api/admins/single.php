<?php

error_reporting(E_ALL);
ini_set('display_error', 1);

// Headers

Header('Access-Control-Allow-Origin: localhost');
Header('Content-Type: application/json');
Header('Access-Control-Allow-Method: POST');

// Including required files.
include_once('../../config/Database.php');
include_once('../../models/Producto.php');

// Connecting with database.

$database = new Database;
$db =  $database->connect();

$post = new Producto($db);

if(isset($_GET['id']))
{
    $data =  $post->read_single_producto($_GET['id']);
    
    if($data->rowCount())
    {
        $productos = [];

        // re-aggrange the productos data.
    
        while($row = $data->fetch(PDO::FETCH_OBJ))
        {
            $productos[$row->id] = [
                'id' => $row -> id,
                'codigo' => $row -> codigo,
                'texto' => $row -> texto,
                'slogan' => $row -> params,
                'marca' => $row -> marca,
                'familia' => $row -> familia,
                'otras_familias' => $row -> otras_familias,
                'alta' => $row -> alta,
                'descripcion_corta' => $row -> descripcion_corta,
                'descripcion_larga' => $row -> descripcion_larga,
                'venta' => $row -> venta,
                'descuento' => $row -> descuento,
                'venta1' => $row -> venta1,
                'descuento1' => $row -> descuento1,
                'venta2' => $row -> venta2,
                'descuento2' => $row -> descuento2,
                'venta3' => $row -> venta3,
                'descuento3' => $row -> descuento3,
                'venta4' => $row -> venta4,
                'descuento4' => $row -> descuento4,
                'venta5' => $row -> venta5,
                'descuento5' => $row -> descuento5,
                'venta6' => $row -> venta6,
                'descuento6' => $row -> descuento6,
                'existencia' => $row -> existencia,
                'iva' => $row -> iva,
                'tipo_producto' => $row -> tipo_producto,
                'mostrar' => $row -> mostrar,
                'raiz' => $row -> raiz,
                'vender' => $row -> vender,
                'peso' => $row -> peso,
                'maximo' => $row -> maximo,
                'destacado' => $row -> destacado,
                'grupo' => $row -> grupo,
                'peligroso' => $row -> peligroso,
                'modelo' => $row -> modelo,
                'matricula' => $row -> matricula,
                'modelo_vehiculo' => $row -> modelo_vehiculo,
                'voluminoso' => $row -> voluminoso,
                'color' => $row -> color,
                'minimo' => $row -> minimo,
                'oferta' => $row -> oferta,
                'limite' => $row -> limite,
                'corta_ingles' => $row -> corta_ingles,
                'larga_ingles' => $row -> larga_ingles,
                'bodega' => $row -> bodega,
                'unidadescaja' => $row -> unidadescaja,
                'origen' => $row -> origen,
                'categoria' => $row -> categoria,
                'longitu' => $row -> longitud,
            ];
        }
    
        echo json_encode($productos);
    }
    else
    {
        echo json_encode(['message' => ' No post data found']);
    }
}

