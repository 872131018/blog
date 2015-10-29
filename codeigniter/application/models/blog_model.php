<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model
{

    /**
     * returns a list of articles
     * @return array
     */
    function get_articles_list(){
        $list = Array();

        $list[0] = (object)NULL;
        $list[0]->title = "first blog title";
        $list[0]->author = "author 1";

        $list[1] = (object)NULL;
        $list[1]->title = "second blog title";
        $list[1]->author = "author 2";

        return $list;
    }
}
