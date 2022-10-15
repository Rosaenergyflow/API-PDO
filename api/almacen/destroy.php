<?php

error_reporting(E_ALL);
ini_set('display_error', 1);

// Headers

Header('Access-Control-Allow-Origin: localhost');
Header('Content-Type: application/json');
Header('Access-Control-Allow-Method: POST');

// Including required files.
include_once('../../config/Database.php');
include_once('../../models/Post.php');

// Connecting with database.

$database = new Database;
$db =  $database->connect();

$almacen = new Almacen($db);
$data = json_decode(file_get_contents("php://input"));


if(isset($data))
{
     // Deleting almacen from user input.

    if($almacen->destroy_almacen($data->id))
    {
        echo json_encode(['message' => 'Post Deleted successfully']);
    }
}