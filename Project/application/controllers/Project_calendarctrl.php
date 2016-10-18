<?php
class Project_calendarctrl extends CI_Controller 
{
function __construct() {
parent::__construct();
$this->load->model('Project_calendarmodel');


}
function calendarcreate($month=0,$year=0,$nextprev=0)
{
 if($this->session->userdata('logged_in'))
{
if(($month==0)||($year==0))
{
 $month=$this->Project_calendarmodel->getmonth();
 $year=$this->Project_calendarmodel->getyear();
}

else
{ if(($nextprev==0)&&($month==1))
{$month='12';
$year=$year-1;}
 else if($nextprev==0)
 $month=$month-1;
if(($nextprev==1)&&($month==12))
{$month=1;
 $year=$year+1;
}
else if($nextprev==1)
$month=$month+1;

} 
$d=array(); 
$d['things']=$this->Project_calendarmodel->getemployees($month,$year);
$d['month']=$month;
$d['year']=$year;

$this->load->view('project_calendarview',$d);
}
 else
    {
      
      redirect('login', 'refresh');
	}
}
}
?>
