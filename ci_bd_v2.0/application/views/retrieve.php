<?php

	echo '<h2>Lista de Usuários</h2>';
	
	foreach ($usuarios as $linha) {
		$this->table->add_row($linha->login, $linha->senha);
	}
	
	echo $this->table->generate();

?>