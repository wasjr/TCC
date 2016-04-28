
<?php if (validation_errors()!=""){
	echo "<div class='alert alert-danger' role='alert'>
  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>";
  echo validation_errors();
  echo "</div>";
	
	
	
}
	

   ?>
<?php echo form_open('form'); ?>

<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                <legend><i class="glyphicon glyphicon-pencil"></i></a> I - Dados Pessoais</legend>
                <form action="registro_aluno2.php" method="post" class="form-group" role="form">
                <label>Nome</label>    
                <input class="form-control" name="nome" placeholder="Insira seu nome completo" value="<?php echo set_value('nome'); ?>" type="text"/>
                <br>
                <label>Nome Pai</label>
                <input class="form-control" name="nomepai" placeholder="Insira o nome completo de seu pai" value="<?php echo set_value('nomepai'); ?>" type="text"/>
                <br>
                <label>Nome Mãe</label>
                <input class="form-control" name="nomemae" placeholder="Insira o nome completo de sua mãe" value="<?php echo set_value('nomemae'); ?>" type="text"/>
                <br>
                <label>Nascimento</label>
                <input id="dp_nasc" class="form-control" name="data_nasc" placeholder="Selecione sua data de nascimento" value="<?php echo set_value('data_nasc'); ?>" type="text" />
                <br>
                <label class="col-xs-12 col-md-12 col-sm-12">Sexo</label><br />
                  <?php
                    if (empty ($_POST['sexo'])){
                      echo "<label class='radio-inline'>
                        <input type='radio' name='sexo' id='aluno_radio_btn1'  value='masc' />
                            Masculino
                        </label>
                            <br />
                        <label class='radio-inline'>
                            <input type='radio' name='sexo' id='inlineCheckboxEC2'  value='fem' />
                            Feminino
                        </label>
                      ";
                    }
                    elseif (($_POST['sexo']) == 'masc'){
                      echo "<label class='radio-inline'>
                        <input type='radio' name='sexo' id='aluno_radio_btn1' checked  value='masc' />
                            Masculino
                        </label>
                            <br />
                        <label class='radio-inline'>
                            <input type='radio' name='sexo' id='inlineCheckboxEC2'  value='fem' />
                            Feminino
                        </label>
                      ";
                    }
                    else {
                      echo "<label class='radio-inline'>
                      <input type='radio' name='sexo' id='aluno_radio_btn1'  value='masc' />
                          Masculino
                      </label>
                          <br />
                      <label class='radio-inline'>
                          <input type='radio' name='sexo' id='inlineCheckboxEC2' checked value='fem' />
                          Feminino
                      </label>";
                    }
                  ?>
                
                <br>
                <br>
                <?php
                  if (empty ($_POST['estado_civil'])){
                    echo "<label class='col-xs-12 col-md-12 col-sm-12'>Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1' value='solteiro(a)' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2' value='casado(a)' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3' value='divorciado(a)' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4' value='viuvo(a)' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' value='outros' />
                           Outros
                       </label>
                    ";
                  }
                  elseif ($_POST['estado_civil'] == 'solteiro(a)'){
                    echo "<label class='col-xs-12 col-md-12 col-sm-12'>Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1' checked value='solteiro(a)' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2' value='casado(a)' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3' value='divorciado(a)' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4' value='viuvo(a)' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' value='outros' />
                           Outros
                       </label>
                    ";
                  }
                  elseif ($_POST['estado_civil'] == 'casado(a)'){
                      echo "<label class='col-xs-12 col-md-12 col-sm-12'>Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1'  value='solteiro(a)' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2' checked value='casado(a)' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3' value='divorciado(a)' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4' value='viuvo(a)' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' value='outros' />
                           Outros
                       </label>
                    ";
                      
                  }
                  
                  elseif ($_POST['estado_civil'] == 'divorciado(a)'){
                      echo "<label class='col-xs-12 col-md-12 col-sm-12'>Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1'  value='solteiro(a)' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2'  value='casado(a)' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3' checked value='divorciado(a)' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4' value='viuvo(a)' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' value='outros' />
                           Outros
                       </label>
                    ";
                      
                  }
                   elseif ($_POST['estado_civil'] == 'viuvo(a)'){
                      echo "<label class='col-xs-12 col-md-12 col-sm-12'>Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1'  value='solteiro(a)' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2' value='casado(a)' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3'  value='divorciado(a)' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4' checked value='viuvo(a)' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' value='outros' />
                           Outros
                       </label>
                    ";
                      
                  }
                  else{
                      echo "<label class='col-xs-12 col-md-12 col-sm-12'>Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1'  value='solteiro(a)' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2'  value='casado(a)' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3'  value='divorciado(a)' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4'  value='viuvo(a)' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' checked value='outros' />
                           Outros
                       </label>
                    ";
                      
                  }
                
                ?>
                <br><br>
                <label>Naturalidade</label>
                <input class='form-control' name='naturalidade' placeholder='Insira a sua naturalidade' value="<?php if (! empty($_POST['naturalidade'])) {echo $_POST['naturalidade'];}?>" type='text'/>
                <br>
                <?php
                  if (empty ($_POST['nacionalidade'])){
                    echo " <label>Nacionalidade</label><br>
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='inlineCheckboxEC4' value='Brasileiro (a)' />
                          Brasileiro(a)
                      </label>
                          <br />
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='inlineCheckboxEC5' value='estrangeiro' />
                          Estrangeiro(a)
                      </label><br>  
                    ";
                 }
                 elseif ($_POST['nacionalidade'] == 'Brasileiro (a)'){
                    echo " <label>Nacionalidade</label><br>
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='inlineCheckboxEC4' checked value='Brasileiro (a)' />
                          Brasileiro(a)
                      </label>
                          <br />
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='inlineCheckboxEC5' value='estrangeiro' />
                          Estrangeiro(a)
                      </label><br>  
                    ";
                 }
                 
                  else {
                    echo " <label>Nacionalidade</label><br>
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='inlineCheckboxEC4' value='Brasileiro (a)' />
                          Brasileiro(a)
                      </label>
                          <br />
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='inlineCheckboxEC5' checked value='estrangeiro' />
                          Estrangeiro(a)
                      </label><br>  
                    ";
                 }
                ?>
                <br>
                <span class='pull-right'>País Estrangeiro</span>
                <input class='form-control' name='pais' placeholder='Insira o nome do país estrangeiro' value='<?php if (! empty($_POST['pais'])) {echo $_POST['pais'];}?>' type='text'/>
                <br>
                <label>Identidade</label>
                <input class='form-control' name='identidade' placeholder='Insira o número de sua identidade' value='<?php if (! empty($_POST['identidade'])) {echo $_POST['identidade'];}?>' type='text' />
                <br>
                <label>Data da Expedição da Identidade</label>
                <input id='dp_ident' class='form-control' name='IdentDtExp' placeholder='Selecione a Data de Expedição da Identidade' value='<?php if (! empty($_POST['IdentDtExp'])) {echo $_POST['IdentDtExp'];}?>' type='text' />
                <br>
                <label>CPF</label>
                <input class='form-control' name='cpf' placeholder='Insira o número de seu CPF' value='<?php if (! empty($_POST['cpf'])) {echo $_POST['cpf'];}?>' type='text' />
                <br>
                <button class='btn btn-lg btn-success btn-block' type='submit'>
                    Avançar <span class='glyphicon glyphicon-arrow-right'></span></button>
                </form><!--Fim do formulario -->
            </div>
        </div>
    </div>