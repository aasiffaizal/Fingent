<?php
class Project_calendarmodel extends CI_Model
{
function __construct() {
parent::__construct();
}
function getmonth()
{ $data=array();
$SQL="select max(Date) from Details";
$query = $this->db->query($SQL);
foreach ($query->result_array() as $row)
{

    $t=$row['max(Date)'];

    
   } 
 $month= date("m",strtotime($t));
return $month;
}
function getyear()
{ $data=array();
$SQL="select max(Date) from Details";
$query = $this->db->query($SQL);
foreach ($query->result_array() as $row)
{

    $t=$row['max(Date)'];

    
   } 
 $x= date("y",strtotime($t));
 $year=2000+$x;
 return $year;
}

function getemployees($month,$year)
{$days=cal_days_in_month ( CAL_GREGORIAN, $month ,$year );
 
 $c=array();
for($i=1;$i<=$days;$i++)
{$SQL="SELECT COUNT(DISTINCT Emp_Id) FROM Details where In_Out=1 and month(Date)='$month' and year(Date)='$year' and day(Date)='$i'";
$query = $this->db->query($SQL);

foreach ($query->result_array() as $row)
{

    $c[$i]=$row['COUNT(DISTINCT Emp_Id)'];

    
   } 

}

return $c;

} 


}





?>
