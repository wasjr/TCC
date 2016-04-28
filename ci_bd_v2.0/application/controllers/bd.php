<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bd extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
   
  function __construct()
    {
        
        parent::__construct();
		$this->load->model('bd_model');
		$this->load->library('table');
    } 
   
  public function index()
  {
    $this->load->view('header');
    $this->load->view('content');
    $this->load->view('footer');
  }
  
  public function insert()
  {
  	
	
	$this->form_validation->set_rules('login', 'Login','required|max_length[10]');
	$this->form_validation->set_rules('senha', 'Senha','required|max_length[8]');
	
    $this->load->view('header');
    $this->load->view('formulario');
    $this->load->view('footer');
	
	if($this->form_validation->run()==TRUE){
		$this->bd_model->insert_entry();
	}
	
	
		
  }

	public function retrieve(){	  
	  	
		$dados =  array(
			'titulo'=>'Retrieve usuarios',
			'usuarios' =>$this->bd_model->get_all()->result(),
		
		);
		
		
		
		
	    $this->load->view('header');
	    $this->load->view('retrieve',$dados);
	    $this->load->view('footer');
		
		
		
		
			
	}
	
	public function sucesso(){	  
	  	
	    $this->load->view('header');
	    $this->load->view('sucesso');
	    $this->load->view('footer');
		
		
			
	}
  
}
