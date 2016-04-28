<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

 	function __construct()
    {
        
        parent::__construct();
		$this->load->model('aluno_model');
		$this->load->library('table');
    } 
 
 
	public function index(){
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
  
	public function alpha_dash_space($str){
	    return ( ! preg_match("/^([-a-z ])+$/i", $str)) ? FALSE : TRUE;
	} 
    
	public function cadastro(){
				
		//regras do formulario
		$this->form_validation->set_rules('nome', 'Nome', 'required|callback_alpha_dash_space');
		$this->form_validation->set_rules('nomepai', 'Nome Pai', 'required|callback_alpha_dash_space');
		$this->form_validation->set_rules('nomemae', 'Nome Mãe', 'required|callback_alpha_dash_space');
		$this->form_validation->set_rules('data_nasc', 'Data Nascimento', 'required');//adicionar validacao de data
		$this->form_validation->set_rules('sexo', 'Sexo', 'required');
		$this->form_validation->set_rules('estado_civil', 'Estado Civil', 'required');
		$this->form_validation->set_rules('naturalidade', 'Naturalidade', 'required|callback_alpha_dash_space');
		$this->form_validation->set_rules('nacionalidade', 'Nacionalidade', 'required');
		$this->form_validation->set_rules('identidade', 'Identidade', 'trim');//|is_unique[aluno.identidade]
		$this->form_validation->set_rules('cpf', 'CPF', 'required|numeric|max_length[11]');//|is_unique[aluno.identidade]
		
		//array com variaveis globais pra pagina do form
		
		
		if ($this->form_validation->run() == FALSE)//carrega a primeira vez o formulario ou recarrega caso um dado seja invalido
		{
			$dados = array(
				'titulo'=>'Cadastro Aluno'
			);
			
			$this->load->view('aluno/aluno_header', $dados);
			$this->load->view('menu');
		    $this->load->view('aluno/aluno_registro1');//adicionar uma variavel que contem cada etapa do formulario
			$this->load->view('aluno/aluno_footer_cadastro');
		}
		else//vai pra proxima etapa do formulario
		{
			 $this->cadastro2();
		}
	}

	public function cadastro2(){
		
		//regras do formulario
		$this->form_validation->set_rules('logradouro', 'Rua/Avenida', 'required|callback_alpha_dash_space');
		
		if ($this->form_validation->run() == FALSE)//carrega a primeira vez o formulario ou recarrega caso um dado seja invalido
		{
			$dados = array(
				'titulo'=>'Cadastro Aluno'
			
			);
			
			$this->load->view('aluno/aluno_header', $dados);
			$this->load->view('menu');
		    $this->load->view('aluno/aluno_registro2');//adicionar uma variavel que contem cada etapa do formulario
			$this->load->view('aluno/aluno_footer_cadastro');
		}
		
		else{
			$this->cadastro3();
		}
	
	}
	
	public function cadastro3(){
		
		
		//regras do formulario
		$this->form_validation->set_rules('graduacao', 'Graduação', 'required|callback_alpha_dash_space');
		
		if ($this->form_validation->run() == FALSE)//carrega a primeira vez o formulario ou recarrega caso um dado seja invalido
		{
			
			$dados = array(
				'titulo'=>'Cadastro Aluno'
			
			);
						
			$this->load->view('aluno/aluno_header', $dados);
			$this->load->view('menu');
		    $this->load->view('aluno/aluno_registro3');//adicionar uma variavel que contem cada etapa do formulario
			$this->load->view('aluno/aluno_footer_cadastro');
		}
		
		else{
			$this->cadastro4();
			
		}
	}
	
	public function cadastro4(){
		
		
		//regras do formulario
		$this->form_validation->set_rules('radios', 'Seletor de Instituição', 'required');
		
		if ($this->form_validation->run() == FALSE)//carrega a primeira vez o formulario ou recarrega caso um dado seja invalido
		{
			$dados = array(
				'titulo'=>'Cadastro Aluno'
			
			);
			
			$this->load->view('aluno/aluno_header', $dados);
			$this->load->view('menu');
		    $this->load->view('aluno/aluno_registro4');//adicionar uma variavel que contem cada etapa do formulario
			$this->load->view('aluno/aluno_footer_cadastro');
		}
		
		else{
			$this->cadastro5();
			
		}
	}

	public function cadastro5(){
		
		
		//regras do formulario
		$this->form_validation->set_rules('empregador', 'Empregador', 'required|callback_alpha_dash_space');
		
		if ($this->form_validation->run() == FALSE)//carrega a primeira vez o formulario ou recarrega caso um dado seja invalido
		{
			$dados = array(
				'titulo'=>'Cadastro Aluno'
			
			);
			
			$this->load->view('aluno/aluno_header', $dados);
			$this->load->view('menu');
		    $this->load->view('aluno/aluno_registro5');//adicionar uma variavel que contem cada etapa do formulario
			$this->load->view('aluno/aluno_footer_cadastro');
		}
		
		else{
			$this->cadastro6();
			
		}
	}
	
	public function cadastro6(){
		
		
		//regras do formulario
		$this->form_validation->set_rules('area_concentracao', 'Área de Concentração', 'required|callback_alpha_dash_space');
		
		if ($this->form_validation->run() == FALSE)//carrega a primeira vez o formulario ou recarrega caso um dado seja invalido
		{
			$dados = array(
				'titulo'=>'Cadastro Aluno'
			
			);
			
			$this->load->view('aluno/aluno_header', $dados);
			$this->load->view('menu');
		    $this->load->view('aluno/aluno_registro6');//adicionar uma variavel que contem cada etapa do formulario
			$this->load->view('aluno/aluno_footer_cadastro');
		}
		
		else{
			//chamar a pagina de edicao do formulario
			
		}
	}
  
  
}