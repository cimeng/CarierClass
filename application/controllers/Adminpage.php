<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpage extends CI_Controller {

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
		$this->load->model('PostModel');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('form_validation');
        $this->load->helper(array('form', 'url')); 

	}
	
	public function index()
	{
		if($this->session->login!=1)
		{
			redirect('Adminpage/loginPage');
		}
		
		$data['header']=$this->load->view('admin/header','',true);
		$data['navbar']=$this->load->view('admin/navbar','',true);
		$this->load->view('admin/index',$data);
	}
	public function getData()
	{
		$flag=1;
		$id = $this->PostModel -> getLastPost();
		$id = $id+1;
		$banner = $this->input->post('banner_show');
		$content = $this->input->post('content_post');
		$content_text = $this->input->post('content_text');
		$title = $this->input->post('title_post');
		
		$string = strtolower($title);
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
		
		$config['upload_path']   = './assets/img/post/';
		$new_name = $id;
		$new_name.= '_';
		$new_name.= date("Y-m-d");
		$config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']      = 2000; 
        $config['max_width']     = 5000; 
        $config['max_height']    = 5000;  
		$config['file_name'] = $new_name;
		$config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
			
        if ( ! $this->upload->do_upload('header_post')) {
            $error = array('error' => $this->upload->display_errors()); 
            echo $error['error'];
			$textreport = $error['error'];
			$flag = 0;
        }
			
        else { 
            $data = array('upload_data' => $this->upload->data());
			$img_data=$this->upload->data();
			$new_name.= $img_data['file_ext'];
        } 
		
		if($flag==0)
		{
			$new_name='default.png';
		}
		$data = array(
		'title' => $title,
		'title_slug' => $slug,
		'content' => $content,
		'content_text' => $content_text,
		'img' => $new_name
		);
		
		$report = $this->PostModel -> addPost($data);
		
		$this->session->set_flashdata('message', 'Tambah Post Berhasil!');
		redirect('adminpage/post_manager');
	}
	
	public function post_manager()
	{
		$data['header']=$this->load->view('admin/header','',true);
		$data['navbar']=$this->load->view('admin/navbar','',true);
		$data['posts'] = $this->PostModel -> getAllPost();
		$this->load->view('admin/post_manager',$data);
	}
	
	public function post_editor($id)
	{
		$data['header']=$this->load->view('admin/header','',true);
		$data['navbar']=$this->load->view('admin/navbar','',true);
		$data['post'] = $this->PostModel -> getPost($id);
		$this->load->view('admin/post_editor',$data);
	}
	
	public function updatePost($id)
	{
		$data['header']=$this->load->view('admin/header','',true);
		$content = $this->input->post('content_post');
		$content_text = $this->input->post('content_text');
		$title = $this->input->post('title_post');
		$string = strtolower($title);
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
		
		$config['upload_path']   = './assets/img/post/';
		$new_name = $id;
		$new_name.= '_';
		$new_name.= date("Y-m-d");
		$config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']      = 2000; 
        $config['max_width']     = 5000; 
        $config['max_height']    = 5000;  
		$config['file_name'] = $new_name;
		$config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
		$flag=1;
        if ( ! $this->upload->do_upload('header_post')) {
            $error = array('error' => $this->upload->display_errors()); 
            echo $error['error'];
			$textreport = $error['error'];
			$flag = 0;
        }
			
        else { 
            $data = array('upload_data' => $this->upload->data());
			$img_data=$this->upload->data();
			$new_name.= $img_data['file_ext'];
        } 
		
		if($flag==0)
		{
			$new_name = $this->session->img;
			unset(
				$_SESSION['img']
			);
		}
		if($banner=='on') $banner = 1;
		else $banner = 0;
		$data = array(
		'title' => $title,
		'title_slug' => $slug,
		'content' => $content,
		'content_text' => $content_text,
		'img' => $new_name,
		'id' => $id
		);
		
		$report = $this->PostModel -> updatePost($data);
		$this->session->set_flashdata('message', 'Update Post Berhasil!');
		redirect('adminpage/post_manager');
	}
	
	
	public function deletePost($id)
	{
		$data['header']=$this->load->view('admin/header','',true);
		$report = $this->PostModel -> deletePost($id);
		$this->session->set_flashdata('message', 'Post Berhasil Dihapus');
		redirect('adminpage/post_manager');
	}
	
	public function loginPage(){
		
		$data['header']=$this->load->view('admin/header','',true);
		$this->load->view('admin/login',$data);
	}
	
	public function doLogin()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$pass = hash('sha256',$pass);
		if($pass = '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5' && $username = 'admin')
		{
			$this->session->login = 1;
			redirect('adminpage/');
		}
		else
			redirect('adminpage/loginPage');
	}
	
	public function doLogOut()
	{
		unset($_SESSION['login']);
		$this->session->sess_destroy();
		redirect('adminpage','refresh');
	}
	
	
}
