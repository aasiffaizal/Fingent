<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Project_displayctrl extends CI_Controller {

  function __construct()
  {
    parent::__construct();
 $this->load->model('project_model','',TRUE);
  }
 function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $_SESSION['Name'] = $session_data['Name'];
      $this->data['posts']=$this->project_model->all() ;
      $this->load->view('project_displayview', $this->data);
    }
    else
    {
      
      redirect('login', 'refresh');
	}
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('Project_displayctrl', 'refresh');
  }


}
?>
