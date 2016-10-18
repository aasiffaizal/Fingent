<?php
class Project_graph1ctrl extends CI_Controller 
{
function __construct() {
parent::__construct();
$this->load->model('Project_graph1model');
}
function loadview($var)
{
if($this->session->userdata('logged_in'))
    {
$y=array();

$y=$this->Project_graph1model->getmonth($var);
$y['d']="1";
$month=$y['month'];
$year=$y['year'];
$y['things']=$this->Project_graph1model->getvalues($var,$month,$year);
$this->load->view("project_graph1view",$y);
}
 else
    {
      
      redirect('login', 'refresh');
	}
}

function graph($var,$month,$year)
{
if($this->session->userdata('logged_in'))
    {
$d=$this->Project_graph1model->getvalue($var,$month,$year);
echo json_encode($d);
}
 else
    {
      
      redirect('login', 'refresh');
	}
}

function newloadview($var,$month,$year,$action)
{
 if($this->session->userdata('logged_in'))
    {

if($action==1)
{if($month==12)
	{
	$year=$year+1;
	$month=1;
	}
 else
	{
	$month=$month+1;
	}
}
else
{
	if($month==1)
	{
	$year=$year-1;
	$month=12;
	}
 else
	{
	$month=$month-1;
	} 
}
$y=array();
$y["var"]= $var;
$y["month"]=$month;
$y["year"] =$year;
$d=$this->Project_graph1model->getvalue($var,$month,$year);
$y['things']=$this->Project_graph1model->getvalues($var,$month,$year);
$y["d"]=$d;
$this->load->view("project_graph1view",$y);
}
else
    {
      
      redirect('login', 'refresh');
	}
}


}
?>

