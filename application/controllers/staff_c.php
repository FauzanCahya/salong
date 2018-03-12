<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('staff_m','model');
	    error_reporting(0);

	}

	public function index()
	{
		$dt = $this->model->get_staff_front();
		$dt_komisi = $this->model->get_komisi();

		$data = array(
			'page' => 'staff_v', 
			'dt' => $dt,
			'dt_komisi' => $dt_komisi,
			'master' => '', 
			'view' => '', 
			'title' => 'Staff', 
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
				INSERT INTO staff
				(FIRST_NAME,LAST_NAME,MOBILE_NUMBER,EMAIL,ENABLE_APPOINTMENT,LOGIN_AKSES)
				VALUES 
				('$first_name','$last_name','$mobile_number','$email','$appointment_a','$login')
			");	

			$id = $this->db->insert_id();

			$service = $this->input->post('service');

			foreach ($service as $key => $value) {
				$this->model->input_data_detail_service($id,$service[$key]);
			}



			if($this->input->post('senin') == '1'){

				$awal = $this->input->post('senin_awal');
				$akhir = $this->input->post('senin_akhir');

				$this->model->input_senin($id,$awal,$akhir);
			}

			if($this->input->post('selasa') == '1'){

				$awal = $this->input->post('selasa_awal');
				$akhir = $this->input->post('selasa_akhir');

				$this->model->input_selasa($id,$awal,$akhir);
			}

			if($this->input->post('rabu') == '1'){

				$awal = $this->input->post('rabu_awal');
				$akhir = $this->input->post('rabu_akhir');

				$this->model->input_rabu($id,$awal,$akhir);
			}

			if($this->input->post('kamis') == '1'){

				$awal = $this->input->post('kamis_awal');
				$akhir = $this->input->post('kamis_akhir');

				$this->model->input_kamis($id,$awal,$akhir);
			}

			if($this->input->post('jumat') == '1'){

				$awal = $this->input->post('jumat_awal');
				$akhir = $this->input->post('jumat_akhir');

				$this->model->input_jumat($id,$awal,$akhir);
			}

			if($this->input->post('sabtu') == '1'){

				$awal = $this->input->post('sabtu_awal');
				$akhir = $this->input->post('sabtu_akhir');

				$this->model->input_sabtu($id,$awal,$akhir);
			}

			if($this->input->post('minggu') == '1'){

				$awal = $this->input->post('minggu_awal');
				$akhir = $this->input->post('minggu_akhir');

				$this->model->input_minggu($id,$awal,$akhir);
			}
		}

		$dt_service = $this->model->data_service();

		$data = array(
			'page' => 'add_staff_v', 
			'dt' => $dt,
			'dt_service' => $dt_service,
			'master' => '', 
			'msg' => $msg,
			'view' => '', 
			'title' => 'Staff', 
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
			'title' => 'Staff', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */