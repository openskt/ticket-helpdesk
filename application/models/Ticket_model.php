<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name: Ticket model
 * @author: Somkit Thap-arsa
 */
class Ticket_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // get list of active staff in the company
    public function get_ticket($id) {
        $this->db->select('ticket.id as tid, create_datetime, urgently, priority, subject, details, u.fname as fname, u.lname as lname');
        $this->db->join('user as u', 'ticket.create_by = u.id', 'left');

        $this->db->where('ticket.id', $id);
        // return single row
        return $this->db->get('ticket')->row();
        //$query = $this->db->get();
        //return $query->result();
    }

    // get all ticket
    public function get_all_ticket() {

    }

    function __destruct() {
        $this->db->close();
    }
}
