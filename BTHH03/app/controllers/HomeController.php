<?php
require_once APP_ROOT.'/app/services/PatientService.php';
class HomeController{
    public function index(){
        //goi du lieu 
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();
        include_once APP_ROOT.'/app/views/home/index.php';
    }
}