<?php
class Project_testctrl extends CI_Controller 
{
function __construct() {
parent::__construct();
$this->load->model('Project_testingmodel');
}
function getdetails()
{$a='2015-03-02';
 $b='2015-03-30';

$datestart=date_create($a);
$dateend=date_create($b);
$d1=date_format($datestart, 'Y-m-d');
$d2=date_format($dateend, 'Y-m-d');
$data=array();
$data1=array();
while($d1<=$d2)
{ $effort=0;
$d1=date_format($datestart, 'Y-m-d');
$data =$this->Project_testingmodel->getusers($d1);
foreach($data as $row)
{ $data1=$this->Project_testingmodel->getstartend($row->Emp_Id,$d1);
   foreach($data1 as $row1)
	{
		$effort=abs($effort+($row1->end-$row1->start));
	}
}
$SQL="INSERT INTO person.Effort (Date, Effort) VALUES ('$d1', '$effort'); ";
$query = $this->db->query($SQL);
date_add($datestart, date_interval_create_from_date_string('1 days'));
}

}

}
