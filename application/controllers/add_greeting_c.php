<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_greeting_c extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */



	public function index()
	{
		$msg = "";
		
		if($this->input->post('nama')){
			$msg = 1;
			$type_greeting  = $this->input->post('type_greeting');
			$nama  = $this->input->post('nama');
			$messages = $this->input->post('messages');
			$send_before = $this->input->post('send_before');
			$greeting_date = $this->input->post('greeting_date');
			$date_sekarang = date('d-m-Y');
			$end_date = date('d-m-Y', strtotime($greeting_date.' - '.$send_before.' days'));
			

			$this->db->query("
				INSERT INTO greeting
				(TYPE_GREETING, NAMA, MESSAGE, INTERVAL_DATE, CREATED_DATE, DATE_GREETING, SEND_GREETING)
				VALUES 
				('$type_greeting', '$nama','$messages','$send_before','$date_sekarang','$greeting_date','$end_date')
			");
		}

	

		$data = array(
			'page' => 'add_greeting_v', 
			'master' => '',
			'view' => '', 
			'msg' => $msg,
			'title' => 'Add Greeting', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */