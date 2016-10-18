<?php
class Project_linegraphmodel extends CI_Model
{
function __construct() {
parent::__construct();
}
function getvalues()
{$data=array();

$SQL="
SELECT Emp_Id,date(Date)as date, MIN(CASE WHEN In_Out = 0 THEN HOUR(Date)+(MINUTE(time(Date))/60) ELSE NULL END) effort, MAX(CASE WHEN In_Out= 1 THEN HOUR(Date)+(MINUTE(time(Date))/60) ELSE NULL END) end from Details where Emp_Id in(Details.Emp_Id ) group by Emp_Id";
$query = $this->db->query($SQL);
return($query->result()); 






}
}
