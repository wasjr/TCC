<?php 

	echo form_open('bd/insert');
	
	echo validation_errors('<p>','</p>');
	if($this->session->flashdata('cadastrook')){
		echo  '<p>'.$this->session->flashdata('cadastrook').'</p>';
	}
	
		echo form_label('Digite o login ');
		echo form_input(array('name'=>'login'),'','autofocus');
		echo '<br>';
		echo form_label('Digite a senha ');
		echo form_input(array('name'=>'senha'),'');
		echo '<br>';
		echo form_submit(array('name'=>'cadastrar'), 'Cadastrar');
		
	echo '<br>';
	
	echo form_close();

?>
