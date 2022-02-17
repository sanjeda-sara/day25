<?php
session_start();

//echo session_id();
//echo rand(10, 1000);

//$_SESSION['name']     = 'BITM';
//$_SESSION['city']     = 'Dhaka';
//$_SESSION['country']  = 'Bangladesh';
//$_SESSION['mobile']   = '12333';


require_once 'vendor/autoload.php';

use App\Classes\Home;
use App\Classes\Student;
use App\Classes\InterfaceClass;

//$home     =   new Home();
//$home     ->  index();

//$student  =   new Student();
//$student  ->  index();

$student    =   new Student();
$student    ->  manage();
