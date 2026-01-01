<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function get_all_blogs()
    {
        return $this->db
            ->where('status', 1)
            ->order_by('id', 'DESC')
            ->get('blogs')
            ->result();
    }

    public function get_blog_by_slug($slug)
    {
        return $this->db
            ->where('slug', $slug)
            ->where('status', 1)
            ->get('blogs')
            ->row();
    }
}
