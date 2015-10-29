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
        //echo "Hello World";
				$this->load->model("blog_model");
        $articles = $this->blog_model->get_articles_list();
        $data["articles"] = $articles;
        $this->load->view('show_blog', $data);
    }
}
