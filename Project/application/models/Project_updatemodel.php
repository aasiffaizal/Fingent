<?php
class Project_updatemodel extends CI_Model{
var $user;

function __construct() {
parent::__construct();
}
function updateuservalue($oldname,$email,$name,$password)
{$data=array('username'=>$email,'Name'=>$name,'password'=>$password);   
$this->db->where('Name', $oldname);
   $b= $this->db->update('users',$data);
return($b);

}
}
?>
