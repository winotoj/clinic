<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}
function get_hours_range( $start, $end, $step) {
        $times = array();
        foreach ( range( $start, $end, $step ) as $timestamp ) {
                $hour_mins = gmdate( 'H:i', $timestamp );
                if ( ! empty( $format ) )
                        $times[$hour_mins] = gmdate( $format, $timestamp );
                else $times[$hour_mins] = $hour_mins;
        }
        return $times;
}

$app->get('/testwinoto', function() use($app) {
$result = DB::query('SELECT doctorId, date, TIME_TO_SEC(startTime) as start, TIME_TO_SEC(endTime) as end FROM dailyschedules WHERE doctorId = 1');
//print_r($result);
//$newData = array();
$splithour = array();
print_r($result[0].['start']);
//foreach($result as $r){
//    $working = ($r.end - $r.start)/1800;
//    for ($i = 0; $i < $working; i++){
//        $newdata[]
//    }
//}

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