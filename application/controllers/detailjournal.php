<?php
	class DetailJournal extends CI_Controller{
		function __construct()
		{
			// Call the Model constructor
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('security');
		}
		public function index()
		{
			$this->load->view('detailjournal');
		}
	}
?>