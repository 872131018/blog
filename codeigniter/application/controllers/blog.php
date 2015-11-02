<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	*      http://example.com/index.php/blog
	*  - or -
	*      http://example.com/index.php/blog/index
	*  - or -
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/blog/{method_name}
	* @see http://codeigniter.com/user_guide/general/urls.html
	*/
	public function index()
	{
		/*
		*TODO: When you pass the view an array, it gets an array
		*this need to be converted to use the model class
		*the view currently is set to work only for the model object
		*/
		$this->load->model("blog_model");
		$articles = $this->blog_model->get_articles_list();
		$data["articles"] = $articles;
		$this->load->view('show_blog', $data);
	}

	public function show($blogId = 0)
	{
		//Always ensure an integer
		$blogId = (int)$blogId;
		//Load the user factory
		$this->load->library("BlogFactory");
		//Create a data array so we can pass information to the view
		$data = array(
			"blogs" => $this->blogfactory->getBlogs($blogId)
		);
		//Load the view and pass the data to it
		$this->load->view("show_blog", $data);
	}
}
