<?php
class User_model extends CI_Model {
    
    function login($username,$password){
        $password = md5($password);
        $query = $this->db->query("SELECT *
                                    FROM `administrator`
                                    WHERE admin_username='$username'
                                        AND admin_pass='$password'");
        
        if($query->num_rows() > 0){
            return "1";
        }else{
            return "0";
        }
    }
    
    function getAdmin($username){
        $query = $this->db->query("SELECT * FROM `administrator` WHERE admin_username='$username'");
        return $query->row_array();
    }
 
}