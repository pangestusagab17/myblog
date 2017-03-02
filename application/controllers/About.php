<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class About extends CI_Controller {
	
		public function index()
		{
			$data = array(
					'nama' => "Bagas Rukma Pangestu",
					'nim' => "1541180173",
					'alamat' => "Jl. Raya Slorok Kec. Kromengan",
					'notelp' => "085954408225",
					'email' => "pangestu_bagas@ymail.com",
					'hobby' => "Futsal",
					 );
			$this->load->view('about',$data);		
		}
	
	}
	
	/* End of file About.php */
	/* Location: ./application/controllers/About.php */
 
