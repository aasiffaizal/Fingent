<?php
class Del_model extends CI_Model{
var $user;

function __construct() {
parent::__construct();
}
function removeuser($user)
{     	
      $this->db->where('username',$user);
     $this->db->delete('users');

}
}
?>
