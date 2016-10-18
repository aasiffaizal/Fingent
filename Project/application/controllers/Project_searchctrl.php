<?php
 

class Project_searchctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('Project_searchmodel','',TRUE);

}
function index()
{

    if($this->session->userdata('logged_in'))
    {
$data = array();
$data['things']='';
$this->load->view('search_view',$data);
	}
 else
    {
      
      redirect('login', 'refresh');
	}
}

function searchvalue()
{

if($this->session->userdata('logged_in'))
    {
$date1=$_POST["date1"];
 $date2=$_POST["date2"];
if(empty($date1)||empty($date2))
redirect('project_employeectrl');
$data=array();
$data['things']=$this->Project_searchmodel->showvalue($date1,$date2) ;
$data['date1']=$date1;
$data['date2']= $date2;
$this->load->view('project_searchview',$data);
}

 else
    {
      
      redirect('login', 'refresh');
	}


}
}
?>
