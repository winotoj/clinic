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


if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}
// url/event handler go here
$app->get('/', function() use ($app) {
    echo "This is clinic project";
});
$app->get('/register', function() use($app){
    
    $app->render('register.html.twig');
});

$app->run();
