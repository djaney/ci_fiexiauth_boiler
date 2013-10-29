<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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
	
	
	public function login(){
		$this->load->helper('api_helper');
		
		$params = apiGetPayload();
		$result = $this->flexi_auth->login(isset($params->email)?$params->email:'',isset($params->password)?$params->password:'',isset($params->remember)?true:false);
		apiOut($result,$this->flexi_auth->error_messages());
	}
	
	public function register(){
		$this->load->helper('api_helper');
		
		$params = apiGetPayload();
		$this->load->library('Flexi_auth');
		$result = $this->flexi_auth->insert_user(
			isset($params->email)?$params->email:'',
			'',
			isset($params->password)?$params->password:'',
			array(
				'fname'=>isset($params->fname)?$params->fname:'',
				'lname'=>isset($params->lname)?$params->lname:''
			)
		);
		apiOut($result,$this->flexi_auth->error_messages());
		
	}
	
	public function reactivate(){
		$this->load->helper('api_helper');
		$success = $this->flexi_auth->resend_activation_token($this->input->get('email'));
		
		apiOut($success,$this->flexi_auth->error_messages());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */