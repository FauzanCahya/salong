<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_wallet_c extends CI_Controller {

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
	    $this->load->model('user_wallet_m','model');
	    error_reporting(0);

	}



	public function index()
	{
		$msg = "";
		

		$dt = $this->model->get_user_wallet();

		$data = array(
			'page' => 'user_wallet_v', 
			'dt' => $dt,
			'master' => '', 
			'view' => '', 
			'title' => 'Data Wallet', 
		);

		$this->load->view('dashboard_v', $data);
	}

	function detail_wallet(){

		$dt = $this->model->get_detail_wallet();

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