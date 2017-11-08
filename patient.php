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
    
    $row = DB::query("SELECT DISTINCT speciality FROM doctors");
    $app->render('patient/makeAppointment.html.twig', array('r' => $row));
});

$app->post('/bookappointment', function() use ($app){
    
    
    $speciality = $app->request()->post('speciality');
    $app_date = $app->request()->post('app_date');
    
    
    $drList = DB::query("SELECT * FROM doctors WHERE speciality = %s", $speciality);
    $app->render('drList.html.twig', array('drList' => $drList));
});


$app->get('/doctors/:id/:drname', function($id, $drname) use ($app){
    
    $desc = DB::query("SELECT * FROM doctors WHERE id = %i ", $id);
    print_r($desc);
    $app->render('doctors/drdescription.html.twig', array('drDesc' => $desc));
});



