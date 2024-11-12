<?php

if(!auth()) {
    header('location: /login');
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([
        'titulo' => ['required'],
        'ano' => ['required'],
        'categoria' => ['required'],
        'descricao' => ['required']
    ], $_POST);

    if($validacao->naoPassou()) {
        header('location: /meusFilmes');
        exit();
    }

    $novoNome = md5(rand());

    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);

    $imagem = "assets/image/$novoNome.$extensao";

    move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);

    $database->query(
        query: 'INSERT INTO filmes (titulo, ano_lancamento, genero, descricao, imagem, usuario_id) VALUES (:titulo, :ano_lancamento, :genero, :descricao, :imagem, :usuario_id)',
        params: [
            'titulo' => $_POST['titulo'],
            'ano_lancamento' => $_POST['ano'],
            'genero' => $_POST['categoria'],
            'descricao' => $_POST['descricao'],
            'imagem' => $imagem,
            'usuario_id' => auth()->id
        ]
    );


    flash()->push('mensagem', "Filme cadastrado com sucesso!👍");

    header('location: /meusFilmes');

    exit();

}

if(!auth()) {
    abort(403);
}

view('novoFilme');