<?php
class Patient{
    private $id;
    private $tenBenhNhan;
    private $ngayKham;
    private $trieuChung;
    private $idBacSi;

    public function __construct($id,$tenBenhNhan,$ngayKham,$trieuChung,$idBacSi)
    {
        $this->id=$id;
        $this->tenBenhNhan=$tenBenhNhan;
        $this->ngayKham=$ngayKham;
        $this->trieuChung=$trieuChung;
        $this->idBacSi=$idBacSi;
    }
    public function getID(){
        return $this->id;
    }
    public function gettenBenhNhan(){
        return $this->tenBenhNhan;
    }

    public function getngayKham(){
        return $this->ngayKham;
    }
    public function gettrieuChung(){
        return $this->trieuChung;
    }
    public function getidBacSi(){
        return $this->idBacSi;
    }
    public function setID($id)
    {   
        $this->id=$id;

    }
}