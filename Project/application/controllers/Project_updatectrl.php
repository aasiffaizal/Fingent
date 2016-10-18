<?php
 

class Project_updatectrl extends CI_Controller
{
function __construct() {
parent::__construct();
$this->load->model('Project_updatemodel');

}
function updateuser($name,$email)
{
 if($this->session->userdata('logged_in'))
    {
$data = array(
    'name' => urldecode($name),'email'=>$email);


$this->load->view('project_updateview', $data);
}
 else
    {
      
      redirect('login', 'refresh');
	}
}
function updateuser1()
{

if($this->session->userdata('logged_in'))
    {
$a= $_POST["name"];
 $b= $_POST["email"];
 $c=$_POST["password"];
$y=$_POST["oldname"];


$u=$this->Project_updatemodel->updateuservalue($y,$b,$a,$c); 
if($u)
redirect("http://localhost/Project/index.php/Project_displayctrl");
}
else
    {
      
      redirect('login', 'refresh');
	}
}



}
?>
