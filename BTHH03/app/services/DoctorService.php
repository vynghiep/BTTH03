<?php
require_once APP_ROOT.'/app/models/Doctor.php';
class DoctorService{
    public function getAllDoctors(){
        //b1:ket noi DB
        try{
            $conn=new PDO('mysql:host=localhost;dbname=phongmach1','root','');
            $sql="SELECT * FROM bacsi";
            $stmt=$conn->query($sql);
            $doctors=[];
            while ($row =$stmt->fetch()){
                $doctor = new Doctor($row['id'],$row['tenBacSi'],$row['chuyenKhoa']);
                $doctors[]=$doctor;
            }
            return $doctors;
        }catch(PDOException $e){
                return $doctors=[];
        }
    }
}