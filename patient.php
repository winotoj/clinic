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

class Date {
    var $dow;
    var $day;
    var $month;
    var $dateStr;

    function setDow($par){
        $this->dow = $par;
    }
    function getDow() {
        echo $this->dow;
    }
    function setDay($par) {
        $this->day = $par;
    }
    function getDay() {
        echo $this->day;
    }
    function setMonth($par) {
        $this->month = $par;
    }
    function getMonth() {
        echo $this->month;
    }
    function setDateStr($par){
       $this->dateStr = $par;
    }
    function getDateStr(){
       echo $this->dateStr;
    }
}

class Time {
    var $hour;
    var $minute;
    function setHour($par) {
        $this->hour = $par;
    }
    function getHour() {
        echo $this->hour;
    }
    function setMinute($par) {
        $this->minute = $par;
    }
    function getMinute() {
        echo $this->minute;
    }
}

class TimeSlot {
    var $start;
    var $end;

    function setStart($par) {
        $this->start = $par;
    }
    function getStart() {
        echo $this->start;
    }
    function setEnd($par) {
        $this->end = $par;
    }
    function getEnd() {
        echo $this->end;
    }

}
class DoctorSchedule {
    var $date;
    var $times;
    function setDate($par) {
        $this->date = $par;
    }
    function getDate() {
        echo $this->date;
    }
    function setTimes($par) {
        $this->times = $par;
    }
    function getTimes() {
        echo $this->times;
    }
}

//function halfHourTimes($sttime, $endtime) {
//  $formatter = function ($sttime, $endtime) {
//      
//    if ($sttime % 3600 == 0 || $endtime % 3600 == 0) {
//      return date('ga', $sttime);
//    } else {
//      return date('g:ia', $sttime);
//    }
//  };
//  //$halfHourSteps = range(0, 47*1800, 1800);
//  $halfHourSteps = range($sttime, $endtime, 1800);
//  return array_map($formatter, $halfHourSteps);
//}
   
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
    //$app_date = $app->request()->post('app_date');
    
    
    $drList = DB::query("SELECT * FROM doctors WHERE speciality = %s", $speciality);
    $app->render('drList.html.twig', array('drList' => $drList));
});


$app->get('/doctors/:id/:drname', function($id, $drname) use ($app){
    //TODO: check URL
    $row = DB::queryFirstRow("SELECT * FROM doctors WHERE id = %i ", $id);
    //show time available - main page
    $startDate = strtotime('now'); 
    $endDate = strtotime("+6 days", $startDate);
    $timeRow = DB::query("SELECT * FROM dailyschedules WHERE doctorId = %i and date >= %s and date < %s", $id, gmdate("Y-m-d", $startDate), gmdate("Y-m-d", $endDate));
    print_r($timeRow);
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

$app->post('/prepayment', function() use ($app){
    
    $doctorId = $app->request()->post('doctorId');
    $time = $app->request()->post('time');
    DB::insert('test', array('doctorId' => $doctorId, 'time' => $time));
});

$app->get('/avtime/:id/:start', function ($id, $start) use ($app) {
    $data = array();   
    
    $startDate = strtotime($start); // DateTime::createFromFormat("Y-m-d", $start);
    $endDate = strtotime("+6 days", $startDate); 

    $timeRow = DB::query("SELECT * FROM dailyschedules WHERE doctorId = %i and date >= %s and date < %s", $id,
    gmdate("Y-m-d", $startDate), gmdate("Y-m-d", $endDate));    
    
    for ($i=0; $i<6; $i++) {
        $currentDate = strtotime("+" . "$i" . " days", $startDate);
        $currentDateStr = gmdate("Y-m-d", $currentDate);
        
        $value = new DoctorSchedule();
        $date = new Date();
        $date->setMonth(date("M", $currentDate));        
        $date->setDay(date("d", $currentDate));      
        $date->setDow(date("D", $currentDate));
        $date->setDateStr($currentDateStr);
        
        $value->setDate($date);

        $times = array();
        
        foreach ($timeRow as $r) {
            $d = $r['date'];
            $t1 = $r['startTime'];
            $t2 = $r['endTime'];
            
            if($d == $currentDateStr) {               
                $slot = new TimeSlot();
                $start = new Time();
                $start->setHour(((int) substr($t1, 0, 2)));
                $start->setMinute(((int) substr($t1, 3, 5)));
                $end = new Time();
                $end->setHour(((int) substr($t2, 0, 2)));
                $end->setMinute(((int) substr($t2, 3, 5)));
                $slot->setStart($start);
                $slot->setEnd($end);
                array_push($times, $slot);
            }
            
        }
        
        $value->setTimes($times);

        array_push($data, $value);
    }
    header('Content-Type: application/json');
    
    echo json_encode($data);
});

