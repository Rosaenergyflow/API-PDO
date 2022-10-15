<?php
/////////////////////////////////////////////////////////
//////////////  MODELO PARA TABLA ADMIN  ////////////////
/////////////////////////////////////////////////////////

error_reporting(E_ALL);
ini_set('display_error', 1);

class Admin
{

    // Admin Properties.
    public $id;
    public $correo;
    public $usuario;
    public $clave;

    // Database Data.

    private $connection;
    private $table = 'admin';

    public function __construct($db)
    {
        $this->connection = $db;
    }

    // Method to read all the saved admins from database.

    public function readAdmins()
    {
        //Query for reading admins from table.

        $query = 'SELECT * FROM ' . $this->table;

        $admin = $this->connection->prepare($query);

        $admin->execute();

        return $admin;
    }

    // Method for reading single admin.

    public function read_single_admin($id)
    {
        $this->id = $id;

        //Query for reading admins from table.

        $query = 'SELECT * FROM ' . $this->table . ' WHERE ' . $id . ' = id';

        $admin = $this->connection->prepare($query);

        //$admin->execute([$this -> id]);
        $admin->bindValue(1, $this->id, PDO::PARAM_INT);
        $admin->execute();
        return $admin;
    }

    // Method to create new records.

    public function create_new_admin($params)
    {
        try
        {
            // Assigning values.
            $this->id = $params['id'];
            $this->codigo = $params['correo'];
            $this->texto = $params['usuario'];
            $this->slogan = $params['clave'];

            // Query to store new admin in database.

            $query = 'INSERT INTO ' . $this->table . '
                    SET
                    id = :id,
                    correo = :correo,
                    usuario = :usuario,
                    clave = :clave';

            $admin = $this->connection->prepare($query);

            $admin->binValue('id', $this->id);
            $admin->binValue('correo', $this->correo);
            $admin->binValue('usuario', $this->usuario);
            $admin->binValue('clave', $this->clave);

            // Query for updating existing record.

            $query = 'UPDATE ' . $this->table . '
              SET
              id = :id,
              correo = :correo,
              usuario = :usuario,
              clave = :clave';

            $admin = $this->connection->prepare($query);

            $admin->binValue('id', $this->id);
            $admin->binValue('correo', $this->correo);
            $admin->binValue('usuario', $this->usuario);
            $admin->binValue('clave', $this->clave);

            if ($admin->execute()) {
                return true;
            }

            return false;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Method to delete admin from database.

    public function destroy_admin($id)
    {
        try
        {
            // Assigning values.

            $this->id = $id;

            // Query for updating existing record.

            $query = 'DELETE FROM ' . $this->table . '
                   WHERE id = :id';

            $admin = $this->connection->prepare($query);

            $admin->bindValue('id', $this->id);

            if ($admin->execute()) {
                return true;
            }

            return false;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
