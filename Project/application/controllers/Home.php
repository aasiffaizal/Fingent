<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    
      $session_data = $this->session->userdata('logged_in');
      $data['Name'] = $session_data['Name'];
      $this->load->view('home_view', $data);
   
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home', 'refresh');
  }


}

?>
