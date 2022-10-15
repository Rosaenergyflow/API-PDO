<?php
/**********************************************************
    UPDATE ADMIN   
***********************************************************/
error_reporting(E_ALL);
ini_set('display_error', 1);

// Headers

Header('Access-Control-Allow-Origin: localhost');
Header('Content-Type: application/json');
Header('Access-Control-Allow-Method: POST');

// Including required files.
include_once('../../config/Database.php');
include_once('../../models/Admins.php');

// Connecting with database.

$database = new Database;
$db =  $database->connect();

$post = new Admin($db);
$data = json_decode(file_get_contents("php://input"));


if(isset($data))
{
     // Updating post from user input.

    $params = [
        'id' => $row -> id,
        'correo' => $row -> correo,
        'usuario' => $row -> usuario,
        'clave' => $row -> clave,
    ];

    if($post->update($params))
    {
        echo json_encode(['message' => 'Admin Updated successfully']);
    }

}