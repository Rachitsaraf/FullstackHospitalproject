<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

    public function submit()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'appointment_date' => $this->input->post('appointment_date'),
            'appointment_time' => $this->input->post('appointment_time'),
            'appointment_type' => $this->input->post('appointment_type'),
            'message' => $this->input->post('message')
        );

        $this->load->model('Appointment_model');
        $this->Appointment_model->save($data);

        echo "Appointment submitted successfully";
    }
}
