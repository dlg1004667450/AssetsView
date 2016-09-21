<?php
/**
 * 资产信息
 * 数据表asset
 * @author Cryin
 * @since 2016-03-21
 */
class Assets_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function getCountofassets(){
		$this->load->database();
		$assets_count= $this->db->count_all('asset');
		#echo $assets_count;
		return $assets_count;
	}
	public function getAssets(){
		$this->load->database();
		$sql="select * from asset";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getAssetbyID($id){
		$this->load->database();
		$sql="select * from asset where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getAssetsbyOsType($os_type){
		$this->db->like('os_type', $os_type);
		$this->db->from('asset');
 		$data=$this->db->count_all_results();
		return $data;
	}
	public function getAssetsDuring($offset,$row){
		$this->load->database();
		$sql="select * from asset order by create_time DESC limit {$offset},{$row}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getosTypebyGroup(){
		$this->load->database();
		$sql="select os_type, count(os_type) as counts from asset group by os_type;";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getEightAssets(){
		$this->load->database();
		$sql="select * from asset limit 8";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
}