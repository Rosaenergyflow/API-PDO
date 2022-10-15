<?php
/////////////////////////////////////////////////////////
//////////////  MODELO PARA TABLA ALMACEN  //////////////
/////////////////////////////////////////////////////////


error_reporting(E_ALL);
ini_set('display_error', 1);


class Producto{
    
    // Producto Properties.
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
    public $tipo_producto;  
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


    // Method to read all the saved productos from database.

    public function readProductos()
    {
        //Query for reading productos from table.
        
        $query = 'SELECT * FROM '.$this -> table ;

        $producto = $this -> connection->prepare($query);

        $producto->execute();

        return $producto;
    }


    // Method for reading single producto.

    public function read_single_producto($id)
    {
        $this -> id = $id;

        //Query for reading productos from table.
        
        $query = 'SELECT * FROM '.$this -> table.' WHERE '.$id.' = id';

        $producto = $this -> connection->prepare($query);

        //$producto->execute([$this -> id]);
        $producto->bindValue(1, $this -> id, PDO::PARAM_INT);
        $producto->execute();
        return $producto;
    }

    // Method to create new records.

    public function create_new_producto($params)
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
            $this -> tipo_producto = $params['tipo_producto'];
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

            // Query to store new producto in database.

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
                    tipo_producto = :tipo_producto,
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
            
            $producto = $this -> connection->prepare($query);

            $producto->binValue('id' , $this -> id);
            $producto->binValue('codigo' , $this -> codigo);
            $producto->binValue('texto' , $this -> texto);
            $producto->binValue('slogan' , $this -> slogan);
            $producto->binValue('marca' , $this -> marca);
            $producto->binValue('familia' , $this -> familia);
            $producto->binValue('otras_familias' , $this -> otras_familias);
            $producto->binValue('alta' , $this -> alta);
            $producto->binValue('descripcion_corta' , $this -> descripcion_corta);
            $producto->binValue('descripcion_larga' , $this -> descripcion_larga);
            $producto->binValue('venta' , $this -> venta);
            $producto->binValue('descuento' , $this -> descuento);
            $producto->binValue('venta1' , $this -> venta1);
            $producto->binValue('descuento1' , $this -> descuento1);
            $producto->binValue('venta2' , $this -> venta2);
            $producto->binValue('descuento2' , $this -> descuento2);
            $producto->binValue('venta3' , $this -> venta3);
            $producto->binValue('descuento3' , $this -> descuento3);
            $producto->binValue('venta4' , $this -> venta4);
            $producto->binValue('descuento4' , $this -> descuento4);
            $producto->binValue('venta5' , $this -> venta5);
            $producto->binValue('descuento5' , $this -> descuento5);
            $producto->binValue('venta6' , $this -> venta6);
            $producto->binValue('descuento6' , $this -> descuento6);
            $producto->binValue('existencia' , $this -> existencia);
            $producto->binValue('iva' , $this -> iva);
            $producto->binValue('tipo_producto' , $this -> tipo_producto);
            $producto->binValue('mostrar' , $this -> mostrar);
            $producto->binValue('raiz' , $this ->  raiz);
            $producto->binValue('vender' , $this -> vender);
            $producto->binValue('peso' , $this ->  peso);
            $producto->binValue('maximo' , $this -> maximo);
            $producto->binValue('destacado' , $this -> destacado);
            $producto->binValue('grupo' , $this -> grupo);
            $producto->binValue('peligroso' , $this -> peligroso);
            $producto->binValue('modelo' , $this -> modelo);
            $producto->binValue('matricula' , $this -> matricula);
            $producto->binValue('modelo_vehiculo' , $this -> modelo_vehiculo);
            $producto->binValue('voluminoso' , $this -> voluminoso);
            $producto->binValue('color' , $this -> color);
            $producto->binValue('minimo' , $this -> minimo);
            $producto->binValue('oferta' , $this -> oferta);
            $producto->binValue('limite' , $this -> limite);
            $producto->binValue('corta_ingles' , $this -> corta_ingles);
            $producto->binValue('larga_ingles' , $this -> larga_ingles);
            $producto->binValue('bodega' , $this -> bodega);
            $producto->binValue('unidadescaja' , $this -> unidadescaja);
            $producto->binValue('origen' , $this -> origen);
            $producto->binValue('categoria' , $this -> categoria);
            $producto->binValue('longitud' , $this -> longitud);

