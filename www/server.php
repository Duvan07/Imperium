<?php

// ini_set('display_errors', true);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');
header('Access-Control-Allow-Headers: x-requested-with, Content-Type, origin, authorization, accept, client-security-token');

session_start();

require '../lib/class.config.php';
require '../config/class.myConfig.php';
require '../config/config.php';
require '../lib/class.frontController.php';

try {
$app = new frontController($config);
$app->run();
} catch (Exception $exc) {
echo $exc->getTraceAsString();
}
