<?php
class Project_testingmodel extends CI_Model
{
function __construct() {
parent::__construct();
}
function getusers($d)
{
$SQL="Select distinct Emp_Id  from Details where date(Date)='$d'";
$query = $this->db->query($SQL);
$data2=array();
$data2=$query->result(); 
return $data2;
}


function getstartend($a,$date)
{ $SQL="
SELECT Emp_Id,MIN(CASE WHEN In_Out = 0 THEN HOUR(Date)+(MINUTE(time(Date))/60) ELSE NULL END) start, MAX(CASE WHEN In_Out= 1 THEN HOUR(Date)+(MINUTE(time(Date))/60) ELSE NULL END) end FROM Details WHERE In_Out IN ('0','1') and Emp_Id='$a' and date(Date)='$date'";
$query = $this->db->query($SQL);
$data3=array();
$data3=$query->result(); 
return $data3;




}


}




//SELECT datetime as date,userid,MIN(CASE WHEN deviceaction = 0 THEN HOUR(datetime)+(MINUTE(time(datetime))/60) ELSE NULL END) start, MAX(CASE WHEN deviceaction= 1 THEN HOUR(datetime)+(MINUTE(time(datetime))/60) ELSE NULL END) end FROM table1 WHERE deviceaction IN ('0','1') and userid='217'

