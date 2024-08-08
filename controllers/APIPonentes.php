<?php

namespace Controllers;

use Model\Ponente;

class APIPonentes
{

    public static function index()
    {

        $ponentes = Ponente::all('ASC');
        echo json_encode($ponentes);

        //consultar en la BD
        // $eventos = EventoHorario::whereArray(['dia_id' => $dia_id, 'categoria_id' => $categoria_id]) ?? [];
        // echo json_encode($eventos);
    }
}
