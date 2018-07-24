<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
    public function index2()
	{
	   
    }
	public function index()
	{
        session_start();
        if(isset($_POST["login"])){
            $username = $this->input->post("username");
            $password = md5($this->input->post("password"));
            $query = $this->db->query("SELECT * FROM `user` WHERE user_name = '$username' AND user_password='$password'");
            if($query->num_rows() > 0){
                $tmp = $query->result_array();
                $_SESSION['user_id'] = $tmp[0]['user_id'];
                $_SESSION['user_name'] = $tmp[0]['user_name'];
                $_SESSION['user_fullname'] = $tmp[0]['user_fullname'];
            }
        }
        if(isset($_SESSION['user_id'])){
			if(!isset($_GET['route'])){
				$data['module'] = "module/dashboard";
			}else{
				$data['module'] = $_GET['route'];
			}
            $data['gcrud'] = 0;
			$data['ci'] = &$this->get_instance();
    		$this->load->view('main',$data);
        }else{
            $this->load->view('login');
        }

	}
    public function logout(){
        session_start();
        session_destroy();
        $this->index();
    }
}