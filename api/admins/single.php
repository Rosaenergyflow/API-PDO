<?php
/**********************************************************
    SINGLE ADMIN   
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

if(isset($_GET['id']))
{
    $data =  $post->read_single_admin($_GET['id']);
    
    if($data->rowCount())
    {
        $admin = [];

        // re-aggrange the admin data.
    
        while($row = $data->fetch(PDO::FETCH_OBJ))
        {
            $admin[$row->id] = [
                'id' => $row -> id,
                'correo' => $row -> correo,
                'usuario' => $row -> usuario,
                'clave' => $row -> clave,
            ];
        }
    
        echo json_encode($admin);
    }
    else
    {
        echo json_encode(['message' => ' No post data found']);
    }
}

