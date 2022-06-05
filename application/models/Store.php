<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store extends CI_Model
{

    public function store()
    {
        $this->load->database();
        $insert = $this->input->post();
        $this->db->insert('items', $insert);
        $id = $this->db->insert_id();
        $q = $this->db->get_where('items', array('id' => $id));


        return  json_encode($q->row());
    }
}
