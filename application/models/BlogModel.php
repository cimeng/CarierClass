<?php
class BlogModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function getBlogPosts($limit,$offset){
		
		$query = $this->db->query("SELECT * FROM post LIMIT ".$offset.",".$limit."");
		return $query->result();
	}
	
	public function countBlogPosts(){
		
		$query = $this->db->query("SELECT 1 FROM post");
		return $query->result();
	}


}