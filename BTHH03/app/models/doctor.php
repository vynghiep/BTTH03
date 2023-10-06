<?php
class Doctor{
    private $id;
    private $tenBacSi;
    private $chuyenKhoa;
    

    public function __construct($id,$tenBacSi,$chuyenKhoa)
    {
        $this->id=$id;
        $this->tenBacSi=$chuyenKhoa;
        $this->chuyenKhoa=$chuyenKhoa;
        
    }
    public function getID(){
        return $this->id;
    }
    public function gettenBacSi(){
        return $this->tenBacSi;
    }

    public function getchuyenKhoa(){
        return $this->chuyenKhoa;
    }
 
    public function setID($id)
    {   
        $this->id=$id;

    }
}