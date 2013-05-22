<?php
	class Goods_Model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->library('session');
		}
		
		var $table = 'goods';
		
		function get_product($category){
			$query = $this->db->get_where($this->table,array('category'=>$category));
			return $query->result();
		}
		
		function get_detail($id){
			$query = $this->db->get_where($this->table,array('id_goods'=>$id));
			return $query->result();
		}
	}
?>
