<?php
/**
 * 端口服务信息
 * 数据表assets_port_service
 * @author Cryin
 * @since 2016-03-21
 */
class Service_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function getCountofservice(){
		$this->load->database();
		$assets_count= $this->db->count_all('assets_port_service');
		#echo $assets_count;
		return $assets_count;
	}
	public function getServices(){
		$this->load->database();
		$sql="select * from assets_port_service";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getServicesByID($id){
		$this->load->database();
		$sql="select * from assets_port_service where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getCountbyservice($service){
		$this->db->like('service', $service);
		$this->db->from('assets_port_service');
 		$data=$this->db->count_all_results();
		return $data;
	}
	public function getServiceDuring($offset,$row){
		$this->load->database();
		$sql="select * from assets_port_service order by create_time DESC limit {$offset},{$row}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getCountbyGroup(){
		$this->load->database();
		$sql="select service, count(service) as counts from assets_port_service group by service";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
}