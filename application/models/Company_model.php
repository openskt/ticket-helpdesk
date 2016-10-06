<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name: Company model
 * @author: Somkit Thap-arsa
 */
class Company_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // get list of active staff in the company
    public function get_staff($company = 1) {
        $this->db->select('id, fname, lname');
        $this->db->from('user');
        //$this->db->join('company as c, user.company_id = $company', 'left');
        $this->db->where('company_id', $company);
        $this->db->where('is_doer', 1);
        // return single row
        //return $this->db->get('user')->row();
        $query = $this->db->get();
        return $query->result();
    }

    // get list of active project in this company
    public function get_projects($company = 1) {
        $this->db->select('id, project_name');
        $this->db->from('project');
        $this->db->where('is_active', 1);
        $q = $this->db->get();
        return $q->result();
    }

    function __destruct() {
        $this->db->close();
    }
}
