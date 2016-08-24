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
        $data["page_title"] = "OPENTicket 1.0 | Ticket Listing";
        $data["active_menu"] = "ticket";

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
