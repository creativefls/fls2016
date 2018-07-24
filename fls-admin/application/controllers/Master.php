<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
    private $crud;
    
    public function __construct()
	{
		//session_start();
        //if(!isset($_SESSION['user_id'])){
        //    redirect(base_url());
        //}
		parent::__construct();
		$this->load->library('grocery_CRUD');
        $this->crud = new grocery_CRUD();
	}
    
	public function daftar($isu)
	{
		$this->crud->set_table('daftar');
		$this->crud->set_subject('Pendaftar');
        $this->crud->columns('id','room','nama_lengkap','alamat_email','geolocation','status');
        $this->crud->display_as('id','Nomor Registrasi');
        $this->crud->display_as('nama_lengkap','Nama Lengkap');
        $this->crud->display_as('alamat_email','Alamat Email');
        $this->crud->display_as('geolocation','Download');
        $this->crud->display_as('status','Status');
        $this->crud->display_as('room','Pilihan 1');
        $this->crud->order_by("nama_lengkap");
        $this->crud->where("isu_1",$isu);
        
        $this->crud->unset_add();
        $this->crud->unset_read();
        $this->crud->unset_delete();
        //$this->crud->unset_edit();

        $this->crud->edit_fields('id','status');
        
        $this->crud->callback_column('geolocation',array($this,'_callback_geo_kota'));
        $this->crud->callback_column('room',array($this,'_callback_room'));
        
		$output = $this->crud->render();
        $output->gcrud = 1;
        $output->module = "module/blank";
		$this->load->view('gcrud',$output);
	}
    
    function artikel(){
        $this->crud->set_table('artikel');
        $this->crud->set_subject('artikel');
        $this->crud->columns('id_art','judul','isi','link_gambar');
        $this->crud->display_as('judul','Judul Artikel');
        $this->crud->display_as('isi','Isi');
        $this->crud->display_as('link_gambar','Link Gambar');

        $this->crud->order_by("id_art");

        $output = $this->crud->render();
        $output->gcrud = 1;
        $output->module = "module/blank";
        
        $this->load->view('gcrud',$output);
    }

    function sponsorship(){
        $this->crud->set_table('contact');
        $this->crud->set_subject('Sponsorship');
        $this->crud->columns('id','nama_p','nama_cu','ks','status');
        $this->crud->display_as('id','Nomor Registrasi');
        $this->crud->display_as('nama_p','Nama Perusahaan');
        $this->crud->display_as('nama_cu','Contact Person');
        $this->crud->display_as('ks','Keperluan');
        $this->crud->display_as('status','Status');

        $this->crud->order_by("status");

        $this->crud->edit_fields('id','status');

        $this->crud->unset_add();
        $this->crud->unset_delete();


        $output = $this->crud->render();
        $output->gcrud = 1;
        $output->module = "module/blank";
        
        $this->load->view('gcrud',$output);
    }
    //GCrud Callbacks    
    
    public function _callback_room($value, $row)
    {
        //$this->load->model("warnet_model");
        $tmp = "";
        $val = $row->isu_1;
        if($val == "1"){
            $tmp = "Pendidikan";
        }elseif($val == "2"){
            $tmp = "Lingkungan";
        }elseif($val == "3"){
            $tmp = "Ekonomi Kreatif";
        }elseif($val == "4"){
            $tmp = "Kearifan Lokal";
        }elseif($val == "5"){
            $tmp = "Media Massa";
        }elseif($val == "6"){
            $tmp = "Kebijakan Publik";
        }
        
        return $tmp;
    }
    
    public function _callback_geo_kota($value, $row)
    {
        //$this->load->model("warnet_model");
        return "<a href=\"".base_url('?route=module/print&email=').$row->alamat_email."\"><i class=\"fa fa-download\"></i> Download Form</a>";
    }
}