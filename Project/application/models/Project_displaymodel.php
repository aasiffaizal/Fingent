<?php
class Project_displaymodel extends CI_Model{
function __construct() {
parent::__construct();
}
function form_display()
{
    $this->db->select("no,name,email,status");
  $this->db->from('testtable');
  $query = $this->db->get();
  return $query->result();
}
}
