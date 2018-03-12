<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_c extends CI_Controller {

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
		// Sample php code for commentThreads.list

		// function commentThreadsListByVideoId($service, $part, $params) {
		//     $params = array_filter($params);
		//     $response = $service->commentThreads->listCommentThreads(
		//         $part,
		//         $params
		//     );

		//     print_r($response);
		// }

		// commentThreadsListByVideoId($service,
		//     'snippet,replies', 
		//     array('videoId' => '6nV1wJRLbqs'));

		$data = array(
			'page' => 'front_v', 
			'master' => '', 
			'view' => '', 
			'title' => 'Dashboard', 
		);

		$this->load->view('dashboard_v', $data);
	}

	




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */