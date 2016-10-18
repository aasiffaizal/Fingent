<?php
class Project_effortctrl extends CI_Controller 
{
function __construct() {
parent::__construct();
$this->load->model('Project_effortmodel');
}

function getvalues()
{
if($this->session->userdata('logged_in'))
    {
$data=array();
 $data=$this->Project_effortmodel->geteffort();
echo json_encode($data);
}
else
    {
      
      redirect('login', 'refresh');
	}

}
}

