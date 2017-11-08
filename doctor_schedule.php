<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}
$app->get('/myschedule', function() use ($app, $log){
//    if(!isset($_SESSION['staff'])){
//        $app->render('access_denied.html.twig');
//        return;
//    }

    $app->render('admin/doctor_schedule.html.twig');
    
});
$app->get('/ajax/myschedule(/:date)', function($date) use ($app, $log){
//    if(!isset($_SESSION['staff'])){
//        $app->render('access_denied.html.twig');
//        return;
//    }
    $arrayDate = explode('-', $date);
    $month = $arrayDate[0];
    $year = $arrayDate[1];
    $number = date('t', mktime(0, 0, 0, $month,1, $year));
    $arrayDay = array();
    for ($i = 1; $i <= $number; $i++){
        $firstDay= date('D', strtotime($year . '-' . $month . '-' . $i));
        array_push($arrayDay, $firstDay);
    }
    //$firstDay= date('D', strtotime($year . '-' . $month . '-' . '1')); 
    $app->render('admin/ajaxdoctor_schedule.html.twig', array(
        "datelist" =>$number,
        "firstday" =>$arrayDay
        ));
    
});



