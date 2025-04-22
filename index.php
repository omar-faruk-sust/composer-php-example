<?php
// Load the vendor folder
require 'vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use MyApp\Database\DbConnector;
use MyApp\Student;

$student1 = new Student('Jhon', '200987777');
echo "THe student name: ". $student1->getName() .
 "And the Registration is: " . $student1->getRegistrationNo() ."<br>";

 $dbConnector = new DbConnector();
 $dbConnector->connect();

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('error/error.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
$log->error('Hello i am from the script');