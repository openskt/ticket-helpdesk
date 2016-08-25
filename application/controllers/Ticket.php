<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Ticket.php
 * @author Somkit Thap-arsa
 */
class Ticket extends CI_Controller
{
    public $urgently = 'normal';

    function __construct()
    {
        parent::__construct();

        if(empty($this->session->userdata('id')))
        {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
    }

    public function index()
    {
        $query  = $this->db->get('ticket');
        $data['records'] = $query->result();
        $this->db->close();

        $this->load->view('ticket', $data);
    }

    public function add_new()
    {

      // Check urgently field
      if($this->input->post('urgently') == 'on')
      {
          $this->urgently = 'urgent';
      }

      // Check attached
      // Upload it into DB

      // Save them all into DB
      $data = array(
          'create_by' => $this->session->userdata('id'),
          'subject' => $this->input->post('ticket_subject'),
          'details' => $this->input->post('ticket_details'),
          'urgently' => $this->urgently
      );
      $this->db->insert("ticket", $data);

      // use helpers loadded via autoload.config
      redirect('/home', 'refresh');

      // Debug
      /*
      echo "<html><h1>";
      if($this->input->post('urgently') == 'on')
      {
        echo "It's URGENT!<br>";
      }
      var_dump($data);
      echo "<hr>";
      die(var_dump($_POST));
      */
    }
}
