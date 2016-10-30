<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	
	public function index()
	{
		$this->load->library('session');
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		
		$limit = 4 ;
		$offset = 0;
		$data['post'] = $this->BlogModel->getBlogPosts($limit,$offset);
		
		$this->load->view('home', $data);
	}
	
	public function sendContact()
	{
		$this->load->library('session');
		
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$subject=$this->input->post('subject');
		$isi=$this->input->post('isi');
		
		$string = strtolower($name);
		
		$email_config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'mail.careerclass.id',
            'smtp_port' => '587',
            'smtp_user' => 'admin@careerclass.id',
            'smtp_pass' => 'qwerty1234',
            'mailtype'  => 'html',
            'starttls'  => true,
            'newline'   => "\r\n"
        );
		
		$this->load->library('email', $email_config);
		$this->email->from('admin@careerclass.id', 'Careerclass');
		$this->email->to('info.careerclass@gmail.com');
		
		$subject = 'ContactUs-'.$subject;
		$message = 
			'Nama : '.$name.'<br>
			Email : '.$email.'<br><br><hr>'
			.$isi;
		$this->email->subject($subject);
		$this->email->message($message);
		
		if($this->email->send()){
			$this->session->set_flashdata('message', 'Pesan Kamu Telah Terkirim');
			redirect('Home#contact');
		}
	}
}
