<?php
/**********************************************************
    MOSTRAR ADMIN O ADMINS  
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
include_once('../../models/Admins.php');

// Connecting with database.

$database = new Database;
$db =  $database->connect();

$admin = new Admin($db);

$data = $admin->readAdmins();

// If there is admins in database.

if($data->rowCount())
{
    $admins = [];

    // re-aggrange the admins data.

    while($row = $data->fetch(PDO::FETCH_OBJ))
    {
        $admins[$row->id] = [
            'id' => $row -> id,
            'correo' => $row -> correo,
            'usuario' => $row -> usuario,
            'clave' => $row -> clave,
        ];
    }

    echo json_encode($admins);


}
else
{
    echo json_encode(['message' => ' No admins found']);
}