<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}
$app->get('/mycalendar', function() use ($app, $log){

    $app->render('admin/doctor_calendar.html.twig'); 
    //$app->render('admin/doctor_calendar.html.twig', array("doctorList" => $doctorList));    
});

$app->get('/cal', function() use ($app, $log){
    $app->render('admin/dr_schedule.html');
});

$app->get('/events', function() use ($app, $log){
    $json = array();

 // Query that retrieves events
 
 $cal = DB::query('SELECT d.id as doctorId, p.firstName as firstName, p.lastName as lastName, a.date, a.startTime, a.endTime, a.patientMessage as msg, a.doctorNote as note, a.readStatus as status, a.type as type FROM doctors as d JOIN appointments as a ON d.id = a.doctorId JOIN patients AS p ON a.patientId = p.id WHERE d.id = 1');
    if(!$cal){
        http_response_code(500);
        $app->render('internal_error.html.twig');
    }

    $calendar=array();
         
        foreach($cal as $c){
            $calTemp = array(
                'doctorId' => $c[doctorId],
                'title' =>$c[firstName] . ' ' . $c[lastName],
                'start' => $c[date] . ' ' . $c[startTime],
                'end' => $c[date] . ' ' .$c[endTime],
                'patientmsg' => 'Patient Message: ' . $c[msg],
                'doctornote' => 'Doctor Note: ' .$c[note]
            );
            array_push($calendar, $calTemp);
        
    }

 
 // sending the encoded result to success page
 echo json_encode($calendar);
});

$app->get('/add_events', function() use ($app, $log){
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $url = $_POST['url'];
    

DB::insertUpdate('appointments', array(
                'doctorId' => $doctorId,
                'date' => $dateSql,
                'startTime' => $start,
                'endTime' => $end
            ));
});