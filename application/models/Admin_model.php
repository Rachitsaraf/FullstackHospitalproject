<?php
class Admin_model extends CI_Model {

    public function get_admin_by_email($email) {
        return $this->db
            ->where('email', $email)
            ->get('admins')
            ->row();
    }
}
