<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class program extends CI_controller{
    public function index()
    {$this->load->model('program_model');
		$ms_program=$this->program_model->all();
		$data =array();
		$data['ms_program']=$ms_program;
        $this->load->view('View_program',$data);
    }

    function create(){
    	$this->load->model('program_model');
    	$this->form_validation->set_rules('ProgramName','ProgramName','required');
    	$this->form_validation->set_rules('Description','Description','required');

    	if($this->form_validation->run()==false){

        $this->load->view('Add_program');
    	}
    	else{
    		$formArray=array();
    		$formArray['ProgramName']=$this->input->post('ProgramName');
    		$formArray['Description']=$this->input->post('Description');
            
            $this->program_model->create($formArray);

    		$this->session->set_flashdata('Success','Record Added Successfully');
    		redirect(base_url().'index.php/product');

    	}

    }	
    
    function edit($programID){
        $this->load->model('program_model');
       $ms_program= $this->program_model->getProgram($programID);
        $this->load->view('edit');

    }
}
?>