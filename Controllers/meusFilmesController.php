<?php

if(!auth()) {
    header('location: /login');
    exit();
}


$filmes = Filmes::meus(auth()->id, $_REQUEST['pesquisar'] ?? null);

view('meusFilmes', compact('filmes'));