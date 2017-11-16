<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}
$app->get('/mycalendar', function() use ($app, $log) {

    $app->render('admin/doctor_calendar.html.twig');
    //$app->render('admin/doctor_calendar.html.twig', array("doctorList" => $doctorList));    
});

$app->get('/cal', function() use ($app, $log) {

    $app->render('admin/dr_schedule.html');
});


$app->get('/calx', function() use ($app, $log) {
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
        $max_exec_time = 30; // seconds
        $query_frequency = 3; // seconds
        for ($i=0; $i<$max_exec_time - $query_frequency; $i+=$query_frequency) 
        //while(true)
        {
            $cal = DB::query('SELECT * FROM appointments WHERE readStatus = 0 AND doctorId = %i', 1);
            if ($cal) {
                DB::update('appointments', array(
                    'readStatus' => 1
                    ), "doctorId=%i", 1);
                echo json_encode($cal);
                return;
            }
            sleep($query_frequency);
        }
        
        
        if(empty($cal)){
            echo "";
        }
        else if (!$cal) {
            http_response_code(500);
            $app->render('internal_error.html.twig');
        }
        $result=array();
        foreach ($cal as $c) {
            $result = ['id' => $c['id'],
                'doctorId' => $c['doctorId']
                ];
        }
        
        $count = sizeof($result);
        
        if($count > 0){
            //echo "id: $lastId\n";
            echo "event: message\n";
            echo "data: " . $count . "\n\n";           
            flush();
            DB::update('appointments', array(
  'readStatus' => 1
  ), "doctorId=%i", 1);
           //$app->render(admin/dr_schedule.html);
            
        }
        //sleep(15);
  

   // $app->render('admin/test_dr_schedule.html');
});


$app->get('/events', function() use ($app, $log) {
    $json = array();

    // Query that retrieves events
//    $cal = DB::query('SELECT a.id as id, d.id as doctorId, d.firstName as doctorFirstName, '
//                    . 'd.lastName as doctorLastName, p.id as patientId, p.firstName as firstName, '
//                    . 'p.lastName as lastName, a.date, a.startTime, a.endTime, a.patientMessage as msg, '
//                    . 'a.doctorNote as note, a.readStatus as status, a.type as type FROM doctors as d '
//                    . 'JOIN appointments as a ON d.id = a.doctorId JOIN patients AS p ON a.patientId = p.id '
//                    . 'WHERE d.id = 1');
    $cal = DB::query('SELECT a.id as id, d.id as doctorId, d.firstName as doctorFirstName, '
                    . 'd.lastName as doctorLastName, p.id as patientId, p.firstName as firstName, '
                    . 'p.lastName as lastName, a.date, a.startTime, a.endTime, a.patientMessage as msg, '
                    . 'a.doctorNote as note, a.readStatus as status, a.type as type FROM doctors as d '
                    . 'JOIN appointments as a ON d.id = a.doctorId JOIN patients AS p ON a.patientId = p.id ');
    if (!$cal) {
        http_response_code(500);
        $app->render('internal_error.html.twig');
    }

    $calendar = array();

    foreach ($cal as $c) {
        $calTemp = array(
            'id' => $c[id],
            'patientId' => $c[patientId],
            'doctorId' => $c[doctorId],
            'doctorName' => $c[doctorFirstName] . ' ' . $c[doctorLastName],
            'title' => $c[firstName] . ' ' . $c[lastName],
            'start' => $c[date] . ' ' . $c[startTime],
            'end' => $c[date] . ' ' . $c[endTime],
            'patientmsg' => $c[msg],
            'doctornote' => $c[note]
        );
        array_push($calendar, $calTemp);
    }


    // sending the encoded result to success page
    echo json_encode($calendar);
});

$app->post('/add_events', function() use ($app, $log) {
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


$app->post('/add_note_event', function() use ($app, $log) {
    $note = $_POST['note'];
    $id = $_POST['id'];
    DB::update('appointments', ['doctorNote' => $note], 'id=%i', $id);
});

$app->post('/load_history', function() use ($app, $log) {
    $patientId = $_POST['patientId'];
    $history = DB::query('SELECT d.firstName as dfirstName, d.lastName as dlastName, a.date as date, a.patientMessage as message, a.doctorNote as note, p.firstName as pfirstName, p.lastName as plastName FROM doctors AS d JOIN appointments as a ON d.id = a.doctorId JOIN patients as p on a.patientId = p.id WHERE a.patientId = %i and a.date <= CURRENT_DATE() order by a.date ASC', $patientId);

    if (!$history) {
        if(empty($history)){
       $patient = DB::queryFirstRow('SELECT * FROM patients WHERE id = %i', $patientId);
        $app->render('admin/patient_history.html.twig', array('p' => $patient));
        }else{
             http_response_code(500);
        $app->render('internal_error.html.twig');
        }
    }else{
        $app->render('admin/patient_history.html.twig', array('hh' => $history));
    }
   
    
});
