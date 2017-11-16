<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

function get_hours_range($start, $end, $step) {
    $times = array();
    foreach (range($start, $end, $step) as $timestamp) {
        $hour_mins = gmdate('H:i', $timestamp);
        if (!empty($format))
            $times[$hour_mins] = gmdate($format, $timestamp);
        else
            $times[$hour_mins] = $hour_mins;
    }
    return $times;
}

$app->get('/testwinoto', function() use($app) {
    $docDaysList = DB::query('SELECT doctorId, date, TIME_TO_SEC(startTime) as start, TIME_TO_SEC(endTime) as end FROM dailyschedules WHERE doctorId = 1');
    $splithour = array();
    $newdata = array();
//print_r($result['0']['start']);
    foreach ($docDaysList as $docDay) {
        $appsForDay = DB::queryFirstColumn ("SELECT startTime FROM appointments WHERE doctorId = %d AND date = %s", 1, $docDay['date']);
        // $working = ($docDay['end'] - $docDay['start']) / 1800;
//        for ($i = 0; $i < $working; $i++) {
        $apptsHoursList = get_hours_range($docDay['start'], $docDay['end'], 1800);
        
        $newApptsHoursList = array();
        foreach ($apptsHoursList as $appt) {
            $newApptsHoursList[$appt] = in_array($appt . ":00", $appsForDay) ? "true" : "false";            
        }
        /*
        $newdata[$docDay['date']] = array(
            'avaliable' => "true",
            'timeSlotList' => $splithour
                // ,     'doctorId' => $docDay['doctorId']
                //,            'date' => $docDay['date']
        );
        //      }
        //); */
        $newdata[$docDay['date']] = $newApptsHoursList;
    }
    print_r($newdata);

//for ($i=0 ; $i < count($result); $i++){
//    $working = ($result[i].end - $result[i].start)/1800;
//    $splithour = get_hours_range($result[i].start, $result[i].end, 1800);
//    for ($j=0 ; $j < $working; $j++){
//     $newData[i]=array(
//        "doctorId" =>$result[i].doctorId,
//        "date" =>$result[i].date,
//        "start" =>$splithour[j],
//         "end" =>$splithour[j+1]
//    );   
//    }   
//}
//$splithour = get_hours_range($result.start + 0, $result.end +0, 3600);

    $app->render('testwinoto.html.twig');
});
