<?php

use Core\Database;
use Core\Validacao;
use App\Models\Usuario;

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $database = new Database(config('database'));

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'password' => ['required']
    ], $_POST);

    if ($validacao->naoPassou()) {
        view('login');
        exit();
    }

    $usuario  = $database->query(
        query: "select * from usuarios where email = :email",
        class: Usuario::class,
        params: ['email' => $email]
    )->fetch();

    if ($usuario && password_verify($password, $usuario->password)) {

        $_SESSION['auth'] = $usuario;

        flash()->push('mensagem', "Seja bem vindo " . $usuario->nome . "!");
        header('location: /');
        exit();
    } else {
        flash()->push('validacoes', ['email' => ['Usuario ou senha estão incorretos!']]);
    }
}




view('login');
