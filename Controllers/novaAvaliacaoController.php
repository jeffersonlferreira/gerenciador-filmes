<?php

if(!auth()) {
    header('location: /login');
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([
        'avaliacao' => ['required'],
        'comentario' => ['required']
    ], $_POST);

    if($validacao->naoPassou()) {
        header('location: /');
        exit();
    }

    $database->query(
        query: 'INSERT INTO avaliacoes (filme_id, usuario_id, avaliacao, nota) VALUES (:filme_id, :usuario_id, :avaliacao, :nota)',
        params: [
            'filme_id' => $_POST['id'],
            'usuario_id' => auth()->id,
            'avaliacao' => $_POST['comentario'],
            'nota' => $_POST['avaliacao']
        ]
    );

    flash()->push('mensagem', "Avaliação enviada com sucesso!");

    header('location: /filme?id='.$_POST['id']);

    exit();
}

if(!auth()) {
    abort(403);
}

view('novoFilme');