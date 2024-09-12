<?php

namespace Controllers;

use Model\Regalo;
use Model\Registro;
use MVC\Router;

class RegalosController
{

    public static function index(Router $router)
    {
        $regalos = Regalo::all('ASC');
        foreach ($regalos as $regalo) {
            $regalo->total = Registro::totalArray(['regalo_id' => $regalo->id, 'paquete_id' => "1"]);
        }
        //debuguear($regalos);
        $router->render('admin/regalos/index', [
            'titulo' => 'Regalos',
            'regalos' => $regalos
        ]);
    }
}
