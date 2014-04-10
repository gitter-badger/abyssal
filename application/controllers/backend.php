<?php
	class Backend extends CI_Controller{
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
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_dashboard');
		}
		public function view_goods()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_goods_view');
		}
		public function add_goods()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_goods_add');
		}
		
		public function manage_message()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_manage_message');
		}
		public function edit_contact()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_edit_contact');
		}
		public function story()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_story');
		}
		public function view_blog()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_blog_view');
		}
		public function add_blog()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_blog_add');
		}
		public function setting()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_setting');
		}
	}
?>