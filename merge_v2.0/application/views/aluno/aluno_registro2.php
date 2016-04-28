
<?php
	

 if (validation_errors()!=""){
	echo "<div class='alert alert-danger' role='alert'>
  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>";
  echo validation_errors();
  echo "</div>";
}
	

   ?>
<?php echo form_open('aluno/cadastro2'); ?>

 <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                <legend><i class="glyphicon glyphicon-home"></i>&nbsp<i class="glyphicon glyphicon-earphone"></i></a> II - Endereço e Contato</legend>
                <form action="registro_aluno3.php" method="post" class="form-group" role="form">
                <label>Rua/Avenida</label>    
                <input class="form-control" name="logradouro" value="<?php if (! empty($_POST['logradouro'])) {echo $_POST['logradouro'];}?>" placeholder="Insira o nome da Rua ou Avenida" type="text"/>
                <br>
                <label>Número</label>
                <input class="form-control" name="logradouro_numero" value="<?php if (! empty($_POST['logradouro_numero'])) {echo $_POST['logradouro_numero'];}?>" placeholder="Insira o número" type="text"/>
                <br>
                <label>Complemento</label>
                <input class="form-control" name="complemento" value="<?php if (! empty($_POST['complemento'])) {echo $_POST['complemento'];}?>" placeholder="Insira o complemento" type="text"/>
                <br>
                <label>Bairro</label>
                <input class="form-control" name="bairro" value="<?php if (! empty($_POST['bairro'])) {echo $_POST['bairro'];}?>" placeholder="Insira o nome do Bairro" type="text"/>
                <br>
                <label>Cidade</label>
                <input class="form-control" name="cidade" value="<?php if (! empty($_POST['cidade'])) {echo $_POST['cidade'];}?>" placeholder="Insira o nome da Cidade" type="text"/>
                <br>
                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Unidade Federativa</label>
                  <div class="col-md-4">
                    <select id="selectbasic" value="PA" name="selectbasic" class="form-control">
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'AC'){echo "selected='selected'";}?> value="AC">AC</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'AL'){echo "selected='selected'";}?> value="AL">AL</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'AM'){echo "selected='selected'";}?>value="AM">AM</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'AP'){echo "selected='selected'";}?>value="AP">AP</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'BA'){echo "selected='selected'";}?>value="BA">BA</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'CE'){echo "selected='selected'";}?>value="CE">CE</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'DF'){echo "selected='selected'";}?>value="DF">DF</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'ES'){echo "selected='selected'";}?>value="ES">ES</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'GO'){echo "selected='selected'";}?>value="GO">GO</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'MA'){echo "selected='selected'";}?> value="MA">MA</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'MG'){echo "selected='selected'";}?> value="MG">MG</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'MS'){echo "selected='selected'";}?>value="MS">MS</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'MT'){echo "selected='selected'";}?>value="MT">MT</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'PA'){echo "selected='selected'";}?>value="PA">PA</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'PB'){echo "selected='selected'";}?>value="PB">PB</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'PE'){echo "selected='selected'";}?>value="PE">PE</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'PI'){echo "selected='selected'";}?>value="PI">PI</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'PR'){echo "selected='selected'";}?>value="PR">PR</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'RJ'){echo "selected='selected'";}?>value="RJ">RJ</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'RN'){echo "selected='selected'";}?>value="RN">RN</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'RO'){echo "selected='selected'";}?>value="RO">RO</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'RR'){echo "selected='selected'";}?>value="RR">RR</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'RS'){echo "selected='selected'";}?>value="RS">RS</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'SC'){echo "selected='selected'";}?>value="SC">SC</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'SE'){echo "selected='selected'";}?>value="SE">SE</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'SP'){echo "selected='selected'";}?>value="SP">SP</option>
                      <option <?php if (!empty ($_POST['selectbasic']) AND $_POST['selectbasic'] == 'TO'){echo "selected='selected'";}?>value="TO">TO</option>
                    </select>
                  </div>
                </div>
                
                </fieldset>
                <br><br>
                <br>
                <label>CEP</label>
                <input class="form-control" name="cep" value="<?php if (! empty($_POST['cep'])) {echo $_POST['cep'];}?>" placeholder="Insira o CEP" type="text"/>
                <br>
                <br>
                <label>Telefone Fixo</label>
                <input class="form-control" name="tel_fixo" value="<?php if (! empty($_POST['tel_fixo'])) {echo $_POST['tel_fixo'];}?>" placeholder="Insira o código de área e o número do telefone fixo" type="text" />
                <br>
                <label>Telefone Celular</label>
                <input class="form-control" name="tel_cel" value="<?php if (! empty($_POST['tel_cel'])) {echo $_POST['tel_cel'];}?>" placeholder="Insira o código de área e o número do telefone celular" type="text" />
                <br>
                <label>Email</label>
                <input class="form-control" name="email" value="<?php if (! empty($_POST['email'])) {echo $_POST['email'];}?>" placeholder="Insira o seu endereço de email" type="email" />
                <br>
                <label>Confirmação de email</label>
                <input class="form-control" name="conf_email" value="<?php if (! empty($_POST['conf_email'])) {echo $_POST['conf_email'];}?>" placeholder="Insira o seu endereço de email" type="email" />
                <br>
                <button class="btn btn-lg btn-success btn-block" type="submit">
                    Avançar <span class="glyphicon glyphicon-arrow-right"></span></button>
                </form><!--Fim do formulario -->
            </div>
        </div>
    </div>