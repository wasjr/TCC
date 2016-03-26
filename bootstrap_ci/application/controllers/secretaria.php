<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secretaria extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');//colocar a pagina inicial do aluno
	}
	
	function alpha_dash_space($str)
	{
	    return ( ! preg_match("/^([-a-z ])+$/i", $str)) ? FALSE : TRUE;
	} 
	
	public function cadastro_professor()
	{
		$this->load->library('form_validation');//carregar validacao formulario
		
		//regras do formulario
		$this->form_validation->set_rules('nome', 'Nome', 'required|callback_alpha_dash_space');
		
		
		//array com variaveis globais pra pagina do form
		
		
		if ($this->form_validation->run() == FALSE)//carrega a primeira vez o formulario ou recarrega caso um dado seja invalido
        {
    		
			$dados = array(
				'titulo'=>'Cadastro Professor(a)'
			
			);
			
			$this->load->view('secretaria/secretaria_header', $dados);
			$this->load->view('menu');
            $this->load->view('secretaria/professor_registro');
			$this->load->view('secretaria/professor_footer_cadastro');
        }
        else//vai pra proxima etapa do formulario
        {
        	 echo "Cadastro efetuado com sucesso!";
        }
	}

}

	
