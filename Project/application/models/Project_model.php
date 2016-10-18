<?php
Class Project_model extends CI_Model

{

function __construct() {
parent::__construct();
}
	function login($username, $password)
	{
		$this -> db -> select('id, username,Name,password');
		$this -> db -> from('users');
		$this -> db -> where('username = ' . "'" . $username . "'"); 
		$this -> db -> where('password = ' . "'" . $password. "'"); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

	function check($username)
	{
		$this->db->select('username');
		$this->db->from('users');
		$this->db->where('username='."'".$username."'");
		$this->db->limit(1);
		
		$query=$this->db->get();
		if($query->num_rows()==0)
		return $query->result();
		else
		return false;
	}

function all()
	{
		$this->db->select('id,Name,username,Status');
		$this->db->from('users');
		$query=$this->db->get();
		if($query -> num_rows()>0)
		{
		return $query->result();
		}
		
	}

function removeuser($user)
{     	
      $this->db->where('username',$user);
     $this->db->delete('users');

}

function employee()
	{
		$this->db->select_max('Date');
		$this->db->select('Emp_Id');
		$this->db->from('Details');
		$this->db->where("In_Out=1");
		$this->db->group_by('Emp_Id');
		$query=$this->db->get();
		if($query -> num_rows()>0)
		{
		return $query->result();
		}
	}




function upload()
	{
		$this->db->select('Date');
		$this->db->from('Details');
		$this->db->limit(1);
		$query=$this->db->get();
		return $query->result();
		
	}


}
?>
