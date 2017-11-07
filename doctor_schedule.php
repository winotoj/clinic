<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

$app->map('/myschedule', function() use ($app, $log){
//    if(!isset($_SESSION['staff'])){
//        $app->render('access_denied.html.twig');
//        return;
//    }
    if($app->request()->isGet()){
        //state 1: first show
        $app->render('admin/doctor_schedule.html.twig');
        return;
    }
    $yearpicker = $app->request()->post('yearpicker');
    print_r($yearpicker);
    //inpost -receving submission
    
    
})->via('GET', 'POST');

