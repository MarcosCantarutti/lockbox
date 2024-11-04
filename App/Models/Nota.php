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


    public static function all()
    {
        $database = new Database(config('database'));
        $notas = $database->query(
            query: "SELECT * FROM NOTAS WHERE usuario_id = :usuario_id ",
            class: self::class,
            params: [
                'usuario_id' => auth()->id,
            ]
        )->fetchAll();

        return  $notas;
    }
}
