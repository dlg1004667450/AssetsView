<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends Controller {
	public $user_info;
	public function __construct() {
		parent::__construct();

	}
	public function index()
	{
		$this->load->database();
		$data['cur_title'] = array('active','','','','','','','','','');

		$this->load->model('assets_model');
		
        $data['assets_count']= $this->db->count_all('asset');
        $data['port_count']= $this->db->count_all('assets_port_service');
        $data['asset']= $this->assets_model->getEightAssets();

		$this->load->view('header',$data);
		$this->load->view('nav', $data);
		$this->load->view('sidebar_menu', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('footer');
	}
	public function help()
	{
		$this->load->database();
		$data['cur_title'] = array('','','','','','','','','','active');

		$this->load->view('header',$data);
		$this->load->view('nav', $data);
		$this->load->view('sidebar_menu', $data);
		$this->load->view('help', $data);
		$this->load->view('footer');
	}
	public function loginpage()
	{
		$this->load->view('login');
	}
	public  function login()
	 {
	  $this->load->library('form_validation');
      $this->load->database();
      $username = trim($this->input->post('username',TRUE));
      $passowrd = trim($this->input->post('passowrd',TRUE));
      $this->db->where('user_name', $username);
      $this->user_info = $this->db->get('user')->result_array();
	  $this->form_validation->set_rules('username', 'Username', 'trim|callback_username_check');
	  $this->form_validation->set_rules('password', 'Password', 'md5|callback_password_check');
	  $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

	  if ($this->form_validation->run() == FALSE)
	  {
	   $this->load->view('login');
	  }
	  else
	  {
		$userdata= array(
            'username' => $username,
            'passowrd' => $passowrd
            );

        $this->session->set_userdata($userdata);
        redirect('Dashboard/index');
	  
	 }

	}
	public function logout(){
        session_destroy();
        redirect(site_url('Dashboard/loginpage'));
    }


    public function username_check($str)
    {
        if ($str == '')
        {
            $this->form_validation->set_message('username_check', '用户名不能为空');
            return FALSE;
        }
        elseif( $this->user_info == null ){
            $this->form_validation->set_message('username_check', '用户不存在');
            return FALSE;
        }
        else
        {   
            return TRUE;
        }
    }

	public function password_check($str)
    {
        $password = isset($this->user_info[0]['user_passwd'])?$this->user_info[0]['user_passwd']:0;
        echo md5($str);
        if(md5($str) != $password){
            $this->form_validation->set_message('password_check', '密码错误');
            return FALSE;
        }
        else
        {   
            return TRUE;
        }
    }
	public function assets($id)
	{	
		$this->load->database();
		//统计文章访问数
		$this->load->library('session');
		$user_ip_name = 'user_ip_'.$id;
		if(empty($_SESSION[$user_ip_name])){
			$this->db->set('pv', 'pv+1', FALSE);
			$this->db->where('id', $id);
			$this->db->update('articles');
			$user_ip=$_SERVER["REMOTE_ADDR"]; 
			$user_ip = array($user_ip_name => $user_ip);
			$this->session->set_userdata($user_ip);		
		}
		$this->load->helper('url');
		$this->load->model('articles_model');

		$data_tmp['articles'] = $this->articles_model->getArticle($id);
		$tag_info = $this->articles_model->getTagsType();
		foreach ($data_tmp as $key => $value) {
			foreach ($value as $value1) {
				$data['article']['0']['id'] = $value1['id'];
				$data['article']['0']['title'] = $value1['title'];
				$data['article']['0']['keyword'] = $value1['keyword'];
				$data['article']['0']['description'] = $value1['description'];

				$data['article']['0']['content'] = $value1['content'];
				$data['article']['0']['category'] = $value1['category'];
				$data['article']['0']['pv'] = $value1['pv'];
				if ($value1['tag'] != ''){
					$tag_str = explode(',', $value1['tag']);
					$tag_str = implode("','", $tag_str);
					$tag_str = "('".$tag_str."')";
					$sql="select id, tag_name from tag where tag_name in {$tag_str}";
					$tag_arr = $this->db->query($sql)->result_array();
					foreach ($tag_arr as $key => $value) {
						$data['article']['0']['tag'][$value['id']]= $value['tag_name'];
					}
				}
				
				$data['article']['0']['published_at'] = $value1['published_at'];
			}
		}
		foreach ($tag_info['button_type'] as $value) {
			$tag_name = $value['tag_name'];
			$button_type["$tag_name"] = $value['tag_button_type'];
		}
		$data['button_type'] = $button_type;
		$this->load->model('category_model');
		$data['all_category'] =  $this->category_model->getAllCategory();
		//当前标题（首页，分类，标签，关于我）
		$data['cur_title'] = array('active','','','');

		$this->load->view('articles_header',$data);
		$this->load->view('menu',$data);
		$this->load->view('articles_article', $data);
		$this->load->view('footer');

	}
}
