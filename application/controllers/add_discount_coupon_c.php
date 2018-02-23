<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_discount_coupon_c extends CI_Controller {

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
			$nama  = $this->input->post('nama');
			$kode_kupon  = $this->input->post('kode_kupon');
			$min_bill = $this->input->post('min_bill');
			$coupon_next = $this->input->post('coupon_next');
			$coupon_valid = $this->input->post('coupon_valid');
			$terms_condition = $this->input->post('terms_condition');
			$date_sekarang = date('d-m-Y');
			$end_date = date('d-m-Y', strtotime($date_sekarang.' + '.$coupon_valid.' days'));
			

			$this->db->query("
				INSERT INTO discount_coupon
				(NAME, MINIMUM_BILL, COUPON_NEXT, COUPON_VALIDITY, TERMS_CONDITION, CREATED_DATE, END_DATE,KODE_KUPON)
				VALUES 
				('$nama', '$min_bill','$coupon_next','$coupon_valid','$terms_condition','$date_sekarang','$end_date','$kode_kupon')
			");
		}

	

		$data = array(
			'page' => 'add_discount_coupon_v', 
			'master' => '',
			'view' => '', 
			'msg' => $msg,
			'title' => 'Dashboard', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */