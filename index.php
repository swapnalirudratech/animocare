<?php

session_start();

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$router = new AltoRouter();

$routes = [
    [
        "route" => "/",
        "method" => ["GET", "POST"],
        "page" => "home.php",
    ],
    [
        "route" => "/checkout",
        "method" => ["GET", "POST"],
        "page" => "pages/about.php",
    ],
];



foreach ($routes as $route) {
    foreach ($route["method"] as $meth) {
        $router->map($meth, $route["route"], function () use ($route) {
            require $route["page"];
        });
    }
}



$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // require __DIR__ . '/404.php';
    echo 'not found';
}
