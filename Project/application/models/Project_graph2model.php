<?php
class Project_graph2model extends CI_Model
{
function __construct() {
parent::__construct();
}
function getvalues($day,$month,$year)
{$data=array();

$SQL="SELECT hour(time(Date))as time, COUNT(DISTINCT Emp_Id) as people from Details where day(Date)='$day' and month(Date)='$month'and year(Date)='$year'and In_Out='0' group by hour(time(Date)) ";
 $query = $this->db->query($SQL);
$data=$query->result();



return($data);
}

function getvalue($day,$month,$year)
{$data=array();

$SQL="SELECT Emp_Id,time(Date)as time,Mach_Name,In_Out from Details where day(Date)='$day' and month(Date)='$month' and year(Date)='$year' ";
$query = $this->db->query($SQL);
$data=$query->result();



return($data);
}
}
