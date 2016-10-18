<?php
class Project_effortmodel extends CI_Model
{
function __construct() {
parent::__construct();
}
function geteffort()
{
$SQL="Select *  from Effort ";
$query = $this->db->query($SQL);
$data2=array();
$data2=$query->result(); 
return $data2;
}
}
