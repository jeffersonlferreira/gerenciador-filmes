<?php

if(!auth()) {
    header('location: /login');
    exit();
}

$filme = Filmes::get($_REQUEST['id']);

$avaliacoes = Avaliacao::all($filme->id);

view('filme', compact('filme', 'avaliacoes'));