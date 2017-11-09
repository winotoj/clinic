<?php

class MonthInfo {
    var $month;
    var $dates;
    
    function setMonth($par) {
        $this->month = $par;
    }
    function getMonth() {
        echo $this.month;
    }
    function setDates($par) {
        $this->dates = $par;
    }
    function getDates() {
        echo $this.dates;
    }
}

class DateInfo {
    /* Member variables */
    var $dayOfWeek;
    var $day;
    var $month;
    /* Member functions */
    function setDayOfWeek($par){
       $this->dayOfWeek = $par;
    }
    function getDayOfWeek(){
       echo $this->dayOfWeek;
    }
    function setDay($par){
       $this->day = $par;
    }
    function getDay(){
       echo $this->day;
    }
    function setMonth($par){
       $this->month = $par;
    }
    function getMonth(){
       echo $this->month;
    }
}

function halfHourTimes($sttime, $endtime) {
  $formatter = function ($sttime, $endtime) {
      
    if ($sttime % 3600 == 0 || $endtime % 3600 == 0) {
      return date('ga', $sttime);
    } else {
      return date('g:ia', $sttime);
    }
  };
  //$halfHourSteps = range(0, 47*1800, 1800);
  $halfHourSteps = range($sttime, $endtime, 1800);
  return array_map($formatter, $halfHourSteps);
}
   
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
    //TODO: check URL
    $row = DB::queryFirstRow("SELECT * FROM doctors WHERE id = %i ", $id);
    $timeRow = DB::query("SELECT * FROM dailyschedules WHERE doctorId = %i", $id);
    
//    for( $i = 0; $i < 2; $i++){
//    print_r(halfHourTimes($timeRow[0].['startTime'], $timeRow[0].['endTime']));
//    }
    
    $startdate = strtotime("now");
    $enddate = strtotime("+6 days", $startdate);
    $weekDate = array();    
    while ($startdate < $enddate) {
        $dateInfo = new DateInfo();
        $dateInfo->setMonth(date("M", $startdate));
        $dateInfo->setDay(date("d", $startdate));
        $dateInfo->setDayOfWeek(date("D", $startdate));
        //array_push($date, date("d M D", $startdate)) ;
        array_push($weekDate, $dateInfo) ;
        $startdate = strtotime("+1 day", $startdate);
    }
    //print_r($timeRow);
    $app->render('doctors/drdescription.html.twig', array('dr' => $row, 'weekDate' => $weekDate));
});



