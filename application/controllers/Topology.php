<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Topology extends Controller {
	public function __construct() {
		parent::__construct();

	}
	public function index()
	{
		$data['cur_title'] = array('','','','active','','','','','','');

		$this->load->database();
		

		$this->load->view('header');
		$this->load->view('nav', $data);
		$this->load->view('sidebar_menu', $data);
		$this->load->view('topology', $data);
		$this->load->view('footer');
	}

	public function getJsontopo()
	{
		$this->load->database();
		$this->load->model('topology_model');
		
        $data['nodes']= $this->topology_model->gettopologydata();

        $data['links']= $this->topology_model->gettopologylinks();
        $data['categories']= $this->topology_model->getassetTypebyGroup();
		echo json_encode($data,JSON_NUMERIC_CHECK);
	}

}
