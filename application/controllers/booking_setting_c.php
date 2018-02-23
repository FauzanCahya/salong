<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking_setting_c extends CI_Controller {

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
		$dt = $this->db->query("SELECT * FROM booking_setting WHERE ID = '1'")->row();

		if($this->input->post('jam')){

			$msg = 1;
			$jam  = $this->input->post('jam');
			$till_days  = $this->input->post('till_days');
			$display_custom = $this->input->post('display_custom');

			$this->db->query("
				UPDATE booking_setting SET BE_DONE = '$jam' ,
										   TILL_DAYS = '$till_days' ,
										   DISPLAY_CUSTOM = '$display_custom'
									   WHERE ID = '1'
			");
		}

		$data = array(
			'page' => 'booking_setting_v', 
			'master' => '', 
			'dt' => $dt ,
			'msg' => $msg ,
			'view' => '', 
			'title' => 'Booking Setting', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */