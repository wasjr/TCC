
<?php
	

 if (validation_errors()!=""){
	echo "<div class='alert alert-danger' role='alert'>
  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>";
  echo validation_errors();
  echo "</div>";
}
	

   ?>
<?php echo form_open('aluno/cadastro4'); ?>

  <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                <legend><i class="glyphicon glyphicon-education"></i></a> IV - Área Profissional</legend>
                <form action="#" method="post" class="form-group" role="form">
                
               <form class="form-horizontal">
                  <fieldset>
                  <!-- Multiple Radios -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="radios"></label>
                      <div class="col-md-4">
                      <div class="radio">
                        <label for="radios-0">
                          <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
                          Docente da UFRRJ
                        </label>
                        </div>
                      <div class="radio">
                        <label for="radios-1">
                          <input name="radios" id="radios-1" value="2" type="radio">
                          Docente de outra IES do País
                        </label>
                        </div>
                      <div class="radio">
                        <label for="radios-2">
                          <input name="radios" id="radios-2" value="3" type="radio">
                          Docente de outra IES no Exterior
                        </label>
                        </div>
                      <div class="radio">
                        <label for="radios-3">
                          <input name="radios" id="radios-3" value="4" type="radio">
                          Pesquisador
                        </label>
                        </div>
                      <div class="radio">
                        <label for="radios-4">
                          <input name="radios" id="radios-4" value="5" type="radio">
                          Outro Vínculo
                        </label>
                        </div>
                      <div class="radio">
                        <label for="radios-5">
                          <input name="radios" id="radios-5" value="6" type="radio">
                          Sem Vínculo
                        </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <span for=""><b>Cargo ou Função</b></span><!--Colocar um id no for -->
                  <input class="form-control" name="especificar" placeholder="" type="text"/>
                  <br>
                  <span for=""><b>Matrícula Funcional</b></span><!--Colocar um id no for -->
                  <input class="form-control" name="especificar" placeholder="Digite o código da matrícula" type="text"/>
                  <br>
                  <button class="btn btn-lg btn-success btn-block" type="submit">
                    Avançar <span class="glyphicon glyphicon-arrow-right"></span></button>
                </form><!--Fim do formulario -->
                  
                </form>
            </div>
        </div>
    </div><!--End div container -->