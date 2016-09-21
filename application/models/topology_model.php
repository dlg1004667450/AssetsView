<?php
/**
 * 网络拓扑信息
 * 数据表topo_relation
 * @author Cryin
 * @since 2016-09-20
 */
class Topology_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function getCountoftopo(){
		$this->load->database();
		$topo_count= $this->db->count_all('topo_relation');
		return $topo_count;
	}
	
	public function getAssetbyID($id){
		$this->load->database();
		$sql="select * from topo_relation where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getAssetsDuring($offset,$row){
		$this->load->database();
		$sql="select * from topo_relation order by create_time DESC limit {$offset},{$row}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getassetTypebyGroup(){
		$this->load->database();
		$sql="select asset_type.name from topo_relation left join asset_type on topo_relation.asset_type=asset_type.id group by asset_type;";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function gettopologydata(){
		$this->load->database();
		$sql="select asset_type as category,ip as name,layer as value from topo_relation;";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function gettopologylinks(){
		$this->load->database();
		$sql="select topo_relation.ip as source,topo_relation.parent_ip as target from topo_relation;";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
}