<?php
class Update_model extends CI_Model{
var $user;

function __construct() {
parent::__construct();
}
function updateuservalue($oldname,$username,$name)
{$data=array('username'=>$username,'name'=>$name);   
$this->db->where('username', $oldname);
   $b= $this->db->update('users',$data);
return($b);

}
}
?>
