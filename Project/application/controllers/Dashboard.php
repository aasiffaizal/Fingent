<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	$this->load->model('Project_piechartmodel');
  }

  function index()
  {
	if($this->session->userdata('logged_in'))
    {
	$session_data = $this->session->userdata('logged_in');
    	  $_SESSION['Name'] = $session_data['Name'];
	$d=array();
	
        $data=$this->Project_piechartmodel->days();
	foreach($data as $row)
	{
		$d['Days']=$row->Days;
	}
	$data=$this->Project_piechartmodel->Employee();
	foreach($data as $row)
	{
		$d['Emp']=$row->Emp;
	}
	$data=$this->Project_piechartmodel->Effort();
	foreach($data as $row)
	{
		$d['Effort']=$row->Effort;
	}
	$this->load->view('project_dashboard',$d);
}

 else
    {
      
      redirect('login', 'refresh');
	}
  }
function row()
{
if($this->session->userdata('logged_in'))
    {
$this->Project_piechartmodel->rowgraph();
}
 else
    {
      
      redirect('login', 'refresh');
	}
}
}

?>
