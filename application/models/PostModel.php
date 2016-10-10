<?php
class PostModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function updatePost($data)
	{
		$change = $this->db->query
		("
			UPDATE post
			SET title = '".$data['title']."',
			title_slug = '".$data['title_slug']."',
			content = '".$data['content']."',
			content_text = '".$data['content_text']."',
			img = '".$data['img']."'
			WHERE id = ".$data['id']."
		");
		return 1;
	}
	
	public function addPost($data)
	{
		$change = $this->db->query
		("INSERT IGNORE INTO post (title,title_slug,content,content_text,img) 
		VALUES ('".$data['title']."','".$data['title_slug']."','".$data['content']."','".$data['content_text']."',
		'".$data['img']."')");
		return 1;
	}
	
	public function getLastPost()
	{
		$change = $this->db->query
		("SELECT MAX(id) from post;");
		foreach ($change->result_array() as $row)
		{
			return $row['MAX(id)'];
		}
	}
	
	public function getAllPost(){
		$query = $this->db->query("SELECT * FROM post ORDER BY id DESC ");
		return $query->result();
	}
	
	public function getPost($id){
		$query = $this->db->query("SELECT * FROM post WHERE id = ".$id." ");
		return $query->result();
	}
	
	public function deletePost($id){
		$query = $this->db->query("DELETE FROM post WHERE id = ".$id." ");
		return 1;
	}
	
	
}