
<?php
	

 if (validation_errors()!=""){
	echo "<div class='alert alert-danger' role='alert'>
  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>";
  echo validation_errors();
  echo "</div>";
}
	

   ?>
<?php echo form_open('secretaria/cadastro_professor'); ?>

<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                <legend><i class="glyphicon glyphicon-pencil"></i></a> Cadastro de Professor(a)</legend>
                <form  class="form-group" role="form">
                
                <span class='glyphicon glyphicon-asterisk' style='color:red'></span>&nbsp;Campos Obrigatórios<br><br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span>  <label >Nome</label>  
                <input class="form-control" name="nome" placeholder="Insira seu nome completo" value="<?php echo set_value('nome'); ?>" type="text"/>
                <br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span> <label>Matrícula</label>
                <input class="form-control" name="matricula" placeholder="Insira a Matrícula" value="<?php echo set_value('matricula'); ?>" type="text"/>
                <br>
                <span class='glyphicon glyphicon-asterisk' style='color:red'></span>
                <label>CPF</label>
                <input class='form-control' name='cpf' placeholder='Insira o número de seu CPF' value='<?php if (! empty($_POST['cpf'])) {echo $_POST['cpf'];}?>' type='text' />
                <br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span> <label>Departamento</label>
                <input class="form-control" name="departamento" placeholder="Insira o Departamento" value="<?php echo set_value('departamento'); ?>" type="text"/>
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
                
                <label>Telefone na Universidade</label>
                <input class="form-control" name="ramal" value="<?php if (! empty($_POST['ramal'])) {echo $_POST['ramal'];}?>" placeholder="Insira o ramal" type="text" />
                <br>
                <label>Telefone Residencial</label>
                <input class="form-control" name="tel_fixo" value="<?php if (! empty($_POST['tel_fixo'])) {echo $_POST['tel_fixo'];}?>" placeholder="Insira o código de área e o número do telefone fixo" type="text" />
                <br>
                <label>Telefone Celular</label>
                <input class="form-control" name="tel_cel" value="<?php if (! empty($_POST['tel_cel'])) {echo $_POST['tel_cel'];}?>" placeholder="Insira o código de área e o número do telefone celular" type="text" />
                <br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span>
                <label>Email</label>
                <input class="form-control" name="email" value="<?php if (! empty($_POST['email'])) {echo $_POST['email'];}?>" placeholder="Insira o endereço de email" type="email" />
                <br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span>
                <label>Confirmação de email</label>
                <input class="form-control" name="conf_email" value="<?php if (! empty($_POST['conf_email'])) {echo $_POST['conf_email'];}?>" placeholder="Confirme o endereço de email" type="email" />
                <br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span>
                <label>Senha de primeiro acesso</label>
                <input class="form-control" name="senha_prim" value="<?php if (! empty($_POST['senha_prim'])) {echo $_POST['senha_prim'];}?>" placeholder="Insira a senha de primeiro acesso do(a) professor(a)" type="password" />
                <br>
                <span class="glyphicon glyphicon-asterisk" style="color:red"></span>
                <label>Confirmação de senha de primeiro acesso</label>
                <input class="form-control" name="conf_email" value="<?php if (! empty($_POST['conf_email'])) {echo $_POST['conf_email'];}?>" placeholder="Confirme a senha de primeiro acesso do(a) professor(a)" type="password" />
                <br>
                <button class='btn btn-lg btn-success btn-block' type='submit'>
                    Registrar </button>
                </form><!--Fim do formulario -->
            </div>
        </div>
    </div>