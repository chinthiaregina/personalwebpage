<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');	
	}
	
	public function index()
	{
		$data['title'] = 'Welcome';
		$data['heading'] = 'Welcome to My World';
		$data['query'] = $this->db->get('posts');
		
		$this->load->view('view_blog1', $data);
	}
	public function blog1()
	{
		$data['title'] = 'Welcome';
		$data['heading'] = 'Welcome to My World';
		$data['query'] = $this->db->get('posts');
		
		$this->load->view('view_blog', $data);
	}
	public function myfamily()
	{
		$data['title'] = 'Family';
		$data['heading'] = 'Love of My Life';
		$data['query'] = $this->db->get('myfamily');
		
		$this->load->view('view_myfamily', $data);
	}
	
	public function myprofile()
	{
		$data['title'] = 'Profile';
		$data['heading'] = 'Just Me, Myself, and I';
		$data['query'] = $this->db->get('myprofile');
		
		$this->load->view('view_myprofile', $data);
	}
	
	public function mygalery()
	{
		$data['title'] = 'Galery';
		$data['heading'] = 'My Galery Spot';
		$data['query'] = $this->db->get('mygalery');
		
		$this->load->view('view_mygalery', $data);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */