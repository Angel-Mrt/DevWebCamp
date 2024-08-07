<?php 

namespace Model;

class Categoria extends ActiveRecord{
    protected static $tabla = 'categorias';
    protected static $columnas = ['id', 'nombre'];

    public $id;
    public $nombre;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
    }


}