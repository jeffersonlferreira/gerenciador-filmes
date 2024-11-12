<?php

if(!auth()) {
    header('location: /login');
    exit();
}

$filmes = Filmes::all($_REQUEST['pesquisar'] ?? null);

view('index', compact('filmes'));