<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('session');
    }

    public function login()
    {
        // STEP 1: Already logged in → dashboard
        if ($this->session->userdata('admin_logged_in')) {
            redirect('admin/dashboard');
        }

        // STEP 2: Handle login submit
        if ($this->input->post()) {

            $email    = $this->input->post('email');
            $password = $this->input->post('password');

            $admin = $this->Admin_model->get_admin_by_email($email);

            // STEP 3: Verify credentials
            if ($admin && password_verify($password, $admin->password)) {

                // STEP 4: Capture IP
                $ip = $this->input->ip_address();

                // STEP 5: Update login info
                $this->db->where('id', $admin->id)->update('admins', [
                    'last_login_ip' => $ip,
                    'last_login_at' => date('Y-m-d H:i:s')
                ]);

                // STEP 6: Set session
                $this->session->set_userdata([
                    'admin_id'        => $admin->id,
                    'admin_name'      => $admin->name,
                    'admin_logged_in' => true,
                    'last_login_ip'   => $ip
                ]);

                // STEP 7: Redirect
                redirect('admin/dashboard');

            } else {
                // STEP 8: Invalid login
                $this->session->set_flashdata('error', 'Invalid login credentials');
                redirect('auth/login');
            }
        }

        // STEP 9: Load login view
        $this->load->view('admin/auth/login');
    }

    public function logout()
    {
        // STEP 10: Logout
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
