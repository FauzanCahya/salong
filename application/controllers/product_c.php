<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('product_m','model');
	    error_reporting(0);

	}

	public function index()
	{
		$dt = $this->model->get_product_front();
		$dt_komisi = $this->model->get_komisi();

		$data = array(
			'page' => 'Product_v', 
			'dt' => $dt,
			'dt_komisi' => $dt_komisi,
			'master' => '', 
			'view' => '', 
			'title' => 'product', 
		);

		$this->load->view('dashboard_v', $data);
	}

	function tambah_data(){

		$msg = "";


		if($this->input->post('first_name')){
			$msg = "1";
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$mobile_number = $this->input->post('mobile_number');
			$email = $this->input->post('email');
			$login_akses = $this->input->post('login_akses');
			$appointment = $this->input->post('appointment');
			if($login_akses == '1'){
				$login = 'Enabled';
			}else{
				$login = 'Disabled';
			}

			if($appointment == '1'){
				$appointment_a = 'Enabled';
			}else{
				$appointment_a = 'Disabled';
			}

			$this->db->query("
				INSERT INTO product
				(FIRST_NAME,LAST_NAME,MOBILE_NUMBER,EMAIL,ENABLE_APPOINTMENT,LOGIN_AKSES)
				VALUES 
				('$first_name','$last_name','$mobile_number','$email','$appointment_a','$login')
			");	

			$id = $this->db->insert_id();

			$service = $this->input->post('service');

			foreach ($service as $key => $value) {
				$this->model->input_data_detail_service($id,$service[$key]);
			}



			
		}

		$dt_service = $this->model->data_service();

		$data = array(
			'page' => 'add_product_v', 
			'dt' => $dt,
			'dt_service' => $dt_service,
			'master' => '', 
			'msg' => $msg,
			'view' => '', 
			'title' => 'Product', 
		);

		$this->load->view('dashboard_v', $data);
	}

	function tambah_data_target(){

		$msg = "";


		if($this->input->post('nama')){
			$msg = "1";
			$nama = $this->input->post('nama');
			$period = $this->input->post('period');
			$item_list = $this->input->post('item_list');
			$from_komisi = str_replace(',', '', $this->input->post('from_komisi'));
			$to_komisi = str_replace(',', '', $this->input->post('to_komisi'));
			$komisi_by = $this->input->post('komisi_by');
			$value_komisi = str_replace(',', '', $this->input->post('value_komisi'));
			
			$this->db->query("
				INSERT INTO komisi_profile
				(NAMA,PERIOD,TYPE_KOMISI)
				VALUES 
				('$nama','$period','Target')
			");	

			$id = $this->db->insert_id();

			
			foreach ($item_list as $key => $value) {
				$this->model->input_item_komisi($id,$item_list[$key]);
			}

			foreach ($from_komisi as $key => $value) {
				$this->model->input_detail_komisi_target($id,$from_komisi[$key] , $to_komisi[$key], $komisi_by[$key], $value_komisi[$key]);
			}

		}

		$dt_service = $this->model->data_service();

		$data = array(
			'page' => 'add_komisi_target_v', 
			'dt' => $dt,
			'dt_service' => $dt_service,
			'master' => '', 
			'msg' => $msg,
			'view' => '', 
			'title' => 'Product', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */