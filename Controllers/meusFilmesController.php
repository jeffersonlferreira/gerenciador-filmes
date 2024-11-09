<?php

// $livros = Livro::meus(auth()->id);
$filmes = Filmes::meus(3, $_REQUEST['pesquisar'] ?? null);

view('meusFilmes', compact('filmes'));