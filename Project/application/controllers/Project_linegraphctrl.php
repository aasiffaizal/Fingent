<?php
class Project_linegraphctrl extends CI_Controller 
{
function __construct() {
parent::__construct();
$this->load->model('Project_linegraphmodel');
}
function getdetails()
{

if($this->session->userdata('logged_in'))
    {
$data=array();

$data=$this->Project_linegraphmodel->getvalues();
foreach ($data as $thing )
{
$thing->effort=$thing->end-$thing->effort; 
 }

echo json_encode($data);

}
 else
    {
      
      redirect('login', 'refresh');
	}
//$this->load->view('project_linegraphview',$data);


}

}
