<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
if($this->session->userdata('logged_in'))
{
redirect('Project_displayctrl', 'refresh');
}
else
{   
$this->load->helper('form');
   $this->load->view('Project_loginview');
} 
 }

}

?>
