<?php

namespace App\Controller\Notas;

use App\Models\Nota;
use Core\Validacao;

class AtualizarController
{
    public function __invoke()
    {

        $validacao = Validacao::validar([
            'titulo' => ['required', 'min:3', 'max:255'],
            'nota' => ['required'],
            'id' => ['required']
        ], request()->all());

        if ($validacao->naoPassou()) {
            // se deu errado
            return redirect('/notas?id=' . request()->post('id'));
        }

        Nota::update(request()->post('titulo'), request()->post('nota'), request()->post('id'));

        flash()->push('mensagem', "Registro atualizado com sucesso!!");
        return redirect('/notas?id=' . request()->post('id'));
    }
}
