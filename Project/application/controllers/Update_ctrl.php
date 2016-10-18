<?php
 

class Update_ctrl extends CI_Controller
{
function __construct() {
parent::__construct();
$this->load->model('update_model');
}
function updateuser($user,$name)
{

$data = array(
    'title' => $name,'head'=>$user);


$this->load->view('update_view', $data);
}
function updateuser1($a=null,$b=null)
{
$a= $_POST["name"];
 $b= $_POST["username"];
$y=$_POST["oldusername"];
$u=$this->update_model->updateuservalue($y,$b,$a); 
if($u)
redirect("http://localhost/Project/index.php/display");
}



}
?>


