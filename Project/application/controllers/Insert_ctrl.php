<?php

class Insert_ctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('insert_model');
 $this->load->model('user','',TRUE);
}
function index() {
if($this->session->userdata('logged_in')){
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

$this->form_validation->set_rules('name', 'Name', 'required');

$this->form_validation->set_rules('username', 'Username', 'required|callback_check');

$this->form_validation->set_rules('password', 'Password', 'required');



if ($this->form_validation->run() == FALSE) {
$this->load->view('add_view');
} else {

$data = array(
'Name' => $this->input->post('name'),
'Username' => $this->input->post('username'),
'Password' => $this->input->post('password'),
);
//Transfering data to Model
$this->insert_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('add_view', $data);
}
}
 else
    {
      
      redirect('login', 'refresh');
	}
}

function check($username)
{
$result = $this->user->check($username);
if($result)
return true;
else
{
$this->form_validation->set_message('check', 'Username already exist');
      return false;
}
}

}

?>

