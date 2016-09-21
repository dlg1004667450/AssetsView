<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Assets extends Controller {
	public function __construct() {
		parent::__construct();

	}
	public function index()
	{
		$data['cur_title'] = array('','active','','','','','','','','');

		$this->load->database();
		
		//加载分页类库
        $this->load->library('pagination');
        //获取分页类配置
        $config = $this->getPaginationConfig();
        $this->pagination->initialize($config);

        $row = $this->uri->segment(3);
        $row = isset($row) ? $row : 0;

        $this->load->model('assets_model');
		$data['data']= $this->assets_model->getAssetsDuring($row, $config['per_page']);

		$this->load->view('header');
		$this->load->view('nav', $data);
		$this->load->view('sidebar_menu', $data);
		$this->load->view('assets', $data);
		$this->load->view('footer');
	}
	public  function delete($id){
        $this->load->database();

        $this->db->where('id', $id);
        $this->db->delete('asset');

        redirect('/Assets/index');

    }
    public  function edit($id){
        $this->load->database();
        $data['cur_title'] = array('','active','','','','','','','','');
        if($id != 0){
     		$this->load->model('assets_model');
        	$data['data']= $this->assets_model->getAssetbyID($id);

        	$this->load->view('header');
			$this->load->view('nav', $data);
			$this->load->view('sidebar_menu', $data);
			$this->load->view('asset_edit', $data);
			$this->load->view('footer');
        }
        else
        {
             redirect('/Assets/index');
        }


    }
	public function getTextassets()
	{
		$this->load->database();
		$this->load->model('assets_model');
		$data='';
		$data.= $this->assets_model->getAssetsbyOsType('Windows 10');
		$data.=" ";
		$data.= $this->assets_model->getAssetsbyOsType('Win 7');
		$data.=" ";
		$data.= $this->assets_model->getAssetsbyOsType('Linux');
		$data.=" ";
		$data.= $this->assets_model->getAssetsbyOsType('MAC');
		$data.=" ";
		$data.= $this->assets_model->getAssetsbyOsType('Unix');
		$data.=" ";
		$data.= $this->assets_model->getCountofassets();

		echo $data;
	}
	public function getJsonassets()
	{
		$this->load->database();
		$this->load->model('assets_model');
		$data= $this->assets_model->getosTypebyGroup();

		echo json_encode($data);
	}
	private function getPaginationConfig(){
        $this->load->database();
        $this->load->helper('url');

        $config['base_url'] = site_url('Assets/index');
        $config['total_rows'] = $this->db->count_all('asset');
        $config['per_page'] = '10';
        $config['num_links'] = 2;
        $config['last_link'] = '末页';
        $config['first_link'] = '首页';
        $config['prev_link'] = false;
        $config['next_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li><li><a>...</a></li>';
        $config['last_tag_open'] = '<li><a>...</a></li><li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</li></a>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        return $config;
    }    
	
}