            if($producto->execute())
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

    // Method for updating productos.

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
            $this -> tipo_producto = $params['tipo_producto'];
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
                tipo_producto = :tipo_producto,
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

              $producto = $this -> connection->prepare($query);

              $producto->binValue('id' , $this -> id);
              $producto->binValue('codigo' , $this -> codigo);
              $producto->binValue('texto' , $this -> texto);
              $producto->binValue('slogan' , $this -> slogan);
              $producto->binValue('marca' , $this -> marca);
              $producto->binValue('familia' , $this -> familia);
              $producto->binValue('otras_familias' , $this -> otras_familias);
              $producto->binValue('alta' , $this -> alta);
              $producto->binValue('descripcion_corta' , $this -> descripcion_corta);
              $producto->binValue('descripcion_larga' , $this -> descripcion_larga);
              $producto->binValue('venta' , $this -> venta);
              $producto->binValue('descuento' , $this -> descuento);
              $producto->binValue('venta1' , $this -> venta1);
              $producto->binValue('descuento1' , $this -> descuento1);
              $producto->binValue('venta2' , $this -> venta2);
              $producto->binValue('descuento2' , $this -> descuento2);
              $producto->binValue('venta3' , $this -> venta3);
              $producto->binValue('descuento3' , $this -> descuento3);
              $producto->binValue('venta4' , $this -> venta4);
              $producto->binValue('descuento4' , $this -> descuento4);
              $producto->binValue('venta5' , $this -> venta5);
              $producto->binValue('descuento5' , $this -> descuento5);
              $producto->binValue('venta6' , $this -> venta6);
              $producto->binValue('descuento6' , $this -> descuento6);
              $producto->binValue('existencia' , $this -> existencia);
              $producto->binValue('iva' , $this -> iva);
              $producto->binValue('tipo_producto' , $this -> tipo_producto);
              $producto->binValue('mostrar' , $this -> mostrar);
              $producto->binValue('raiz' , $this ->  raiz);
              $producto->binValue('vender' , $this -> vender);
              $producto->binValue('peso' , $this ->  peso);
              $producto->binValue('maximo' , $this -> maximo);
              $producto->binValue('destacado' , $this -> destacado);
              $producto->binValue('grupo' , $this -> grupo);
              $producto->binValue('peligroso' , $this -> peligroso);
              $producto->binValue('modelo' , $this -> modelo);
              $producto->binValue('matricula' , $this -> matricula);
              $producto->binValue('modelo_vehiculo' , $this -> modelo_vehiculo);
              $producto->binValue('voluminoso' , $this -> voluminoso);
              $producto->binValue('color' , $this -> color);
              $producto->binValue('minimo' , $this -> minimo);
              $producto->binValue('oferta' , $this -> oferta);
              $producto->binValue('limite' , $this -> limite);
              $producto->binValue('corta_ingles' , $this -> corta_ingles);
              $producto->binValue('larga_ingles' , $this -> larga_ingles);
              $producto->binValue('bodega' , $this -> bodega);
              $producto->binValue('unidadescaja' , $this -> unidadescaja);
              $producto->binValue('origen' , $this -> origen);
              $producto->binValue('categoria' , $this -> categoria);
              $producto->binValue('longitud' , $this -> longitud);

              if($producto->execute())
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

    // Method to delete producto from database.

    public function destroy_producto($id)
    {
        try
        {
              // Assigning values.

              $this -> id = $id;

              // Query for updating existing record.

              $query = 'DELETE FROM '.$this -> table.' 
                   WHERE id = :id';

              $producto = $this -> connection->prepare($query);

              $producto->bindValue('id', $this -> id);
              
              if($producto->execute())
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