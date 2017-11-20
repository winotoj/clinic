<?phpclass MonthInfo {    var $month;    var $dates;    function setMonth($par) {        $this->month = $par;    }    function getMonth() {        echo $this . month;    }    function setDates($par) {        $this->dates = $par;    }    function getDates() {        echo $this . dates;    }}class DateInfo {    /* Member variables */    var $dayOfWeek;    var $day;    var $month;    /* Member functions */    function setDayOfWeek($par) {        $this->dayOfWeek = $par;    }    function getDayOfWeek() {        echo $this->dayOfWeek;    }    function setDay($par) {        $this->day = $par;    }    function getDay() {        echo $this->day;    }    function setMonth($par) {        $this->month = $par;    }    function getMonth() {        echo $this->month;    }}class Date {    var $dow;    var $day;    var $month;    var $dateStr;    function setDow($par) {        $this->dow = $par;    }    function getDow() {        echo $this->dow;    }    function setDay($par) {        $this->day = $par;    }    function getDay() {        echo $this->day;    }    function setMonth($par) {        $this->month = $par;    }    function getMonth() {        echo $this->month;    }    function setDateStr($par) {        $this->dateStr = $par;    }    function getDateStr() {        echo $this->dateStr;    }}class Time {    var $hour;    var $minute;    function setHour($par) {        $this->hour = $par;    }    function getHour() {        echo $this->hour;    }    function setMinute($par) {        $this->minute = $par;    }    function getMinute() {        echo $this->minute;    }}class TimeSlot {    var $start;    var $end;    function setStart($par) {        $this->start = $par;    }    function getStart() {        echo $this->start;    }    function setEnd($par) {        $this->end = $par;    }    function getEnd() {        echo $this->end;    }}class DoctorSchedule {    var $date;    var $times;    var $appointments;    function setDate($par) {        $this->date = $par;    }    function getDate() {        echo $this->date;    }    function setTimes($par) {        $this->times = $par;    }    function getTimes() {        echo $this->times;    }    function setAppointments($par) {        $this->appointments = $par;    }    function getAppointments() {        echo $this->appointments;    }}function get_hours_range($start, $end, $step) {    $times = array();    foreach (range($start, $end, $step) as $timestamp) {        $hour_mins = gmdate('H:i', $timestamp);        if (!empty($format))            $times[$hour_mins] = gmdate($format, $timestamp);        else            $times[$hour_mins] = $hour_mins;    }    return $times;}if (false) {    $app = new \Slim\Slim();    $log = new Logger('main');}///*************** Patient's Profiles ***********************/////////////////$app->get('/patient/myaccount', function() use ($app) {        if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'patient') {        $app->render('access_denied.html.twig');        return;    }    $app->render('patient/myaccount.html.twig');});$app->get('/patient/mybooking', function() use ($app) {        if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'patient') {        $app->render('access_denied.html.twig');        return;    }    $myappointments = DB::query("SELECT p.id, dr.firstName, dr.lastName, p.date, p.startTime FROM appointments as p, doctors as dr WHERE p.patientId = %i and p.doctorId = dr.id and p.readStatus <> 2", $_SESSION['user']['id']);    $app->render('patient/mybooking.html.twig', array('myapp' => $myappointments));});$app->post('/:appid/deleteappointment', function($appid) use ($app) {        if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'patient') {        $app->render('access_denied.html.twig');        return;    }    DB::update('appointments', array('readStatus' => 2), "id = %d", $appid);        $data = new stdClass();    if (DB::affectedRows() == true) {        $data->success = true;    } else {        $data->success = false;    }        echo json_encode($data);});/////////////******* Search in Doctor's List based on speciallity **************////////////////$app->get('/bookappointment', function() use ($app) {          $row = DB::query("SELECT DISTINCT speciality FROM doctors");    $app->render('patient/makeAppointment.html.twig', array('r' => $row));});$app->post('/bookappointment', function() use ($app) {    $speciality = $app->request()->post('speciality');    $drList = DB::query("SELECT * FROM doctors WHERE speciality = %s", $speciality);    $app->render('drList.html.twig', array('drList' => $drList));});//////////*********Show doctor's describtion and Available Time **************//////////////////$app->get('/doctors/:id/:drname', function($id, $drname) use ($app) {    $row = DB::queryFirstRow("SELECT * FROM doctors WHERE id = %i ", $id);         if (!$row) {        $app->render('admin/not_found.html.twig');        return;    }    $app->render('doctors/drdescription.html.twig', array('dr' => $row));});$app->get('/avtime/:id/:start', function ($id, $start) use ($app) {    $data = array();        $format = 'Y-m-d';    $start_date_obj = DateTime::createFromFormat($format, $start);    $start_date_obj_cp = DateTime::createFromFormat($format, $start);    //$s = strtotime($date_format->format('d/m/Y H:i'));    //$startDate = strtotime($s); // DateTime::createFromFormat("Y-m-d", $start);    //$endDate = strtotime("+6 days", $startDate);        $startDate = $start_date_obj->format($format);    $endDate = $start_date_obj->add(new DateInterval("P6D"))->format($format);    //$timeRow = DB::query("SELECT * FROM dailyschedules WHERE doctorId = %i and date >= %s and date < %s", $id, gmdate("Y-m-d", $startDate), gmdate("Y-m-d", $endDate));    $timeRow = DB::query("SELECT * FROM dailyschedules WHERE doctorId = %i and date >= %s and date < %s", $id, $startDate, $endDate);    //$timeApp = DB::query("SELECT * FROM appointments WHERE doctorId = %i and date >= %s and date < %s order by date, startTime", $id, gmdate("Y-m-d", $startDate), gmdate("Y-m-d", $endDate));    $timeApp = DB::query("SELECT * FROM appointments WHERE doctorId = %i and date >= %s and date < %s order by date, startTime", $id, $startDate, $endDate);            for ($i = 0; $i < 6; $i++) {        if($i > 0){            $currentDate = $start_date_obj_cp->add(new DateInterval("P1D"));        } else {            $currentDate = $start_date_obj_cp;        }        $currentDateStr = $currentDate->format($format);        //$currentDate = strtotime("+" . "$i" . " days", $startDate);                //$currentDateStr = gmdate("Y-m-d", $currentDate);               //$x = new stdClass();        //$a = array();                $value = new DoctorSchedule();        $date = new Date();        //$date->setMonth(date("M", $currentDate));        //$date->setDay(date("d", $currentDate));        //$date->setDow(date("D", $currentDate));                $date->setMonth($currentDate->format('M'));        $date->setDay($currentDate->format('d'));        $date->setDow($currentDate->format('D'));                $date->setDateStr($currentDateStr);        $value->setDate($date);        $times = array();        $appointments = array();                foreach ($timeRow as $r) {            $d = $r['date'];            $t1 = $r['startTime'];            $t2 = $r['endTime'];                        //array_push($a, gmdate("Y-m-d", $endDate));            if ($d == $currentDateStr) {                $slot = new TimeSlot();                $start = new Time();                $start->setHour(((int) substr($t1, 0, 2)));                $start->setMinute(((int) substr($t1, 3, 5)));                $end = new Time();                $end->setHour(((int) substr($t2, 0, 2)));                $end->setMinute(((int) substr($t2, 3, 5)));                $slot->setStart($start);                $slot->setEnd($end);                array_push($times, $slot);            }        }        //$x->d = $a;        //array_push($data, $x);        $found_current_date = false;        foreach ($timeApp as $ar) {            $d = $ar['date'];            if ($d == $currentDateStr) {                $t = substr($ar['startTime'], 0, 5);                array_push($appointments, $t);                $found_current_date = true;            } else {                if ($found_current_date) {                    break;                }            }        }        $value->setTimes($times);        $value->setAppointments($appointments);        array_push($data, $value);    }    //header('Content-Type: application/json;charset=utf-8');    echo json_encode($data);});/////////*********** PAYMENT *********///////////////$app->post('/prepayment', function() use ($app) {        if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'patient') {        $app->render('access_denied.html.twig');        return;    }    $doctorId = $app->request()->post('doctorId');    $time = $app->request()->post('time');    //DB::insert('test', array('doctorId' => $doctorId, 'time' => $time));});