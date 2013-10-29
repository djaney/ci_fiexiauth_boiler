<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activate extends CI_Controller {

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
	public function index($userId = 0,$token = '')
	{	
		$success = $this->flexi_auth->activate_user($userId, $token);
		$this->load->view('activate_view',array('success'=>$success));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */