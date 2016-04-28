<?php

class Bd_model extends CI_Model {

    var $login   = '';
    var $senha = '';
    

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
		
    }
    
    function get_all()
    {
        return $this->db->get('usuario', 10);//esse 10 eh pq eu quero pegar somente os 10 primeiros
        
    }

    function insert_entry($login, $senha)
    {
        $this->login = $login;
		$this->senha = $senha;
		
		if ($this->login != NULL AND $this->senha != NULL){
			echo "teste";
	
			/*	
			$this->db->insert('dm_usuario', $this);
			$this->db->_error_message();
			
			 * 
			 */$this->session->set_flashdata('cadastrook','cadastro efetuado com sucesso');
			redirect('bd/insert');
		}
		
	}

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
	
	

}

?>