<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('BlogModel');
	}

	public function index($page=1)
	{
		$limit = 12 ;
		$offset = ($page-1)*$limit;
		$data['post'] = $this->BlogModel->getBlogPosts($limit,$offset);
		$post_total = $this->BlogModel->countBlogPosts();
		$post_total = count($post_total);
		$page_total = ceil($post_total/$limit);
		
		$data['page_now'] = $page;
		$data['page_total'] = $page_total;
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('blog/blog',$data);
	}
	
	public function post($name)
	{
		if($name==NULL) redirect('blog');
		$data['post'] = $this->BlogModel->getPost($name);
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('blog/post',$data);
	}

	
}
