<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validacao extends CI_Controller {

	
	public function index()
	{
		
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('myform');
        }
        else
        {
                $this->load->view('sucesso_form_validacao');
        }
		
		
		$dados = array(
			'titulo' => 'Inscrição Aluno' ,
		
		);
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->load->view('header', $dados);
		$this->load->view('validacao');
		$this->load->view('footer');
	}
}
