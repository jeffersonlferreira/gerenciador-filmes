<?php

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if(!$controller) $controller = 'index';

if(!file_exists("../Controllers/{$controller}Controller.php")) {
    abort(404);
}

require "../Controllers/{$controller}Controller.php";