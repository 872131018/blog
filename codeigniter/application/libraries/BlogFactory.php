<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BlogFactory
{
	private $_ci;

	function __construct()
  {
		//When the class is constructed get an instance of codeigniter so we can access it locally
		$this->_ci =& get_instance();
		//Include the blog_model so we can use it
		$this->_ci->load->model("blog_model");
  }

    public function getBlogs($id = 0)
		{
			//Are we getting an individual user or are we getting them all
			if($id > 0)
			{
				//Getting an individual user
				$query = $this->_ci->db->get_where("user", array("id" => $id));
				//Check if any results were returned
				if ($query->num_rows() > 0)
				{
					//Pass the data to our local function to create an object for us and return this new object
					return $this->createObjectFromData($query->row());
				}
				return false;
			}
			else
			{
				//Getting all the users
				$query = $this->_ci->db->select("*")->from("blog")->get();
				//Check if any results were returned
				if ($query->num_rows() > 0)
				{
					//Create an array to store users
					$blogs = array();
					//Loop through each row returned from the query
					foreach ($query->result() as $row)
					{
						//Pass the row data to our local function which creates a new user object with the data provided and add it to the users array
						$blogs[] = $this->createObjectFromData($row);
					}
					//Return the users array
					return $blogs;
				}
				return false;
			}
    }

    public function createObjectFromData($row)
		{
			//Create a new user_model object
			$blog = new Blog_Model();
			//Set the ID on the user model
			$blog->setId($row->id);
			//Set the username on the user model
			$blog->setTitle($row->title);
			//Set the password on the user model
			$blog->setContent($row->content);
			//set the author on the blog model
			$blog->setAuthor($row->author);
			//Return the new user object
			return $blog;
    }

}
