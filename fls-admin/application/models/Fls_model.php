<?php
class Fls_model extends CI_Model {
    public function getIsu($id){
        $isu = array("1" => "Pendidikan",
                        "2" => "Lingkungan",
                        "3" => "Ekonomi Kreatif",
                        "4" => "Kearifan Lokal",
                        "5" => "Media Massa",
                        "6" => "Kebijakan Publik");
        return $isu[$id];
        //return "aa";
    }

    function get1(){
        $query = $this->db->query("SELECT COUNT(isu_1) FROM daftar WHERE isu_1 = 1");
        return $query->result_array();
    }

    function get2(){
        $query = $this->db->query("SELECT COUNT(isu_1) FROM daftar WHERE isu_1 = 2");
        return $query->result_array();
    }

    function get3(){
        $query = $this->db->query("SELECT COUNT(isu_1) FROM daftar WHERE isu_1 = 3");
        return $query->result_array();
    }
    function get4(){
        $query = $this->db->query("SELECT COUNT(isu_1) FROM daftar WHERE isu_1 = 4");
        return $query->result_array();
    }
    function get5(){
        $query = $this->db->query("SELECT COUNT(isu_1) FROM daftar WHERE isu_1 = 5");
        return $query->result_array();
    }
    function get6(){
        $query = $this->db->query("SELECT COUNT(isu_1) FROM daftar WHERE isu_1 = 6");
        return $query->result_array();
    }
}