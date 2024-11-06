<?php
// representação de 1 registro no DB em forma de classe
namespace App\Models;

use Core\Database;

class Nota
{
    public $id;
    public $usuario_id;
    public $titulo;
    public $nota;
    public $data_criacao;
    public $data_atualizacao;


    public function nota()
    {
        if (session()->get('mostrar')) {
            return $this->nota;
        }

        return '***********';
    }

    public static function all($filter = null)
    {
        $database = new Database(config('database'));
        $notas = $database->query(
            query: "SELECT * FROM NOTAS WHERE usuario_id = :usuario_id " . (
                $filter ? ' and titulo like :filter ' : null
            ),
            class: self::class,
            params: array_merge(
                ['usuario_id' => auth()->id],
                $filter ? ['filter' => "%$filter%"] : []
            )
        )->fetchAll();

        return  $notas;
    }

    public static function delete($id)
    {
        $database = new Database(config('database'));

        $database->query(
            query: "DELETE FROM NOTAS where id = :id",
            params: [
                'id' => $id
            ]
        );
    }

    public static function update($titulo, $nota, $id)
    {
        $database = new Database(config('database'));

        $set = 'SET titulo = :titulo';

        if ($nota) {
            $set .= ',nota = :nota ';
        }

        $database->query(
            query: "UPDATE NOTAS $set  where id = :id",
            params: array_merge([
                'titulo' => $titulo,
                'id' => $id
            ], $nota ? ['nota' => $nota] : [])
        );
    }
}
