<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_aluno_crud extends CI_Model {
	
	public function do_insert ($dados = null) {
		if ($dados !=null){
			
			$sql = "INSERT INTO teste (nome, nomepai) values (".$this->db->$dados->$nome.", ".$this->db->$dados->$email.")";
			
			
			
				
				
			/*	
			$sql = "INSERT INTO aluno (nome, nomepai, nomemae, data_nasc, id_sexo, id_estado_civil, naturalidade, nacionalidade,
			 pais, identidade, ident_exp, cpf, logradouro, cep, email)
			 VALUES (".$this->db->$nome.", ".$this->db->$nomepai.", ".$this->db->$nomemae.
			 ", ".$this->db->$data_nasc.", ".$this->db->$id_sexo.", ".$this->db->$id_estado_civil.
			 ", ".$this->db->$naturalidade.", ".$this->db->$nacionalidade.", ".$this->db->$pais.
			 ", ".$this->db->$identidade.", ".$this->db->$ident_exp.", ".$this->db->$cpf.
			 ", ".$this->db->$logradouro.", ".$this->db->$cep.", ".$this->db->$email.")";
			*/	
				$this->db->query($sql);
				
				echo $this->db->affected_rows();
		}
		
		
	}
	
}
