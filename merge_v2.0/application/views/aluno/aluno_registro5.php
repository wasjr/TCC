
<?php
	

 if (validation_errors()!=""){
	echo "<div class='alert alert-danger' role='alert'>
  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>";
  echo validation_errors();
  echo "</div>";
}
	

   ?>
<?php echo form_open('aluno/cadastro5'); ?>

   <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                <legend><i class="glyphicon glyphicon-home"></i>&nbsp<i class="glyphicon glyphicon-earphone"></i></a> V - Endereço Profissional</legend>
                <form action="#" method="post" class="form-group" role="form">
                <label>Empregador</label>    
                <input class="form-control" name="empregador" placeholder="Insira o nome do Empregador" type="text"/>
                <br>
                <label>Rua/Avenida</label>    
                <input class="form-control" name="logradouro" placeholder="Insira o nome da Rua ou Avenida" type="text"/>
                <br>
                <label>Número</label>
                <input class="form-control" name="logradouro_numero" placeholder="Insira o número" type="text"/>
                <br>
                <label>Complemento</label>
                <input class="form-control" name="complemento" placeholder="Insira o complemento" type="text"/>
                <br>
                <label>Bairro</label>
                <input class="form-control" name="bairro" placeholder="Insira o nome do Bairro" type="text"/>
                <br>
                <label>Cidade</label>
                <input class="form-control" name="cidade" placeholder="Insira o nome da Cidade" type="text"/>
                <br>
                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Unidade Federativa</label>
                  <div class="col-md-4">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                      <option value="AC">AC</option>
                      <option value="AL">AL</option>
                      <option value="AM">AM</option>
                      <option value="AP">AP</option>
                      <option value="BA">BA</option>
                      <option value="CE">CE</option>
                      <option value="DF">DF</option>
                      <option value="ES">ES</option>
                      <option value="GO">GO</option>
                      <option value="MA">MA</option>
                      <option value="MG">MG</option>
                      <option value="MS">MS</option>
                      <option value="MT">MT</option>
                      <option value="PA">PA</option>
                      <option value="PB">PB</option>
                      <option value="PE">PE</option>
                      <option value="PI">PI</option>
                      <option value="PR">PR</option>
                      <option value="RJ">RJ</option>
                      <option value="RN">RN</option>
                      <option value="RO">RO</option>
                      <option value="RR">RR</option>
                      <option value="RS">RS</option>
                      <option value="SC">SC</option>
                      <option value="SE">SE</option>
                      <option value="SP">SP</option>
                      <option value="TO">TO</option>
                    </select>
                  </div>
                </div>
                
                </fieldset>
                <br><br>
                <br>
                <label>CEP</label>
                <input class="form-control" name="cep" placeholder="Insira o CEP" type="text"/>
                <br>
                <br>
                <label>Telefone Comercial</label>
                <input class="form-control" name="tel_fixo" placeholder="Insira o código de área e o número do telefone fixo" type="text" />
                <br>
                <label>Telefone Celular</label>
                <input class="form-control" name="tel_cel" placeholder="Insira o código de área e o número do telefone celular" type="text" />
                <br>
                <label>Email</label>
                <input class="form-control" name="email" placeholder="Insira o seu endereço de email" type="email" />
                <br>
                <button class="btn btn-lg btn-success btn-block" type="submit">
                    Avançar <span class="glyphicon glyphicon-arrow-right"></span></button>
                </form><!--Fim do formulario -->
            </div>
        </div>
    </div>
