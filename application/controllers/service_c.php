<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service_c extends CI_Controller {

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
	    $this->load->model('service_m','model');
	    error_reporting(0);

	}


	public function index()
	{
		$msg = "";

		if($this->input->post('name_group')){
			$msg = 1;
			$name_group  = $this->input->post('name_group');
			

			$this->db->query("
				INSERT INTO service_group
				(NAMA_GROUP)
				VALUES 
				('$name_group')
			");
		}

		if($this->input->post('service_name')){
			$msg = 1;
			$id_group  = $this->input->post('id_group');
			$service_name  = $this->input->post('service_name');
			$duration  = $this->input->post('duration');
			$tax_app  = $this->input->post('tax_app');
			$full_price  = $this->input->post('full_price');
			$special_price  = $this->input->post('special_price');
			

			$this->db->query("
				INSERT INTO services
				(GROUP_SERVICE,NAMA,DURATION,TAX_SERVICE,FULL_PRICE,SPECIAL_PRICE)
				VALUES 
				('$id_group','$service_name','$duration','$tax_app','$full_price','$special_price')
			");
		}
		

		$get_group = $this->model->get_data_group();


		$data = array(
			'page' => 'service_v', 
			'dt' => $dt,
			'get_group' => $get_group,
			'master' => '', 
			'view' => '', 
			'title' => 'Data Service', 
		);

		$this->load->view('dashboard_v', $data);
	}

	function detail_wallet(){

		$dt = $this->model->get_detail_customer();

		$data = array(
			'page' => 'detail_transaksi_wallet_v', 
			'dt' => $dt,
			'master' => '', 
			'view' => '', 
			'title' => 'Data Wallet', 
		);

		$this->load->view('dashboard_v', $data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */