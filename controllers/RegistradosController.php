<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Paquete;
use Model\Registro;
use Model\Usuario;
use MVC\Router;

class RegistradosController
{

    public static function index(Router $router)
    {
        if (!is_admin()) {
            header('Location: /login');
        }

        $paginacion_actual = $_GET['page'];
        $paginacion_actual = filter_var($paginacion_actual, FILTER_VALIDATE_INT);

        if (!$paginacion_actual || $paginacion_actual < 1) {
            header('Location: /admin/registrados?page=1');
        }

        $registros_por_pagina = 5;
        $total = Registro::total();
        $paginacion = new Paginacion($paginacion_actual, $registros_por_pagina, $total);

        if ($paginacion->total_paginas() < $paginacion_actual) {
            header('Location: /admin/registrados?page=1');
        }
        $registros = Registro::paginar($registros_por_pagina, $paginacion->offset());
        foreach ($registros as $registro){
            $registro->usuario = Usuario::find($registro->usuario_id);
            $registro->paquete = Paquete::find($registro->paquete_id);
        }
    
        $router->render('admin/registrados/index', [
            'titulo' => 'Usuarios Registrados',
            'registros' => $registros,
            'paginacion' =>$paginacion->paginacion()
        ]);
    }
}
