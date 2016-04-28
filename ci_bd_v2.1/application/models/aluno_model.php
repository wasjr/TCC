<?php

class Aluno_model extends CI_Model {
	
	//form parte 1
    var $nome;
	var $nomepai;
	var $nomemae;
	var $data_nasc;
	var $sexo;
	var $estado_civil;
	var $naturalidade;
	var $nacionalidade;
	var $identidade;
	var $cpf;
	
	//form parte 2
	var $logradouro;
	var $logradouro_numero;
	var $complemento;
	var $bairro;
	var $cidade;
	var $estado;
	var $cep;
	var $tel_fixo;
	var $tel_cel;
	var $email;
	var $conf_email;
	
	//form parte 3
	var $graduacao;
	var $instituição;
	var $ini_grad;
	var $fim_grad;
	var $checkbox_pibic;
	var $pibic_ini;
	var $pibic_fim;
	var $checkbox_faperj;
	var $faperj_ini;
	var $faperj_fim;
	var $checkbox_cnpq;
	var $cnpq_ini;
	var $cnpq_fim;
	var $checkbo_outro;
	var $especificar;
	var $outro_ini;
	var $outro_fim;
	
	//form parte 4
	var $radios;//esse name se repete em varias radios, é um potencial erro. verificar depois
	var $cargo_especificar;
	var $matricula_funcional_especificar;
	
	//form parte 5
	var $empregador;
	var $emp_logradouro;
	var $emp_logradouro_numero;
	var $emp_complemento;
	var $emp_bairro;
	var $emp_cidade;
	var $emp_estado;
	var $emp_cep;
	var $emp_tel_fixo;
	var $emp_tel_cel;
	var $emp_email;
	
	//form parte 6
	var $area_concentracao;
	var $prim_opcao;
	var $seg_opcao;
	var $checkbox_disc;//esse name se repete em varias checkboxes, é um potencial erro. verificar depois
	
    

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all()
    {
        return $this->db->get('usuario', 10);//esse 10 eh pq eu quero pegar somente os 10 primeiros
        
    }

    function insert_entry()
    {
        $this->login = $this->input->post('login');
        $this->senha = $this->input->post('senha');
		if ($this->login != NULL AND $this->senha != NULL){
			$this->db->insert('dm_usuario', $this);
			$this->session->set_flashdata('cadastrook','cadastro efetuado com sucesso');
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