<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

// URL/event handlers go here


$app->get('/myaccount', function() use ($app){
    $app->render('patient/myaccount.html.twig');
});


$app->get('/bookappointment', function() use ($app){
    $app->render('patient/bookappointment.html.twig');
});




