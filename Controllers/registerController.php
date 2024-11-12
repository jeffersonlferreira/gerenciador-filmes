<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => ['required', 'email', 'unique:usuarios'],
        'senha' => ['required', 'min:8', 'max:30', 'strong']
    ], $_POST);

    if ($validacao->naoPassou('registrando')) {
        header('location: /register');
        exit();
    }

    $database->query(
        query: 'INSERT INTO usuarios (nome, email, password) VALUES (:nome, :email, :password)',
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
        ]
    );

    flash()->push('mensagem', "Registrado com sucesso!👍");

    header('location: /login');

    exit();

}

view('register');