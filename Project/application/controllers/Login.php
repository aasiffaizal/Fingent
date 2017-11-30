<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Project_model','',TRUE);
  }

  function index()
  {
if($this->session->userdata('logged_in'))
{
redirect('Dashboard', 'refresh');
}
else
{   
  if ($this->input->server('REQUEST_METHOD') == 'POST')
  {
    $this->load->helper('form');
    $email=$_POST['email'];
    $password=$_POST['password'];
    $this->load->library('form_validation');
$this->form_validation->set_rules('email', 'Email', 'required');
     $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');
if($this->form_validation->run() == FALSE)
{
  //Field validation failed.  User redirected to login page
  $this->load->view('Project_loginview');
}
else
{
  //Go to private area
echo("Loading.....");
  redirect('Dashboard', 'refresh');
}
  }
  else
  {
$this->load->helper('form');
   $this->load->view('Project_loginview');
  }
} 
 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('email');
   
   //query the database
   $result = $this->Project_model->login($username, $password);
   
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
  'id' => $row->id,
         //'Username' => $row->Username,
 'Name'=>$row->Name
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', "The email and password you entered don't match.");
     return false;
   }
 }

}

?>
