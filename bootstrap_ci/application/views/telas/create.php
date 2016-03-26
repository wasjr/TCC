<?php 

	echo form_open('crud/create');
		echo form_label('Digite o nome ');
		echo form_input(array('name'=>'nome'),'','autofocus');
		echo '<br>';
		echo form_label('Digite o email ');
		echo form_input(array('name'=>'email'),'');
		echo '<br>';
		echo form_label('Digite o login ');
		echo form_input(array('name'=>'login'),'');
		echo '<br>';
		echo form_label('Digite a senha ');
		echo form_password(array('name'=>'senha'),'');
		echo '<br>';
		echo form_label('Confirme a senha ');
		echo form_password(array('name'=>'senha2'),'');
		echo '<br>';
		echo form_submit(array('name'=>'cadastrar'), 'Cadastrar');
			
	echo '<br>';
	
	echo form_close();

?>
