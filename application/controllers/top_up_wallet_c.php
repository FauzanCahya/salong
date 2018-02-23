<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top_up_wallet_c extends CI_Controller {

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
		$dt_customer = $this->model->get_cust();

		if($this->input->post('filter_customer')){
			$msg = "1";
			$filter_customer = $this->input->post('filter_customer');
			$nominal = str_replace(',', '', $this->input->post('nominal'));

			$date_sekarang = date('d-m-Y');

			$this->db->query("
				INSERT INTO detail_transaksi_wallet
				(ID_CUSTOMER,NOMINAL_WALLET,STATUS, TANGGAL, ASAL_CUSTOMER, TYPE)
				VALUES 
				('$filter_customer','$nominal','MASUK','$date_sekarang','ADMIN','TOP UP')
			");

			$this->model->update_wallet_customer($filter_customer,$nominal);
		}


		$data = array(
			'page' => 'top_up_wallet_v', 
			'dt' => $dt,
			'dt_customer' => $dt_customer,
			'master' => '', 
			'msg' => $msg,
			'view' => '', 
			'title' => 'Data Wallet', 
		);

		$this->load->view('dashboard_v', $data);

		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */