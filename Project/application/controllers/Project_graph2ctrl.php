

<?php
class Project_graph2ctrl extends CI_Controller 
{
function __construct() {
parent::__construct();
$this->load->model('Project_graph2model');
}


function loadview($day,$month,$year)
{

if($this->session->userdata('logged_in'))
    {
$y=array();

$y['d']="1";
$y['day']=$day;
$y['month']=$month;
$y['year']=$year;
$y['things']=$this->Project_graph2model->getvalue($day,$month,$year);
$d=$this->Project_graph2model->getvalues($day,$month,$year);
$y["d"]=$d;
$this->load->view("project_graph2view",$y);
}

 else
    {
      
      redirect('login', 'refresh');
	}
}





function graph($day,$month,$year)
{
if($this->session->userdata('logged_in'))
    {
echo json_encode($this->Project_graph2model->getvalues($day,$month,$year));
}

else
    {
      
      redirect('login', 'refresh');
	}
}




function newloadview($day,$month,$year,$action)
{

if($this->session->userdata('logged_in'))
    {
$days=cal_days_in_month ( CAL_GREGORIAN, $month ,$year );
if($action==1)
{if($day==$days)
	{
	if($month==12)
	     {$year=$year+1;
	      $month=1;
	      $day=1;}
	else
		{
		$month=$month+1;
		$day=1;
		}
	}
 else
	{
	$day=$day+1;
	}
}
else
{	
   if($day==1){
	if($month==1)
	{
	$year=$year-1;
	$month=12;
	$day=31;
	}
 else
	{
	$month=$month-1;
	$day=cal_days_in_month ( CAL_GREGORIAN, $month ,$year );
	} 
}
else
 $day=$day-1;
	
}
$y=array();
$y["day"]= $day;
$y["month"]=$month;
$y["year"] =$year;
$d=$this->Project_graph2model->getvalues($day,$month,$year);
$y['things']=$this->Project_graph2model->getvalue($day,$month,$year);
$y["d"]=$d;
$this->load->view("project_graph2view",$y);
}
else
    {
      
      redirect('login', 'refresh');
	}
}




}
