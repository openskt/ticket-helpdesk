<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Home.php
 * @author Imron Rosdiana
 */
class Home extends CI_Controller
{

    function __construct() {
        parent::__construct();

        if(empty($this->session->userdata('id'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
    }

    public function index() {
        // data passing to view
        $data['page_title'] = "OPENTicket 1.0 | Ticket Listing";
        $data['active_menu'] = "ticket";

        // query all ticket
        //$this->db->select('ticket.id, subject, details, fname');
        $this->db->from('ticket');
        //$this->db->join('user', 'user.id = ticket.create_by', 'left');
        $this->db->order_by('create_datetime', 'desc');
        $this->db->where('is_active', 1);
        $query  = $this->db->get();
        $data['records'] = $query->result();
        //$this->db->close();

        //$query = $this->db->get('ticket');


        //foreach ($query->result() as $row)
        //{
        //    echo "<h1>test:".$row->id;
        //}
        //exit();
        // load the view
        $this->load->view('head', $data);
        $this->load->view('aside', $data);
        $this->load->view('body_ticket', $data);
        $this->load->view('footer');
    }

    public function logout() {
        $data = ['id', 'email'];
        $this->session->unset_userdata($data);

        redirect('login');
    }
}
