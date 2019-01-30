<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    Logger::info("Slim-Skeleton '/' route");

    // Render index view
    return View::render($response, 'index.phtml', $args);
});
