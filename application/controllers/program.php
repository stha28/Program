<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class program extends CI_controller{
    public function index()
    {
        $this->load->model('user_model');
		$users=$this->user_model->all();
		$data =array();
		$data['users']=$users;
        $this->load->view('Add_program');
    }

    function create(){
    	$this->load->model('program_model');
    	$this->form_validation->set_rules('ProgramName','ProgramName','required');
    	$this->form_validation->set_rules('Description','Description','required');

    	if($this->form_validation->run()==false){

        $this->load->view('program');
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
}
?>