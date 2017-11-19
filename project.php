<<<<<<< HEAD

<?php



use Monolog\Logger;

use Monolog\Handler\StreamHandler;



session_start();



require_once 'vendor/autoload.php';



DB::$dbName = 'cp4809_clinic';

DB::$user = 'cp4809_clinic';

DB::$encoding = 'utf8';



DB::$password = 'nW4!To4($3Cv';

// Slim creation and setup

$app = new \Slim\Slim(array(

    'view' => new \Slim\Views\Twig()

        ));



$view = $app->view();

$view->parserOptions = array(

    'debug' => true,

    'cache' => dirname(__FILE__) . '/cache'

);

$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');



// create a log channel

$log = new Logger('main');

$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));

$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));



require_once 'connect.php';

require_once 'staff.php';



require_once 'payment.php';



require_once 'patient.php';
require_once 'account.php';

require_once 'doctor_schedule.php';

require_once 'doctor_calendar.php';

//require_once 'testavaliabity.php';

//require_once 'events.php';

//require_once 'ajaxpro.php';


if (!isset($_SESSION['userSession'])) {

    $_SESSION['userSession'] = array();
}
if (!isset($_SESSION['staffSession'])) {

    $_SESSION['staffSession'] = array();
}

// url/event handler go here

$app->get('/', function() use ($app) {

    $app->render('index.html.twig');

});



$app->get('/master', function() use ($app){

    $app->render('master.html.twig');

});





$app->run();

=======

<?php

use Monolog\Logger;

use Monolog\Handler\StreamHandler;


session_start();


require_once 'vendor/autoload.php';


DB::$dbName = 'cp4809_clinic';

DB::$user = 'cp4809_clinic';

DB::$encoding = 'utf8';

DB::$password = 'nW4!To4($3Cv';

DB::$error_handler = 'sql_error_handler';
DB::$nonsql_error_handler = 'nonsql_error_handler';

function sql_error_handler($params) {
    global $app, $log;
    $log->err("SQL Error: " . $params['error']);
    $log->err(" in query: " . $params['query']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}

function nonsql_error_handler($params) {
    global $app, $log;
    $log->err("SQL Error: " . $params['error']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}

// Slim creation and setup

$app = new \Slim\Slim(array(

    'view' => new \Slim\Views\Twig()

        ));



$view = $app->view();

$view->parserOptions = array(

    'debug' => true,

    'cache' => dirname(__FILE__) . '/cache'

);

$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

// create a log channel

$log = new Logger('main');

$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));

$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));

if (!isset($_SESSION['user'])) {

    $_SESSION['user'] = array();
}
$twig = $app->view()->getEnvironment();
$twig->addGlobal('userSession', $_SESSION['user']);

require_once 'connect.php';

require_once 'staff.php';

require_once 'payment.php';

require_once 'patient.php';

require_once 'account.php';

require_once 'doctor_schedule.php';

require_once 'doctor_calendar.php';

//require_once 'events.php';


$app->get('/', function() use ($app) {

    $app->render('index.html.twig');

});


$app->get('/master', function() use ($app){

    $app->render('master.html.twig');

});


$app->run();

>>>>>>> 93eb51b446e15aa0b7f8f03c88100e6ece065ab8
