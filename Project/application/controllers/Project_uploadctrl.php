<?php
 
class Project_uploadctrl extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('Project_model','',TRUE);
   
    }
 
    function index() {
if($this->session->userdata('logged_in'))
    {
       $this->load->view('project_uploadview');
    	}
 else
    {
      
      redirect('login', 'refresh');
	}
	}

	function upload()
	{
if($this->session->userdata('logged_in'))
    {

		if(!file_exists($_FILES['userfile']['tmp_name']) || !is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    redirect('project_uploadctrl');
}

 else{
	if(isset($_POST["submit"]))
	{
	$file = $_FILES['userfile']['tmp_name'];
	$handle = fopen($file, "r");
	$c = 0;
	while(($filesop = fgetcsv($handle, 1000, "\t")) !== false)
	{	

		$date = new DateTime($filesop[1]);
		$d=$date->format('Y-m-d H:i:s');
		
		
		$data=array(
		'Emp' => $filesop[0],
		'Date' => $d,
		'Mach' =>$filesop[2],
		'In_Out' =>$filesop[3],
		'Min' =>$filesop[4],
		'Emp_Id' =>$filesop[5],
		'Mach_Name' =>$filesop[7]);
		
		 $this->db->insert('Details', $data);

          $c = $c + 1;
	}
redirect('project_uploadctrl');	
	}
}
}
else
    {
      
      redirect('login', 'refresh');
	}
	}
 
   
 
}
?>
