<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // DASHBOARD
    public function dashboard()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }

    // CHANGE PASSWORD
    public function change_password()
    {
        if ($this->input->post()) {

            $old = $this->input->post('old_password');
            $new = $this->input->post('new_password');
            $confirm = $this->input->post('confirm_password');

            if ($new !== $confirm) {
                $this->session->set_flashdata('error', 'Passwords do not match');
                redirect('admin/change_password');
                return;
            }

            $admin_id = $this->session->userdata('admin_id');
            $admin = $this->db->get_where('admins', ['id' => $admin_id])->row();

            if (!password_verify($old, $admin->password)) {
                $this->session->set_flashdata('error', 'Old password incorrect');
                redirect('admin/change_password');
                return;
            }

            $hash = password_hash($new, PASSWORD_DEFAULT);

            $this->db->where('id', $admin_id)->update('admins', [
                'password' => $hash
            ]);

            $this->session->set_flashdata('success', 'Password changed successfully');
            redirect('admin/change_password');
            return;
        }

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/change_password');
        $this->load->view('admin/layout/footer');
    }

    // ADD BLOG
    public function add_blog()
    {
        if ($this->input->post()) {

            // STEP 1: IMAGE UPLOAD CONFIG
            $config['upload_path'] = FCPATH . 'assets/uploads/blogs/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            // STEP 2: UPLOAD IMAGE
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/add_blog');
                return;
            }

            $uploadData = $this->upload->data();
            $image_name = $uploadData['file_name'];

            // STEP 3: CREATE SLUG
            $slug = url_title($this->input->post('title'), '-', true);

            // STEP 4: SAVE DATA
            $data = [
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'content' => $this->input->post('content'),
                'image' => $image_name,
                'meta_title' => $this->input->post('meta_title'),
                'meta_description' => $this->input->post('meta_description'),
                'status' => 1
            ];

            $this->db->insert('blogs', $data);

            // STEP 5: SUCCESS
            $this->session->set_flashdata('success', 'Blog added successfully');
            redirect('admin/add_blog');
            return;
        }

        // LOAD VIEW
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/add_blog');
        $this->load->view('admin/layout/footer');
    }

    public function blogs()
    {
        $data['blogs'] = $this->db
            ->order_by('id', 'DESC')
            ->get('blogs')
            ->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/blogs', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit_blog($id)
    {
        // STEP 1: Fetch blog
        $data['blog'] = $this->db->get_where('blogs', ['id' => $id])->row();

        if (!$data['blog']) {
            show_404();
        }

        // STEP 2: Handle form submit
        if ($this->input->post()) {

            $slug = url_title($this->input->post('title'), '-', true);

            $update = [
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'content' => $this->input->post('content'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_description' => $this->input->post('meta_description')
            ];

            $this->db->where('id', $id)->update('blogs', $update);

            $this->session->set_flashdata('success', 'Blog updated successfully');
            redirect('admin/blogs');
            return;
        }

        // STEP 3: Load edit view
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_blog', $data);
        $this->load->view('admin/layout/footer');
    }
    public function delete_blog($id)
    {
        $this->db->where('id', $id)->delete('blogs');

        $this->session->set_flashdata('success', 'Blog deleted successfully');
        redirect('admin/blogs');
    }

}
