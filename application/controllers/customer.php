<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {//customer must be uppercase but must match the file name (even though the file is lower case)

	public function index($id=0)
	{
		
		$this->load->model('Customers_model');
		$this->config->set_item('title', 'Customer title');
		$data['query']=$this->Customers_model->get_customers($id);			
		$this->load->view('customer/default', $data);//customer becomes a subfolder,
		
	}

}