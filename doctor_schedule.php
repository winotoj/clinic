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
    $doctorList = DB::query('SELECT * FROM doctors');
    if(!$doctorList){
        http_response_code(500);
        $app->render('internal_error.html.twig');
    }
    
    $app->render('admin/doctor_schedule.html.twig', array("doctorList" => $doctorList));    
});

$app->post('/myschedule/:date/:id', function($date, $id) use ($app, $log){
    $doctorId = $id;
    $arrayDate = explode('-', $date);
    $month = $arrayDate[0];
    $year = $arrayDate[1];
    $number = date('t', mktime(0, 0, 0, $month,1, $year));
    $schedule = array();
    for($i=1; $i <= $number; $i++){
        if($app->request()->post('doctorAvailable' . $i)){
            $dateSql = date('Y-m-d', strtotime($year . '-' . $month . '-' . $i));
            $start = $app->request()->post('doctorStart' . $i);
            $end = $app->request()->post('doctorEnd' . $i);
            DB::insertUpdate('dailyschedules', array(
                'doctorId' => $doctorId,
                'date' => $dateSql,
                'startTime' => $start,
                'endTime' => $end
            ));
        }
                
    }
});


$app->get('/ajax/myschedule/:date/:id', function($date, $id) use ($app, $log){
//    if(!isset($_SESSION['staff'])){
//        $app->render('access_denied.html.twig');
//        return;
//    }
    
    
    //
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
        "firstday" =>$arrayDay,
        "doctorId" =>$id,
        "date" =>$date
        ));
    
})->conditions(array(
    'date' => '[0-9]{2}-[0-9]{4}'
));;

/*
$app->post('/ajax/myschedule/:date/:id', function($date, $id) use ($app, $log){
    $doctorId = $id;
    $arrayDate = explode('-', $date);
    $month = $arrayDate[0];
    $year = $arrayDate[1];
    $number = date('t', mktime(0, 0, 0, $month,1, $year));
    $schedule = array();
    for($i=1; $i <= $number; $i++){
        if($app->request()->post('doctorAvailable' . $i)){
            $dateSql = date('Y-m-d', strtotime($year . '-' . $month . '-' . $i));
            $start = $app->request()->post('doctorStart' . $i);
            $end = $app->request()->post('doctorEnd' . $i);
            DB::insertUpdate('dailyschedules', array(
                'doctorId' => $doctorId,
                'date' => $dateSql,
                'startTime' => $start,
                'endTime' => $end
            ));
        }
                
    }
    $task = $app->request()->post('task');
    
    
})

*/

