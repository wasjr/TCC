<?php

class Form extends CI_Controller {

        public function index()
        {
                

                $this->load->library('form_validation');
				
				
				$this->form_validation->set_rules('nome', 'Nome', 'required|callback_alpha_dash_space');
				$this->form_validation->set_rules('nomepai', 'Nome Pai', 'required|callback_alpha_dash_space');
				$this->form_validation->set_rules('nomemae', 'Nome Mãe', 'required|callback_alpha_dash_space');

                if ($this->form_validation->run() == FALSE)
                {
                		$this->load->view('header');
                        $this->load->view('myform');
						$this->load->view('footer');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }
		
		
		function alpha_dash_space($str)//funcao que permite usar alpha e espaco
		{
		    return ( ! preg_match("/^([-a-z ])+$/i", $str)) ? FALSE : TRUE;
		} 
}