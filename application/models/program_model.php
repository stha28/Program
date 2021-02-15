<?php
class program_model extends CI_model{
    
    function create($formArray){
        $this->db->insert('ms_program', $formArray);
    }

    function ALL(){
        return $ms_program=$this->db->get('ms_program')->result_array();
   }

    function getProgram($programID){
        $this->db->where('programID',$programID);
       return $ms_program= $this->db->get('ms_program')->row_array();

    }
}

?>