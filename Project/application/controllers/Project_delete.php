<?php
class Project_delete extends CI_controller
{
function __construct() {
parent::__construct();

$this->load->model('Project_model','',TRUE);
}

function remove($var,$name,$Name)
{ 
	
 if($this->session->userdata('logged_in'))
    {$this->Project_model->removeuser($var);
	if($Name==$name)
{
redirect(base_url()."Project_displayctrl/logout", 'refresh');
}


redirect(base_url()."Project_displayctrl");
 }
 else
    {
      
      redirect('login', 'refresh');
	}
}
}
