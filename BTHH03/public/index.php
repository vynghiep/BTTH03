<?php
require_once('../app/config/config.php');
require_once APP_ROOT.'/app/controllers/HomeController.php';
require_once APP_ROOT.'/app/controllers/DoctorController.php';

$homeController=new HomeController();
$homeController->index();
$doctorController=new DoctorController();
$doctorController->doctor();