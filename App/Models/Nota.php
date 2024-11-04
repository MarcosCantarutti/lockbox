<?php
// representação de 1 registro no DB em forma de classe
namespace App\Models;

class Nota
{
    public $id;
    public $usuario_id;
    public $titulo;
    public $nota;
    public $data_criacao;
    public $data_atualizacao;
}
