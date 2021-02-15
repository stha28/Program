<?php
class program_model extends CI_model{
    
    function create($formArray){
        $this->db->insert('ms_program', $formArray);
    }
}

?>