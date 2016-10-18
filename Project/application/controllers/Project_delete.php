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
redirect("http://localhost/Project/index.php/Project_displayctrl/logout", 'refresh');
}


redirect("http://localhost/Project/index.php/Project_displayctrl");
 }
 else
    {
      
      redirect('login', 'refresh');
	}
}
}
