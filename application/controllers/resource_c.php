<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resource_c extends CI_Controller {

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

	function __construct()
	{
		parent::__construct();
	    $this->load->model('resource_m','model');
	    error_reporting(0);

	}



	public function index()
	{
		$msg = "";
		

		$dt = $this->model->get_resource();

		$data = array(
			'page' => 'resource_v', 
			'dt' => $dt,
			'master' => '', 
			'view' => '', 
			'title' => 'Data Resource', 
		);

		$this->load->view('dashboard_v', $data);
	}

	function tambah_data(){

		$msg = "";

		if($this->input->post('nama')){
			$msg = "1";

			$nama = $this->input->post('nama');
			$desc = $this->input->post('desc');

			$this->db->query("
				INSERT INTO resource
				(NAMA,DESCRIPTION)
				VALUES 
				('$nama','$desc')
			");
		}

		$data = array(
			'page' => 'add_resource_v', 
			'dt' => $dt,
			'msg' => $msg,
			'master' => '', 
			'view' => '', 
			'title' => 'Data Resource', 
		);

		$this->load->view('dashboard_v', $data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */