<?php

/********************************************************
    MODELO PARA TABLA ALMACEN        
    (Tabla donde estan los almacen)
*********************************************************/



error_reporting(E_ALL);
ini_set('display_error', 1);


class Almacen{
    
    // Almacen Properties.
    public $id;  
    public $codigo;  
    public $texto;  
    public $slogan;  
    public $marca;  
    public $familia;  
    public $otras_familias;  
    public $alta;  
    public $descripcion_corta;  
    public $descripcion_larga;  
    public $venta;  
    public $descuento;  
    public $venta1;  
    public $descuento1;  
    public $venta2;  
    public $descuento2;  
    public $venta3;  
    public $descuento3;  
    public $venta4;  
    public $descuento4;  
    public $venta5;  
    public $descuento5;  
    public $venta6;  
    public $descuento6;  
    public $existencia;  
    public $iva;  
    public $tipo_almacen;  
    public $mostrar;  
    public $raiz;  
    public $vender;  
    public $peso;  
    public $maximo;  
    public $destacado;  
    public $grupo;  
    public $peligroso;  
    public $modelo;  
    public $matricula;  
    public $modelo_vehiculo;  
    public $voluminoso;  
    public $color;  
    public $minimo;  
    public $oferta;  
    public $limite;  
    public $corta_ingles;  
    public $larga_ingles;  
    public $bodega;  
    public $unidadescaja;  
    public $origen;  
    public $categoria;  
    public $longitud;  


    // Database Data.

    private $connection;
    private $table = 'almacen';

    public function __construct($db)
    {
        $this -> connection = $db;
    }


    // Method to read all the saved almacen from database.

    public function readAlmacen()
    {
        //Query for reading almacen from table.
        
        $query = 'SELECT * FROM '.$this -> table ;

        $almacen = $this -> connection->prepare($query);

        $almacen->execute();

        return $almacen;
    }


    // Method for reading single almacen.

    public function read_single_almacen($id)
    {
        $this -> id = $id;

        //Query for reading almacen from table.
        
        $query = 'SELECT * FROM '.$this -> table.' WHERE '.$id.' = id';

        $almacen = $this -> connection->prepare($query);

        //$almacen->execute([$this -> id]);
        $almacen->bindValue(1, $this -> id, PDO::PARAM_INT);
        $almacen->execute();
        return $almacen;
    }

    // Method to create new records.

    public function create_new_almacen($params)
    {
        try
        {
            // Assigning values.
            $this -> id = $params['id'];
            $this -> codigo = $params['codigo'];
            $this -> texto = $params['texto'];
            $this -> slogan = $params['params'];
            $this -> marca = $params['marca'];
            $this -> familia = $params['familia'];
            $this -> otras_familias = $params['otras_familias'];
            $this -> alta = $params['alta'];
            $this -> descripcion_corta = $params['descripcion_corta'];
            $this -> descripcion_larga = $params['descripcion_larga'];
            $this -> venta = $params['venta'];
            $this -> descuento = $params['descuento'];
            $this -> venta1 = $params['venta1'];
            $this -> descuento1 = $params['descuento1'];
            $this -> venta2 = $params['venta2'];
            $this -> descuento2 = $params['descuento2'];
            $this -> venta3 = $params['venta3'];
            $this -> descuento3 = $params['descuento3'];
            $this -> venta4 = $params['venta4'];
            $this -> descuento4 = $params['descuento4'];
            $this -> venta5 = $params['venta5'];
            $this -> descuento5 = $params['descuento5'];
            $this -> venta6 = $params['venta6'];
            $this -> descuento6 = $params['descuento6'];
            $this -> existencia = $params['existencia'];
            $this -> iva = $params['iva'];
            $this -> tipo_almacen = $params['tipo_almacen'];
            $this -> mostrar = $params['mostrar'];
            $this -> raiz = $params['raiz'];
            $this -> vender = $params['vender'];
            $this -> peso = $params['peso'];
            $this -> maximo = $params['maximo'];
            $this -> destacado = $params['destacado'];
            $this -> grupo = $params['grupo'];
            $this -> peligroso = $params['peligroso'];
            $this -> modelo = $params['modelo'];
            $this -> matricula = $params['matricula'];
            $this -> modelo_vehiculo = $params['modelo_vehiculo'];
            $this -> voluminoso = $params['voluminoso'];
            $this -> color = $params['color'];
            $this -> minimo = $params['minimo'];
            $this -> oferta = $params['oferta'];
            $this -> limite = $params['limite'];
            $this -> corta_ingles = $params['corta_ingles'];
            $this -> larga_ingles = $params['larga_ingles'];
            $this -> bodega = $params['bodega'];
            $this -> unidadescaja = $params['unidadescaja'];
            $this -> origen = $params['origen'];
            $this -> categoria = $params['categoria'];
            $this -> longitud= $params['longitud'];

            // Query to store new almacen in database.

            $query = 'INSERT INTO '. $this -> table .'
                    SET 
                    id = :id,
                    codigo = :codigo,
                    texto = :texto,
                    slogan = :slogan,
                    marca = :marca,
                    familia = :familia,
                    otras_familias = :otras_familias,
                    alta = :alta,
                    descripcion_corta = :descripcion_corta,
                    descripcion_larga = :descripcion_larga,
                    venta = :venta,
                    descuento = :descuento,
                    venta1 = :venta1,
                    descuento1 = :descuento1,
                    venta2 = :venta2,
                    descuento2 = :descuento2,
                    venta3 = :venta3,
                    descuento3 = :descuento3,
                    venta4 = :venta4,
                    descuento4 = :descuento4,
                    venta5 = :venta5,
                    descuento5 = :descuento5,
                    venta6 = :venta6,
                    descuento6 = :descuento6,
                    existencia = :existencia,
                    iva = :iva,
                    tipo_almacen = :tipo_almacen,
                    mostrar = :mostrar,
                    raiz = :raiz,
                    vender = :vender,
                    peso = :peso,
                    maximo = :maximo,
                    destacado = :destacado,
                    grupo = :grupo,
                    peligroso = :peligroso,
                    modelo = :modelo,
                    matricula = :matricula,
                    modelo_vehiculo = :modelo_vehiculo,
                    voluminoso = :voluminoso,
                    color = :color,
                    minimo = :minimo,
                    oferta = :oferta,
                    limite = :limite,
                    corta_ingles = :corta_ingles,
                    larga_ingles = :larga_ingles,
                    bodega = :bodega,
                    unidadescaja = :unidadescaja,
                    origen = :origen,
                    categoria = :categoria,
                    longitud= :longitud';
            
            $almacen = $this -> connection->prepare($query);

            $almacen->binValue('id' , $this -> id);
            $almacen->binValue('codigo' , $this -> codigo);
            $almacen->binValue('texto' , $this -> texto);
            $almacen->binValue('slogan' , $this -> slogan);
            $almacen->binValue('marca' , $this -> marca);
            $almacen->binValue('familia' , $this -> familia);
            $almacen->binValue('otras_familias' , $this -> otras_familias);
            $almacen->binValue('alta' , $this -> alta);
            $almacen->binValue('descripcion_corta' , $this -> descripcion_corta);
            $almacen->binValue('descripcion_larga' , $this -> descripcion_larga);
            $almacen->binValue('venta' , $this -> venta);
            $almacen->binValue('descuento' , $this -> descuento);
            $almacen->binValue('venta1' , $this -> venta1);
            $almacen->binValue('descuento1' , $this -> descuento1);
            $almacen->binValue('venta2' , $this -> venta2);
            $almacen->binValue('descuento2' , $this -> descuento2);
            $almacen->binValue('venta3' , $this -> venta3);
            $almacen->binValue('descuento3' , $this -> descuento3);
            $almacen->binValue('venta4' , $this -> venta4);
            $almacen->binValue('descuento4' , $this -> descuento4);
            $almacen->binValue('venta5' , $this -> venta5);
            $almacen->binValue('descuento5' , $this -> descuento5);
            $almacen->binValue('venta6' , $this -> venta6);
            $almacen->binValue('descuento6' , $this -> descuento6);
            $almacen->binValue('existencia' , $this -> existencia);
            $almacen->binValue('iva' , $this -> iva);
            $almacen->binValue('tipo_almacen' , $this -> tipo_almacen);
            $almacen->binValue('mostrar' , $this -> mostrar);
            $almacen->binValue('raiz' , $this ->  raiz);
            $almacen->binValue('vender' , $this -> vender);
            $almacen->binValue('peso' , $this ->  peso);
            $almacen->binValue('maximo' , $this -> maximo);
            $almacen->binValue('destacado' , $this -> destacado);
            $almacen->binValue('grupo' , $this -> grupo);
            $almacen->binValue('peligroso' , $this -> peligroso);
            $almacen->binValue('modelo' , $this -> modelo);
            $almacen->binValue('matricula' , $this -> matricula);
            $almacen->binValue('modelo_vehiculo' , $this -> modelo_vehiculo);
            $almacen->binValue('voluminoso' , $this -> voluminoso);
            $almacen->binValue('color' , $this -> color);
            $almacen->binValue('minimo' , $this -> minimo);
            $almacen->binValue('oferta' , $this -> oferta);
            $almacen->binValue('limite' , $this -> limite);
            $almacen->binValue('corta_ingles' , $this -> corta_ingles);
            $almacen->binValue('larga_ingles' , $this -> larga_ingles);
            $almacen->binValue('bodega' , $this -> bodega);
            $almacen->binValue('unidadescaja' , $this -> unidadescaja);
            $almacen->binValue('origen' , $this -> origen);
            $almacen->binValue('categoria' , $this -> categoria);
            $almacen->binValue('longitud' , $this -> longitud);

            if($almacen->execute())
            {
                return true;
            }

            return false;

        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    // Method for updating almacen.

    public function update($params)
    {
        try
        {
              // Assigning values.

              $this -> id = $params['id'];
            $this -> codigo = $params['codigo'];
            $this -> texto = $params['texto'];
            $this -> slogan = $params['params'];
            $this -> marca = $params['marca'];
            $this -> familia = $params['familia'];
            $this -> otras_familias = $params['otras_familias'];
            $this -> alta = $params['alta'];
            $this -> descripcion_corta = $params['descripcion_corta'];
            $this -> descripcion_larga = $params['descripcion_larga'];
            $this -> venta = $params['venta'];
            $this -> descuento = $params['descuento'];
            $this -> venta1 = $params['venta1'];
            $this -> descuento1 = $params['descuento1'];
            $this -> venta2 = $params['venta2'];
            $this -> descuento2 = $params['descuento2'];
            $this -> venta3 = $params['venta3'];
            $this -> descuento3 = $params['descuento3'];
            $this -> venta4 = $params['venta4'];
            $this -> descuento4 = $params['descuento4'];
            $this -> venta5 = $params['venta5'];
            $this -> descuento5 = $params['descuento5'];
            $this -> venta6 = $params['venta6'];
            $this -> descuento6 = $params['descuento6'];
            $this -> existencia = $params['existencia'];
            $this -> iva = $params['iva'];
            $this -> tipo_almacen = $params['tipo_almacen'];
            $this -> mostrar = $params['mostrar'];
            $this -> raiz = $params['raiz'];
            $this -> vender = $params['vender'];
            $this -> peso = $params['peso'];
            $this -> maximo = $params['maximo'];
            $this -> destacado = $params['destacado'];
            $this -> grupo = $params['grupo'];
            $this -> peligroso = $params['peligroso'];
            $this -> modelo = $params['modelo'];
            $this -> matricula = $params['matricula'];
            $this -> modelo_vehiculo = $params['modelo_vehiculo'];
            $this -> voluminoso = $params['voluminoso'];
            $this -> color = $params['color'];
            $this -> minimo = $params['minimo'];
            $this -> oferta = $params['oferta'];
            $this -> limite = $params['limite'];
            $this -> corta_ingles = $params['corta_ingles'];
            $this -> larga_ingles = $params['larga_ingles'];
            $this -> bodega = $params['bodega'];
            $this -> unidadescaja = $params['unidadescaja'];
            $this -> origen = $params['origen'];
            $this -> categoria = $params['categoria'];
            $this -> longitud= $params['longitud'];


              // Query for updating existing record.

              $query = 'UPDATE '.$this -> table.' 
                SET
                id = :id,
                codigo = :codigo,
                texto = :texto,
                slogan = :slogan,
                marca = :marca,
                familia = :familia,
                otras_familias = :otras_familias,
                alta = :alta,
                descripcion_corta = :descripcion_corta,
                descripcion_larga = :descripcion_larga,
                venta = :venta,
                descuento = :descuento,
                venta1 = :venta1,
                descuento1 = :descuento1,
                venta2 = :venta2,
                descuento2 = :descuento2,
                venta3 = :venta3,
                descuento3 = :descuento3,
                venta4 = :venta4,
                descuento4 = :descuento4,
                venta5 = :venta5,
                descuento5 = :descuento5,
                venta6 = :venta6,
                descuento6 = :descuento6,
                existencia = :existencia,
                iva = :iva,
                tipo_almacen = :tipo_almacen,
                mostrar = :mostrar,
                raiz = :raiz,
                vender = :vender,
                peso = :peso,
                maximo = :maximo,
                destacado = :destacado,
                grupo = :grupo,
                peligroso = :peligroso,
                modelo = :modelo,
                matricula = :matricula,
                modelo_vehiculo = :modelo_vehiculo,
                voluminoso = :voluminoso,
                color = :color,
                minimo = :minimo,
                oferta = :oferta,
                limite = :limite,
                corta_ingles = :corta_ingles,
                larga_ingles = :larga_ingles,
                bodega = :bodega,
                unidadescaja = :unidadescaja,
                origen = :origen,
                categoria = :categoria,
                longitud= :longitud';

              $almacen = $this -> connection->prepare($query);

              $almacen->binValue('id' , $this -> id);
              $almacen->binValue('codigo' , $this -> codigo);
              $almacen->binValue('texto' , $this -> texto);
              $almacen->binValue('slogan' , $this -> slogan);
              $almacen->binValue('marca' , $this -> marca);
              $almacen->binValue('familia' , $this -> familia);
              $almacen->binValue('otras_familias' , $this -> otras_familias);
              $almacen->binValue('alta' , $this -> alta);
              $almacen->binValue('descripcion_corta' , $this -> descripcion_corta);
              $almacen->binValue('descripcion_larga' , $this -> descripcion_larga);
              $almacen->binValue('venta' , $this -> venta);
              $almacen->binValue('descuento' , $this -> descuento);
              $almacen->binValue('venta1' , $this -> venta1);
              $almacen->binValue('descuento1' , $this -> descuento1);
              $almacen->binValue('venta2' , $this -> venta2);
              $almacen->binValue('descuento2' , $this -> descuento2);
              $almacen->binValue('venta3' , $this -> venta3);
              $almacen->binValue('descuento3' , $this -> descuento3);
              $almacen->binValue('venta4' , $this -> venta4);
              $almacen->binValue('descuento4' , $this -> descuento4);
              $almacen->binValue('venta5' , $this -> venta5);
              $almacen->binValue('descuento5' , $this -> descuento5);
              $almacen->binValue('venta6' , $this -> venta6);
              $almacen->binValue('descuento6' , $this -> descuento6);
              $almacen->binValue('existencia' , $this -> existencia);
              $almacen->binValue('iva' , $this -> iva);
              $almacen->binValue('tipo_almacen' , $this -> tipo_almacen);
              $almacen->binValue('mostrar' , $this -> mostrar);
              $almacen->binValue('raiz' , $this ->  raiz);
              $almacen->binValue('vender' , $this -> vender);
              $almacen->binValue('peso' , $this ->  peso);
              $almacen->binValue('maximo' , $this -> maximo);
              $almacen->binValue('destacado' , $this -> destacado);
              $almacen->binValue('grupo' , $this -> grupo);
              $almacen->binValue('peligroso' , $this -> peligroso);
              $almacen->binValue('modelo' , $this -> modelo);
              $almacen->binValue('matricula' , $this -> matricula);
              $almacen->binValue('modelo_vehiculo' , $this -> modelo_vehiculo);
              $almacen->binValue('voluminoso' , $this -> voluminoso);
              $almacen->binValue('color' , $this -> color);
              $almacen->binValue('minimo' , $this -> minimo);
              $almacen->binValue('oferta' , $this -> oferta);
              $almacen->binValue('limite' , $this -> limite);
              $almacen->binValue('corta_ingles' , $this -> corta_ingles);
              $almacen->binValue('larga_ingles' , $this -> larga_ingles);
              $almacen->binValue('bodega' , $this -> bodega);
              $almacen->binValue('unidadescaja' , $this -> unidadescaja);
              $almacen->binValue('origen' , $this -> origen);
              $almacen->binValue('categoria' , $this -> categoria);
              $almacen->binValue('longitud' , $this -> longitud);

              if($almacen->execute())
              {
                  return true;
              }

              return false;
        }
        catch(PDOException  $e)
        {
            echo $e->getMessage();
        }
    }

    // Method to delete almacen from database.

    public function destroy_almacen($id)
    {
        try
        {
              // Assigning values.

              $this -> id = $id;

              // Query for updating existing record.

              $query = 'DELETE FROM '.$this -> table.' 
                   WHERE id = :id';

              $almacen = $this -> connection->prepare($query);

              $almacen->bindValue('id', $this -> id);
              
              if($almacen->execute())
              {
                  return true;
              }

              return false;
        }
        catch(PDOException  $e)
        {
            echo $e->getMessage();
        } 
    }
}