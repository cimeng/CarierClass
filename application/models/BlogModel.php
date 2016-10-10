<?php
class BlogModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function getBlogPosts($limit,$offset){
		
		$query = $this->db->query("SELECT * FROM  post ORDER BY id DESC LIMIT ".$offset.",".$limit."");
		return $query->result();
	}
	
	public function countBlogPosts(){
		
		$query = $this->db->query("SELECT 1 FROM post");
		return $query->result();
	}
	
	public function getPost($slug){
		
		$query = $this->db->query("SELECT * FROM post WHERE title_slug = '".$slug."'");
		return $query->result();
	}


}