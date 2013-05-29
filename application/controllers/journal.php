<?php
	class Journal extends CI_Controller{
		function __construct()
		{
			// Call the Model constructor
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->helper('date');
			$this->load->library('pagination');
			$this->load->helper('security');
			$this->load->model('Journal_Model','',TRUE);
		}
		public function index()
		{
			$content['data'] = $this->Journal_Model->get_post();
			$content['data1'] = $this->Journal_Model->get_month();
			$this->load->view('journal',$content);
		}
	}
?>