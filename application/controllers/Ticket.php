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
        // data passing to view
        $data['page_title'] = "OPENTicket 1.0 | Ticket Listing";
        $data['active_menu'] = "ticket";

        // query all ticket
        $this->db->select('ticket.id, status, urgently, priority, due_date, end_user, subject, details, b.fname as bfname, b.lname as blname, c.fname as cfname, c.lname as clname, create_datetime, start_datetime, end_datetime, assign_to');
        $this->db->from('ticket');
        $this->db->join('user as b', 'ticket.create_by = b.id', 'left');
        $this->db->join('user as c', 'ticket.assign_to = c.id', 'left');
        $this->db->order_by('create_datetime', 'desc');
        $this->db->where('is_active', 1);
        $query  = $this->db->get();
        $data['records'] = $query->result();
        //$this->db->close();

        //$query = $this->db->get('ticket');

        $this->load->view('head', $data);
        $this->load->view('aside', $data);
        $this->load->view('body_ticket', $data);
        $this->load->view('footer');
    }

    public function assign()
    {
        // echo "<html><h1>ticket id=".$this->uri->segment('3');
        // data passing to view
        $data['page_title'] = "OPENTicket 1.0 | Ticket Listing";
        $data['active_menu'] = "ticket";

        // query all ticket
        $this->db->from('ticket');
        //$this->db->join('user', 'user.id = ticket.create_by', 'left');
        //$this->db->order_by('create_datetime', 'desc');
        $this->db->where('id', $this->uri->segment('3'));
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
        $this->load->view('body_ticket_assign', $data);
        $this->load->view('footer');
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
