<?php
class Project_addmodel extends CI_Model{


function __construct() {
parent::__construct();
}
function adduservalue($name,$email,$password,$status)
{$data=array('Name'=>$name,'username'=>$email,'password'=>$password,'Status'=>$status);   
$this->db->insert('users', $data);


}
}
?>
