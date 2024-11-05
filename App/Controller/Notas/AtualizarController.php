<?php

namespace App\Controller\Notas;

use Core\Database;
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
        $database = new Database(config('database'));

        $database->query(
            query: "UPDATE NOTAS SET titulo = :titulo, nota = :nota where id = :id",
            params: [
                'titulo' => request()->post('titulo'),
                'nota' => request()->post('nota'),
                'id' => request()->post('id')
            ]
        );

        flash()->push('mensagem', "Registro atualizado com sucesso!!");
        return redirect('/notas?id=' . request()->post('id'));
    }
}
