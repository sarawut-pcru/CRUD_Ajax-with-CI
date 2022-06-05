<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_register');
        // $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('register_view');
    }

    public function validate()
    {
        // $this->form_validation->set_rules('fname', 'First name', 'requierd');
        // $this->form_validation->set_rules('lname', 'Last name', 'requierd');
        // $this->form_validation->set_rules('person_id', 'Person_id', 'requierd');
        // $this->form_validation->set_rules('email', 'Email', 'requierd');

        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('register_view');
        // } else {
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $personid = $this->input->post('person_id');
            $email = $this->input->post('email');
            $data = array(
                'u_fname'     => $fname,
                'u_lname'     => $lname,
                'u_email'     => $email,
                'person_id'     => $personid
            );
            $this->model_register->add($data);
        // }
    }
}
