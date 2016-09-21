<?php
/**
 * 账号信息
 * 数据表user
 * @author Cryin
 * @since 2016-03-21
 */
class Account_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function getUserprofile($id=1){
		$this->load->database();
		$sql="select * from user where user_id = {$id}";
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
	public function updateuser($data){
		$this->load->database();
		$this->db->where('user_id', 1);
		$this->db->update('user', $data);
	}
}