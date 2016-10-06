<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Staff.php
 * @author Somkit Thap-arsa
 */

class Ticket extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if(empty($this->session->userdata('id')))
        {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
    }


}
