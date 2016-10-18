<?php
class Project_piechartctrl extends CI_Controller 
{
function __construct() {
parent::__construct();
$this->load->model('Project_piechartmodel');
}

function index()
{

if($this->session->userdata('logged_in'))
    {
$this->load->view('test3');
}
else
    {
      
      redirect('login', 'refresh');
	}
}

function getdata()
{
if($this->session->userdata('logged_in'))
    {
$data=array();
 $data=$this->Project_piechartmodel->getvalues();
echo json_encode($data);
}

else
    {
      
      redirect('login', 'refresh');
	}

}

function bubblegraph()
{

if($this->session->userdata('logged_in'))
    {
 $data=array();
 $data=$this->Project_piechartmodel->bubblegraph();
echo json_encode($data);
}
else
    {
      
      redirect('login', 'refresh');
	}

}
}

