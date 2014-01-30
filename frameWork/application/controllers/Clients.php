<?php
class Clients extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('client_model');
	}

	public function index()
	{
	
	
		$data['Clients'] = $this->client_model->get_Clients();
		//$data['title'] = 'Clients archive';

		$this->load->view('header', $data);
		$this->load->view('Clients_view', $data);
		$this->load->view('footer');
	
	}
	
	public function detail()
	{
	
	   echo "in details method";
	   $id =  $this->uri->segment(3);
	 
		$data['Clients_item'] = $this->client_model->get_Client($id);
		
		/*if (empty($data['Clients_item']))
		{
			show_404();
		}
	*/
		//$data['title'] = $data['Clients_item']['title'];
	
		$this->load->view('header', $data);
		$this->load->view('Clients_detailview', $data);
		$this->load->view('footer');
	}
}

