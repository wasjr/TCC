<?php 
class User_model extends CI_Model {

    var $login   = '';
    var $senha = '';

     function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
		
    }
    
   
    function insert_entry($login, $senha)
    {
        $this->login = $login;
		$this->senha = $senha;
		
		if ($this->login != NULL AND $this->senha != NULL){
			echo "teste";
			
			$this->db->insert('dm_usuario', $this);
			$this->session->set_flashdata('cadastrook','cadastro efetuado com sucesso');
			redirect('bd/insert');
		}
		
	}

   
}

?>