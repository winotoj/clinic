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

$app->get('/events', function() use ($app, $log) {
    $json = array();

    // Query that retrieves events

    $cal = DB::query('SELECT a.id as id, d.id as doctorId, d.firstName as doctorFirstName, d.lastName as doctorLastName, p.id as patientId, p.firstName as firstName, p.lastName as lastName, a.date, a.startTime, a.endTime, a.patientMessage as msg, a.doctorNote as note, a.readStatus as status, a.type as type FROM doctors as d JOIN appointments as a ON d.id = a.doctorId JOIN patients AS p ON a.patientId = p.id WHERE d.id = 1');
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
    $patientId = $_POST('patientId');
    $history = DB::query('SELECT d.firstName as dfirstName, d.lastName as dLastName, '
                    . ' a.date as date, a.patientMessage as message, a.doctorNote as note, '
                    . ' p.firstName as pfirstName, p.lastName as plastName FROM doctors AS d'
                    . ' JOIN appointments as a ON d.id = a.doctorId JOIN patients as p on a.patientId = p.id'
                    . ' WHERE a.patientId = %i order by a.date ASC', $patientId);
    if (!$history) { //TODO FIX ERROR
        return;
    }
    $app->render('patient_history.html.twig', array('history' => $$history));
});