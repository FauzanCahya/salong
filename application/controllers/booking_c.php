<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking_c extends CI_Controller {

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
		$data = array(
			'page' => 'booking_v', 
			'master' => '', 
			'view' => '', 
			'title' => 'Booking', 
		);

		$this->load->view('dashboard_v', $data);
	}

	function wa(){
		                            $data = [
    'phone' => '6287751425230', // Receivers phone
    'body' => 'Booking anda di salon alex kurang 1 jam lagi ......', // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$url = 'https://eu1.whatsapp.chat-api.com/instance479/message?token=86e876abeb2980';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */