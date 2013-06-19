<?php
	class DetailJournal extends CI_Controller{
		function __construct()
		{
			// Call the Model constructor
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('security');
			$this->load->model('Journal_Model','',TRUE);
		}
		
		var $table = 'blog';
		
		public function index()
		{
			$this->load->view('detailjournal');
		}
		
		public function getcontent($id){
			$content['data'] = $this->Journal_Model->get_content($id);
			$this->load->view('detailjournal',
		}
	}
?>