<?php
require_once APP_ROOT.'/app/services/DoctorService.php';
class DoctorController{
   
    public function doctor(){
        $doctorService = new DoctorService();
        $doctors = $doctorService->getAllDoctors();
        include_once APP_ROOT.'/app/views/home/doctor.php';
    }
}