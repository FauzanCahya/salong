<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_reminder_c extends CI_Controller {

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
			$gender  = $this->input->post('gender');
			$last_visit = $this->input->post('last_visit');
			$nama = $this->input->post('nama');
			$messages = $this->input->post('messages');
			$date_sekarang = date('d-m-Y');
			

			$this->db->query("
				INSERT INTO reminder_date
				(NAMA_REMINDER, TYPE, INTERVAL_DATE, MESSAGES, CREATED_AT, GENDER)
				VALUES 
				('$nama', '$type_greeting','$last_visit','$messages','$date_sekarang','$gender')
			");
		}

	

		$data = array(
			'page' => 'add_reminder_v', 
			'master' => '',
			'view' => '', 
			'msg' => $msg,
			'title' => 'Add reminder', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */