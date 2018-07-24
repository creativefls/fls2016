<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		//$this->load->model('gmodel');
		$this->load->library('session');
	}

	public function index()
	{
		$var['var_judul']	= 'Future Leader Summit 2016';
		$var['deskripsi']	= 'Future Leader Summit (FLS) adalah konferensi nasional pemuda tahunan yang digagas oleh Nusantara Muda sejak tahun 2011. Acara ini ditujukan untuk mengintegrasikan pemuda-pemuda Indonesia untuk memaksimalkan kontribusi untuk bangsa Indonesia.';
		
		//$var['var_breadcumb'] =array("Home","Event","Basic Traning For Next Generation");
		$var['slider']		= 'ada';
		$var['var_custom_css']	= 'slider';
		$var['var_custom_js']	= 'slider';
		$var['modul'] 		= 'layout/contain';

		$this->load->view('home',$var);
	}

	public function comingsoon(){
		$var['var_judul']	= 'Future Leader Summit 2016';
		$var['deskripsi']	= 'Future Leader Summit (FLS) adalah konferensi nasional pemuda tahunan yang digagas oleh Nusantara Muda sejak tahun 2011. Acara ini ditujukan untuk mengintegrasikan pemuda-pemuda Indonesia untuk memaksimalkan kontribusi untuk bangsa Indonesia.';
		
		//$var['var_breadcumb'] =array("Home","Event","Basic Traning For Next Generation");
		$var['slider']		= 'ada';
		$var['var_custom_css']	= 'slider';
		$var['var_custom_js']	= 'slider';
		$var['modul'] 		= 'layout/comingsoon';

		$this->load->view('home',$var);
	}
	public function agenda(){
		$var['var_judul']		= "Timeline Future Leader Summit 2016";
		$var['deskripsi'] 		= "Timeline Future Leader Summit 2016";
		$var['var_breadcumb'] 	= array("Home","Agenda");
		//$var['var_breadcumb'] 	= null;
		$var['slider'] 			= null;
		$var['var_custom_css'] 	= 'agenda';
		$var['var_custom_js'] 	= 'foto_kegiatan';
		$var['modul'] 			= "event/timeline";
		$this->load->view('home', $var);
	}
	public function review(){
		$var['var_judul']		= "Review Future Leader Summit";
		$var['deskripsi'] 		= "Review Future Leader Summit";
		$var['var_breadcumb'] 	= array("Home","Review");
		//$var['var_breadcumb'] 	= null;
		$var['slider'] 			= null;
		$var['var_custom_css'] 	= 'agenda';
		$var['var_custom_js'] 	= 'foto_kegiatan';
		$var['modul'] 			= "event/about";
		$this->load->view('home', $var);
	}
	public function sponsor(){
			$var['var_judul']		= "Timeline Future Leader Summit 2016";
			$var['deskripsi'] 		= "Timeline Future Leader Summit 2016";
			$var['var_breadcumb'] 	= array("Home","Sponsor");
			//$var['var_breadcumb'] 	= null;
			$var['slider'] 			= null;
			$var['var_custom_css'] 	= 'foto_kegiatan';
			$var['var_custom_js'] 	= 'foto_kegiatan';
			$var['modul'] 			= "event/sponsor";
			$this->load->view('home', $var);
		}

	public function gallery(){
		$var['var_judul']		= "Galery Future Leader Summit";
		$var['deskripsi'] 		= "Galery Future Leader Summit";
		$var['var_breadcumb'] 	= array("Home","Gallery");
		//$var['var_breadcumb'] 	= null;
		$var['slider'] 			= null;
		$var['var_custom_css'] 	= 'foto_kegiatan';
		$var['var_custom_js'] 	= 'foto_kegiatan';
		$var['modul'] 			= "event/gallery";
		$this->load->view('home', $var);
	}

	public function notfound()
	{
		$var['var_judul']	 	= 'Error 404 !';
		$var['deskripsi'] 		= 'Halaman yang anda cari tidak kami temukan, periksalah kembali alamat yang telah Anda buka';		
		$var['var_breadcumb'] 	= array("Home","404");
		$var['slider'] 			= null;
		$var['var_custom_css']	= 'divisi';
		$var['var_custom_js']	= 'divisi';

		$var['modul']			= 'notfound';
		$this->load->view('home',$var);

	}

 	public function contact()
	{
		$var['var_judul']		= "Contact Us";
		$var['deskripsi'] 		= "Kirim pertanyaan ke DNCC";
		$var['var_breadcumb'] 	= array("Home","Contact");
		$var['slider'] 			= null;
		$var['var_custom_css']	= 'contact';
		$var['var_custom_js']	= 'contact';
		$var['modul'] 			= "layout/contact";
		$this->load->view('home', $var);
 	}

 	public function contact_add()
 	{
 		$query = $this->gmodel->contact();
 		if ($query) {
 			$this->session->set_flashdata('info', '<strong><i class="fa  fa-check"></i> Pesan berhasil terkirim !</strong> Segera mungkin kami akan membalasanya, Terima Kasih !');
 			redirect('contact','refresh');
 		}
 	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */