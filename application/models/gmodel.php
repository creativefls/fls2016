<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gmodel extends CI_Model {

	public function contact()
	{
		$nama 	= $this->input->post('nama_cu');
		$nama_p 	= $this->input->post('nama_p');
		$email 	= $this->input->post('email_cu');
		$ks 	= $this->input->post('ks');
		$no_telp 	= $this->input->post('no_telp');
		$pesan 	= $this->input->post('pesan_cu');
	
		$data = array(
			'nama_p' => $nama_p,
			'nama_cu' => $nama,
			'email_cu' => $email,
			'no_telp' => $no_telp,
			'pesan' => $pesan,
			'ks' => $ks
			);

		return $this->db->insert('contact', $data);
	}

}

/* End of file gmodel.php */
/* Location: ./application/models/gmodel.php */