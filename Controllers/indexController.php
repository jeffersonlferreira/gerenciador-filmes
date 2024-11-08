<?php

$filmes = Filmes::all($_REQUEST['pesquisar'] ?? null);

view('index', compact('filmes'));