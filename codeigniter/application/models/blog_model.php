<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model
{
	/*
  * A private variable to represent each column in the database
  */
  private $_id;
  private $_title;
  private $_content;
	private $_author;

  function __construct()
  {
    parent::__construct();
  }

	/*
  * Class Methods
  */

  /**
  * Commit method, this will comment the entire object to the database
  */
  public function commit()
  {
    $data = array(
      'id' => $this->_id,
      'title' => $this->_title,
			'content' => $this->_content,
			'author' => $this->_author
    );

    if($this->_id > 0)
		{
      //We have an ID so we need to update this object because it is not new
      if($this->db->update("blog", $data, array("id" => $this->_id)))
			{
        return true;
      }
    }
		else
		{
      //We dont have an ID meaning it is new and not yet in the database so we need to do an insert
      if ($this->db->insert("blog", $data))
			{
        //Now we can get the ID and update the newly created object
        $this->_id = $this->db->insert_id();
        return true;
      }
    }
    return false;
  }


	/**
	* returns a list of articles
	* @return array
	*/
	function get_articles_list()
	{
		$list = Array();

		$list[0] = (object)NULL;
		$list[0]->title = "first blog title";
		$list[0]->author = "author 1";

		$list[1] = (object)NULL;
		$list[1]->title = "second blog title";
		$list[1]->author = "author 2";

		return $list;
	}

	/*
  * SET's & GET's
  * Set's and get's allow you to retrieve or set a private variable on an object
  */
	public function getId()
	{
		return $this->_id;
	}
	public function setId($value)
	{
		$this->_id = $value;
	}

	public function getTitle()
	{
		return $this->_title;
	}
	public function setTitle($value)
	{
		$this->_title = $value;
	}

	public function getContent()
	{
		return $this->_content;
	}
	public function setContent($value)
	{
		$this->_content = $value;
	}

	public function getAuthor()
	{
		return $this->_author;
	}
	public function setAuthor($value)
	{
		$this->_author = $value;
	}
}
