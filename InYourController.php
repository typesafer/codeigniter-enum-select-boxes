  function my_controller(){
	$this->load->model('school_model');
	$data = array('title' => 'My Title',
              'enm' => $this->school_model->gender_enums('students','student_gender'));			  
    $this->load->view('student_edit',$data);
	}
