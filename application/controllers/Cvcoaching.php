<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cvcoaching extends CI_Controller {

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
	public function index()
	{
		$this->load->library('session');
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('cvcoaching/index',$data);
	}
	
	public function getData()
	{
		
		$this->load->library('upload');
		$this->load->library('session');
		
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$major=$this->input->post('major');
		$univ=$this->input->post('univ');
		
		$string = strtolower($name);
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
		
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    
			$array = explode('.', $_FILES['userfile']['name']);
			$extension = end($array);
			$this->upload->initialize($this->set_upload_options($slug,$i));
			
			if($this->upload->do_upload())
			  {
				$ret = $this->upload->data();
			  } 
			
			$img_cv[$i] = $ret['full_path'];
			$file_name = "";
			$file_name.= $_SERVER["DOCUMENT_ROOT"];
			$file_name.= '/assets/img/cv/';
			$file_name.= $slug;
			$file_name.= '_';
			$file_name.= date("Y-m-d");
			$file_name.= '_';
			$file_name.= $i;
			$file_name.= '.';
			$file_name.= $extension;
			
		}
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
		$this->email->from('cvcoaching@careerclass.id', 'Careerclass');
		$this->email->to('alianooranoviar@gmail.com');
		for($i=0; $i<$cpt; $i++)
		{
			$this->email->attach($img_cv[$i]);
			//echo $img_cv[$i].'<br>';
		}
		
		$subject = 'CVCoaching-'.$name.'-'.$univ.'-'.$major;
		$message = 
			'Nama : '.$name.'<br>
			Email : '.$email.'<br>
			Universitas : '.$univ.'<br>
			Jurusan : '.$major;
		$this->email->subject($subject);
		$this->email->message($message);

		if($this->email->send()){
			$this->session->set_flashdata('message', 'File Kamu Telah Terkirim');
			redirect('cvcoaching#cv-form');
		}
	}
	
	private function set_upload_options($slug,$i)
	{   
		$file_data = $this->upload->data();
		$ext=$file_data['file_ext'];
		//upload an image options
		$config = array();
		$config['upload_path'] = 'assets/img/cv';
		$config['allowed_types'] = 'gif|jpg|png|txt';
		$config['overwrite']     = FALSE;
		$new_name= $slug;
		$new_name.= '_';
		$new_name.= date("Y-m-d");
		$new_name.= '_';
		$new_name.= $i;
		$new_name.= $ext;
		
		$config['file_name'] = $new_name;
		//echo $new_name.'<br>';
		return $config;
	}
	
}
