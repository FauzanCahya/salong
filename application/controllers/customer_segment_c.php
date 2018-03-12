<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_segment_c extends CI_Controller {

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
	    $this->load->model('customer_m','model');
	    error_reporting(0);

	}


	public function index()
	{
		$msg = "";
		

		$dt = $this->model->get_customer_front();
		$cust_exs = $this->model->get_cust_excisting();
		$cust_act = $this->model->get_cust_active();
		$cust_chun = $this->model->get_cust_chun();
		$cust_deac = $this->model->get_cust_deactive();

		$data = array(
			'page' => 'customer_segment_v', 
			'dt' => $dt,
			'cust_exs' => $cust_exs,
			'cust_act' => $cust_act,
			'cust_chun' => $cust_chun,
			'cust_deac' => $cust_deac,
			'master' => '', 
			'view' => '', 
			'title' => 'Data Customer', 
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