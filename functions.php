<?php

function dd(...$dump) {
    dump($dump);
    die();
};

function dump(...$dump) {
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
};

function view($view, $data = []) {

    foreach($data as $key => $value) {
        $$key = $value;
    };

    if($view == 'login' || $view == 'register') {
        require "views/templates/guest.php";
    } else {
        require "views/templates/app.php";
    }

}

function abort(int $codigo) {
    http_response_code($codigo);
    view('404');
    die();
};

function config($chave = null)
{
    $config = require 'config.php';
    if(strlen($chave) > 0) {
        return $config[$chave];
    }

    dd($config);

    return $config;
}

function currentRoute() {
    return str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);
};

function active($rota = '') {
    if(currentRoute() == $rota) {
        return 'text-[#A85FDD] bg-[#1A1B2D] fill-[#A85FDD]';
    } else {
        return 'fill-[#7A7B9F]';
    };
};