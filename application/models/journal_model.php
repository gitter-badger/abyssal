<?php
	class Journal_Model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->library('session');
		}
		
		var $table = 'blog';
		var $table2 = 'has_tag';
		
		function get_post(){
			$query = $this->db->get($this->table);
			return $query->result();
		}
		
		function get_category(){
			$this->db->select('category');
			return $this->db->get($this->table)->result();
		}
		
		function get_month(){
			$query = $query = $this->db->query("SELECT DATE_FORMAT(date,'%M %Y') as date1 FROM ".$this->table);
			return $query->result();
		}
		
		function get_post_by_category($category){
			$query = $this->db->get_where($this->table,array('category'=>$category));
			return $query->result();
		}
		
		function get_post_by_date($date){
			$query = $this->db->get_where($this->table,array('date'=>$date));
			return $query->result();
		}
		
		function get_tag($id_blog){
			$query = $this->db->get_where($this->table2,array('id_blog'=>$id_blog));
		}
		
		function get_post_by_tag($tag){
			
		}
		
		function get_list_tag(){
			
		}
	}
?>