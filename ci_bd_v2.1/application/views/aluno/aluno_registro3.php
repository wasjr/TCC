
<?php
	

 if (validation_errors()!=""){
	echo "<div class='alert alert-danger' role='alert'>
  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>";
  echo validation_errors();
  echo "</div>";
}
	

   ?>
<?php echo form_open('aluno/cadastro3'); ?>

 <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                <legend><i class="glyphicon glyphicon-education"></i></a> III - Formação Acadêmica</legend>
                <form action="#" method="post" class="form-group" role="form">
                <label>Graduação</label>    
                <input class="form-control" name="graduacao" placeholder="Insira sua graduação" type="text"/>
                <br>
                <label>Instituição</label>
                <input class="form-control" name="instituição" placeholder="Insira o nome da Instituição" type="text"/>
                <br>
                <label>Conclusão do Curso</label>
                <span class="pull-right">Mês e Ano de Início</span>
                <input class="form-control" name="ini_grad" placeholder="Insira o mês e o ano do início da Graduação" type="text"/>
                <span class="pull-right">Mês e Ano de Conclusão</span>
                <input class="form-control" name="fim_grad" placeholder="Insira o mês e o ano da conclusão da Graduação" type="text"/>
                <br>
                <form class="form-horizontal"><!-- formulario de bolsas-->
                <fieldset>
                <label>Bolsista Iniciação Científica</label>
                <div id="div_pibic">
                <!-- Multiple Checkboxes (inline) -->
                <div class="form-group">
                  <div class="col-md-4">
                    <label class="checkbox-inline" for="checkboxes-0">
                      <input type="checkbox" name="checkbox_pibic" id="checkboxes-0" value="PIBIC">
                      PIBIC
                    </label>
                  </div>
                </div>
                <br><br>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right" for="pibic_ini">Início</span>  
                  <input id="pibic_ini" name="pibic_ini" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right" for="pibic_fim">Fim</span>  
                  <input id="pibic_fim" name="pibic_fim" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div><br><br><br>
                </div><!-- End div PIBIC-->
                <br>
                <div id="div_faperj">
                <div class="form-group">
                  <div class="col-md-4">
                    <label class="checkbox-inline" for="checkboxes-0">
                      <input type="checkbox" name="checkbox_faperj" id="checkboxes-0" value="FAPERJ">
                      FAPERJ
                    </label>
                  </div>
                </div>
                <br><br>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right" for="faperj_ini">Início</span>  
                  <input id="faperj_ini" name="faperj_ini" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right" for="faperj_fim">Fim</span>  
                  <input id="faperj_fim" name="faperj_fim" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                </div><!-- end div_faperj-->
                <br><br><br><br>
                <div id="div_cnpq">
                <div class="form-group">
                  <div class="col-md-4">
                    <label class="checkbox-inline" for="checkboxes-0">
                      <input type="checkbox" name="checkbox_cnpq" id="checkboxes-0" value="PIBIC">
                      CNPq
                    </label>
                  </div>
                </div>
                <br><br>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right" for="cnpq_ini">Início</span>  
                  <input id="cnpq_ini" name="cnpq_ini" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right" for="cnpq_fim">Fim</span>  
                  <input id="cnpq_fim" name="cnpq_fim" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                </div><!-- end div_cnpq-->
                <br><br><br><br>
                <div id="div_outro">
                <div class="form-group">
                  <div class="col-md-4">
                    <label class="checkbox-inline" for="checkboxes-0">
                      <input type="checkbox" name="checkbo_outro" id="checkboxes-0" value="outro">
                      Outro
                    </label>
                  </div>
                </div>
                <br>
                <span class="pull-right" for="outro_fim">Especificar</span>
                <input class="form-control" name="especificar" placeholder="Insira o nome da Instituição" type="text"/>
                <br>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right" for="cnpq_ini">Início</span>  
                  <input id="outro_ini" name="outro_ini" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right" for="outro_fim">Fim</span>  
                  <input id="outro_fim" name="outro_fim" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                </div><!-- end div_outro-->
                </fieldset>
                </form><!-- fim do formulario com os tipos de bolsas-->
                <button class="btn btn-lg btn-success btn-block" type="submit">
                    Avançar <span class="glyphicon glyphicon-arrow-right"></span></button>
                </form><!--Fim do formulario -->
            </div>
        </div>
    </div><!--End div container -->