<?php
class Project_graph1model extends CI_Model
{
function __construct() {
parent::__construct();
}

function getmonth($var)
{
$data=array();
$SQL="select max(Date) from Details where Emp_Id='$var'";
$query = $this->db->query($SQL);
foreach ($query->result_array() as $row)
{

    $t=$row['max(Date)'];

    
   } 
 $month= date("m",strtotime($t));
 $y= date("y",strtotime($t));
 $year=2000+$y;
$data['year']=$year;
$data['month']=$month;
$data['var']=$var;
return $data;

}


function getvalue($var,$month,$year)
{
 //$data=array();
//$SQL="select max(Date) from Details where Emp_Id='$var'";
//$query = $this->db->query($SQL);
//foreach ($query->result_array() as $row)
//{
//
  //  $t=$row['max(Date)'];
//
    
  // } 
// $month= date("m",strtotime($t));
// $y= date("y",strtotime($t));
// $year=2000+$y;



$SQL="SELECT DATE(Date)as date, MIN(CASE WHEN In_Out = 0 THEN  HOUR(Date)+(MINUTE(time(Date))/60) ELSE NULL END) start, MAX(CASE WHEN In_Out= 1 THEN  HOUR(Date)+(MINUTE(time(Date))/60) ELSE NULL END) end FROM Details WHERE In_Out IN ('0','1') and Emp_Id='$var' and month(Date)='$month' and year(Date)='$year'group by DATE(Date)";
$data=array();
$query = $this->db->query($SQL);
return $query->result_array();
}

function getvalues($var,$month,$year)
{$SQL="SELECT date(Date)as Date, time(Date) as Time,`In_Out`, `Mach_Name` FROM `Details`where Emp_Id='$var' and year(Date)='$year' and month(Date)='$month'";
$query = $this->db->query($SQL);
return $query->result();
}

}
?>
