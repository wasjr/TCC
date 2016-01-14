<?php
 echo ("Nome: " . $_POST["nome"]);
 echo "<br>";
 echo ("Nome pai: " . $_POST["nomepai"]);
 echo "<br>";
 echo ("Nome mae: " . $_POST["nomemae"]);
 echo "<br>";
 echo ("Data nasc: " . $_POST["data_nasc"]);
 echo "<br>";
 echo ("Sexo: " . $_POST["sexo"]);
 echo "<br>";
 echo ("Estado civil: " . $_POST["estado_civil"]);
 echo "<br>";
 echo ("Naturalidade: " . $_POST["naturalidade"]);
 echo "<br>";
 echo ("Nacionalidade: " . $_POST["nacionalidade"]);
 echo "<br>";
 if ($_POST["nacionalidade"] != "Brasileiro (a)"){
  echo  ("Pais: " . $_POST["pais"]);
  echo "<br>";
  
 }
 
 echo ("Identidade " . $_POST["identidade"] ); 
 echo "<br>";
 echo  ("Data de expedição" . $_POST["IdentDtExp"]);
 echo "<br>";
 echo  ("CPF: " .$_POST["cpf"]);
 

?>