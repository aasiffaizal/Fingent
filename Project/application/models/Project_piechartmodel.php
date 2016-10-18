<?php
class Project_piechartmodel extends CI_Model
{
function __construct() {
parent::__construct();
}
function getvalues()
{$data=array();
$SQL="SELECT date(Date) as date,count( Emp_Id) as Attendance,Mach_Name as Machine from Details where Mach_Name='fingent' group by date(Date) union select date(Date),count(Emp_Id),Mach_Name from Details where Mach_Name='essl2' group by date(Date) ";
$query = $this->db->query($SQL);
$data=$query->result();


return($data);
}

function bubblegraph()
{
$SQL="SELECT DATE(Date)as Date, Count(Distinct Emp_Id)as Attendance From Details group by DATE(Date)";
$query=$this->db->query($SQL);
$data=$query->result();
return($data);
}

function days()
{
$SQL="Select count(distinct Date(Date)) as Days from Details";
$query=$this->db->query($SQL);
$data=$query->result();
return($data);
}

function Employee()
{
$SQL="SELECT count(Distinct Emp_Id) as Emp FROM `Details`";
$query=$this->db->query($SQL);
$data=$query->result();
return($data);
}


function Effort()
{
$SQL="SELECT SUM(Effort) as Effort FROM `Effort`";
$query=$this->db->query($SQL);
$data=$query->result();
return($data);
}
function rowgraph()
{
$SQL="SELECT CONCAT(DAYOFWEEK(Date)-1,'.',DAYNAME(Date))as Day,Effort From Effort";
$query=$this->db->query($SQL);
$data=$query->result();
echo json_encode($data);
}



}


