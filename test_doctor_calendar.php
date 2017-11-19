<?php



if (false) {

    $app = new \Slim\Slim();

    $log = new Logger('main');

}



$app->get('/cal1', function() use ($app, $log) {

   // $ticketsLength = count($tickets);





header('Content-Type: text/event-stream');

header('Cache-Control: no-cache');



//$lastId = $_SERVER["HTTP_LAST_EVENT_ID"];

//    if (isset($lastId) &&!empty($lastId) && is_numeric($lastId)) {

//        $lastId = intval($lastId);

//    }



   // while (true) {

        $cal = DB::query('SELECT * FROM appointments WHERE readStatus = 0 AND doctorId = %i', 1);

//        if(empty($cal)){

//           return;

//        }

//        else if (!$cal) {

//            http_response_code(500);

//            $app->render('internal_error.html.twig');

//        }

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

           $app->render(admin/dr_schedule.html);

            

        }

        //sleep(15);

  



   // $app->render('admin/test_dr_schedule.html');

});







$app->get('/events', function() use ($app, $log) {

$json = array();





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
