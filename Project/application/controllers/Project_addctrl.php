<?php
 

class Project_addctrl extends CI_Controller
{
function __construct() {
parent::__construct();

$this->load->model('Project_addmodel');
}
function index()
{

if($this->session->userdata('logged_in'))
    {
$this->load->view('project_addview');
if ($this->input->server('REQUEST_METHOD') == 'POST')
{$name=$_POST["name"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 $status=$_POST["radio1"];
$this->Project_addmodel->adduservalue($name,$email,$password,$status);
redirect(base_url()."Project_displayctrl") ;
} }
 else
    {
      
      redirect('login', 'refresh');
	}
}
}


?>
