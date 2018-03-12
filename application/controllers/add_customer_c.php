<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_customer_c extends CI_Controller {

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


		if($this->input->post('mobile_number')){
			$msg = "1";
			$mobile_number = $this->input->post('mobile_number');
			$cust_name = $this->input->post('cust_name');
			$cust_id = $this->input->post('cust_id');
			$email_id = $this->input->post('email_id');
			$dob = $this->input->post('dob');
			$locat = $this->input->post('locat');
			$kota = $this->input->post('kota');
			$gender = $this->input->post('gender');
			$cust_note = $this->input->post('cust_note');
			$date_sekarang = date('d-m-Y');

			$this->db->query("
				INSERT INTO customer
				(NAMA,MOBILE_NUMBER, CUSTOMER_ID, EMAIL, DOB, ALAMAT, KOTA, GENDER, NOTE, WALLET, STATUS, CREATED_AT)
				VALUES 
				('$cust_name','$mobile_number','$cust_id','$email_id','$dob','$locat','$kota','$gender','$cust_note','0','AKTIF','$date_sekarang')
			");

			$this->model->update_wallet_customer($filter_customer,$nominal);
		}


		$data = array(
			'page' => 'add_customer_v', 
			'dt' => $dt,
			'dt_customer' => $dt_customer,
			'master' => '', 
			'msg' => $msg,
			'view' => '', 
			'title' => 'Data Tambah Customer', 
		);

		$this->load->view('dashboard_v', $data);

		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */