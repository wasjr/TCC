
<?php
	

 if (validation_errors()!=""){
	echo "<div class='alert alert-danger' role='alert'>
  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>";
  echo validation_errors();
  echo "</div>";
}
	

   ?>
<?php echo form_open('aluno/cadastro'); ?>

<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                <legend><i class="glyphicon glyphicon-pencil"></i></a> I - Dados Pessoais</legend>
                <form  class="form-group" role="form">
                
                <span class='glyphicon glyphicon-asterisk' style='color:red'></span>&nbsp;Campos Obrigatórios<br><br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span>  <label >Nome</label>  
                <input class="form-control" name="nome" placeholder="Insira seu nome completo" value="<?php echo set_value('nome'); ?>" type="text"/>
                <br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span> <label>Nome Pai</label>
                <input class="form-control" name="nomepai" placeholder="Insira o nome completo de seu pai" value="<?php echo set_value('nomepai'); ?>" type="text"/>
                <br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span> <label>Nome Mãe</label>
                <input class="form-control" name="nomemae" placeholder="Insira o nome completo de sua mãe" value="<?php echo set_value('nomemae'); ?>" type="text"/>
                <br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span> <label>Nascimento</label>
                <input id="dp_nasc" class="form-control" name="data_nasc" placeholder="Selecione sua data de nascimento" value="<?php echo set_value('data_nasc'); ?>" type="date" />
                <br>
                <span class='glyphicon glyphicon-asterisk' style='color:red'></span> 
                <label >Sexo</label><br />
                  <?php
                    if (empty ($_POST['sexo'])){
                      echo "
                      <label class='radio-inline'>
                        <input type='radio' name='sexo' id='aluno_radio_btn1'  value='1' />
                            Masculino
                        </label>
                            <br />
                        <label class='radio-inline'>
                            <input type='radio' name='sexo' id='inlineCheckboxEC2'  value='2' />
                            Feminino
                        </label>
                      ";
                    }
                    elseif (($_POST['sexo']) == 'masc'){
                      echo "<label class='radio-inline'>
                        <input type='radio' name='sexo' id='aluno_radio_btn1' checked  value='1' />
                            Masculino
                        </label>
                            <br />
                        <label class='radio-inline'>
                            <input type='radio' name='sexo' id='inlineCheckboxEC2'  value='2' />
                            Feminino
                        </label>
                      ";
                    }
                    else {
                      echo "<label class='radio-inline'>
                      <input type='radio' name='sexo' id='aluno_radio_btn1'  value='1' />
                          Masculino
                      </label>
                          <br />
                      <label class='radio-inline'>
                          <input type='radio' name='sexo' id='inlineCheckboxEC2' checked value='2' />
                          Feminino
                      </label>";
                    }
                  ?>
                
                <br>
                <br>
                <span class='glyphicon glyphicon-asterisk' style='color:red'></span>
                <?php
                  if (empty ($_POST['estado_civil'])){
                    echo "<label>Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1' value='1' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2' value='2' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3' value='3' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4' value='4' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' value='5' />
                           Outros
                       </label>
                    ";
                  }
                  elseif ($_POST['estado_civil'] == 'solteiro(a)'){
                    echo "<label>Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1' checked value='1' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2' value='2' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3' value='3' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4' value='4' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' value='5' />
                           Outros
                       </label>
                    ";
                  }
                  elseif ($_POST['estado_civil'] == 'casado(a)'){
                      echo "<label>Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1'  value='1' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2' checked value='2' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3' value='3' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4' value='4' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' value='5' />
                           Outros
                       </label>
                    ";
                      
                  }
                  
                  elseif ($_POST['estado_civil'] == 'divorciado(a)'){
                      echo "<label >Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1'  value='1' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2'  value='2' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3' checked value='3' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4' value='4' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' value='5' />
                           Outros
                       </label>
                    ";
                      
                  }
                   elseif ($_POST['estado_civil'] == 'viuvo(a)'){
                      echo "<label >Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1'  value='1' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2' value='2' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3'  value='3' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4' checked value='4' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' value='5' />
                           Outros
                       </label>
                    ";
                      
                  }
                  else{
                      echo "<label >Estado Civil</label><br />
                        <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC1'  value='1' />
                           Solteiro(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC2'  value='2' />
                           Casado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC3'  value='3' />
                           Divorciado(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC4'  value='4' />
                           Viúvo(a)
                       </label>
                           <br />
                       <label class='radio-inline'>
                           <input type='radio' name='estado_civil' id='inlineCheckboxEC5' checked value='5' />
                           Outros
                       </label>
                    ";
                      
                  }
                
                ?>
                <br><br>
                <span class='glyphicon glyphicon-asterisk' style='color:red'></span>
                <label>Naturalidade</label>
                <input class='form-control' name='naturalidade' placeholder='Insira a sua naturalidade' value="<?php if (! empty($_POST['naturalidade'])) {echo $_POST['naturalidade'];}?>" type='text'/>
                <br>
                <span class='glyphicon glyphicon-asterisk' style='color:red'></span>
                <?php
                  if (empty ($_POST['nacionalidade'])){
                    echo " <label>Nacionalidade</label><br>
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='nac_br' value='Brasileiro (a)' />
                          Brasileiro(a)
                      </label>
                          <br />
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='nac_est' value='estrangeiro' />
                          Estrangeiro(a)
                      </label><br>  
                    ";
                 }
                 elseif ($_POST['nacionalidade'] == 'Brasileiro (a)'){
                    echo " <label>Nacionalidade</label><br>
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='nac_br' checked value='Brasileiro (a)' />
                          Brasileiro(a)
                      </label>
                          <br />
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='nac_est' value='estrangeiro' />
                          Estrangeiro(a)
                      </label><br>  
                    ";
                 }
                 
                  else {
                    echo " <label>Nacionalidade</label><br>
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='nac_br' value='Brasileiro (a)' />
                          Brasileiro(a)
                      </label>
                          <br />
                      <label class='radio-inline'>
                          <input type='radio' name='nacionalidade' id='nac_est' checked value='estrangeiro' />
                          Estrangeiro(a)
                      </label><br>  
                    ";
                 }
                ?>
                <br>
                <span class='pull-right'>País Estrangeiro</span>
                <input  id='input_estrangeiro'  class='form-control' name='pais' placeholder='Insira o nome do país estrangeiro' value='<?php if (! empty($_POST['pais'])) {echo $_POST['pais'];}?>' type='text'/>
                <br>
                <label>Identidade</label>
                <input class='form-control' name='identidade' placeholder='Insira o número de sua identidade' value='<?php if (! empty($_POST['identidade'])) {echo $_POST['identidade'];}?>' type='text' />
                <br>
                <label>Data da Expedição da Identidade</label>
                <input id='dp_ident' class='form-control' name='ident_exp' placeholder='Selecione a Data de Expedição da Identidade' value='<?php if (! empty($_POST['ident_exp'])) {echo $_POST['ident_exp'];}?>' type='text' />
                <br>
                <span class='glyphicon glyphicon-asterisk' style='color:red'></span>
                <label>CPF</label>
                <input class='form-control' name='cpf' placeholder='Insira o número de seu CPF' value='<?php if (! empty($_POST['cpf'])) {echo $_POST['cpf'];}?>' type='text' />
                <br>
                
                <!--spans pra colocar o dados em branco no bd -->
                <span name='logradouro' value=''></span>
                <span name='cep' value=''></span>
                <span name='email' value=''></span>
                
                <button class='btn btn-lg btn-success btn-block' type='submit'>
                    Avançar <span class='glyphicon glyphicon-arrow-right'></span></button>
                </form><!--Fim do formulario -->
            </div>
        </div>
    </div>