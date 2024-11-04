<?php

namespace App\Controller\Notas;

use App\Models\Nota;

class IndexController
{
    public function __invoke()
    {
        $pesquisar = isset($_GET['pesquisar']) ?  $_GET['pesquisar'] : null;
        $notas = Nota::all(filter: $pesquisar);

        $id =  isset($_GET['id']) ?  $_GET['id'] : (sizeof($notas) > 0 ? $notas[0]->id : null);

        $filtro = array_filter($notas, fn($n) => $n->id == $id);
        $notasSelecionada = array_pop($filtro);


        if (!$notasSelecionada) {
            return view('notas/nao-encontrada');
        }

        return view(
            'notas',
            [
                'notas' => $notas,
                'notaSelecionada' => $notasSelecionada
            ]
        );
    }
}
