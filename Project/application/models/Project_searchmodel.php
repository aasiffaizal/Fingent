<?php
class Project_searchmodel extends CI_Model
{
function __construct() {
parent::__construct();
}
function showvalue($date1,$date2)
{$things=array();
$SQL="select * from Details where '$date1' <= Date and Date <= '$date2'";

$query = $this->db->query($SQL);
$data=array();
foreach( $query->result() as $row)
{$data[]=$row;
} 
return $data;

}
}
