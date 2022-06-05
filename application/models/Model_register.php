<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_register extends CI_Model
{

    public function add($data)
    {
        
        $this->db->insert('tbl_users', $data);
        return $this->db->insert_id();
    }
}
