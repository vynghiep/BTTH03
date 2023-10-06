<?php
require_once APP_ROOT.'/app/models/Patient.php';
class PatientService{
    public function getAllPatients(){
        //b1:ket noi DB
        try{
            $conn=new PDO('mysql:host=localhost;dbname=phongmach1','root','');
            $sql="SELECT * FROM benhnhan";
            $stmt=$conn->query($sql);
            $patients=[];
            while ($row =$stmt->fetch()){
                $patient = new Patient($row['id'],$row['tenBenhNhan'],$row['ngayKham'],$row['trieuChung'],$row['idBacSi']);
                $patients[]=$patient;
            }
            return $patients;
        }catch(PDOException $e){
                return $patients=[];
        }
    }
}