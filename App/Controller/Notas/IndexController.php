<?php

namespace App\Controller\Notas;

class IndexController
{
    public function __invoke()
    {
        if (!auth()) {
            return redirect('/login');
        }


        return view('/notas', [
            'user' => auth(),
        ]);
    }
}