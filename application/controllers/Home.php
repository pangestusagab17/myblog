<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Home extends CI_Controller {
	
		public function index()
		{
			$data['awalan'] = "Selamat Datang"; 
			$this->load->view('home',$data);
		}
	
	}
	
	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */
 