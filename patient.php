<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

// URL/event handlers go here


$app->get('/myaccount', function() use ($app){
    $app->render('myaccount.html.twig');
});



