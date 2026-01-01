<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
    }

    // BLOG LIST PAGE
    public function index()
    {
        $data['blogs'] = $this->Blog_model->get_all_blogs();

        $this->load->view('includes/header');
        $this->load->view('blog/blog_list', $data);
        $this->load->view('includes/footer');
    }

    // SINGLE BLOG PAGE
    public function view($slug)
    {
        $data['blog'] = $this->Blog_model->get_blog_by_slug($slug);

        if (!$data['blog']) {
            show_404();
        }

        $this->load->view('includes/header');
        $this->load->view('blog/blog_single', $data);
        $this->load->view('includes/footer');
    }
}
