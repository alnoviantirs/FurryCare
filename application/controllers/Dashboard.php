<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  
  public function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in') != TRUE) {			
			redirect('login');
		}
	}
	public function index()
	{
    $data['main_view'] = 'dashboard_view';
		$this->load->view('template_view', $data);
	}
}
