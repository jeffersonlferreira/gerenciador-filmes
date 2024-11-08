<?php

// $livros = Livro::meus(auth()->id);
$filmes = Filmes::meus(1);

view('meusFilmes', compact('filmes'));