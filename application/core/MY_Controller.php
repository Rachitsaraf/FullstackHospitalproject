<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // 🔐 SESSION CHECK
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('auth/login');
            exit;
        }
    }
}
